<template>
  <q-page class="q-pa-md">
    <backButton />

    <div class="text-h5 q-mb-md">Sobre Mim</div>

    <q-input v-model="sobreMim" type="textarea" placeholder="Fale me sobre si." class="q-mb-lg p-3"
      style="padding: 10px;" />

    <q-btn label="SALVAR" color="orange" unelevated style="width: 100%" @click="showDialog = true" />

    <q-dialog v-model="showDialog" position="bottom">
      <q-card class="q-pa-md"> <!-- Added padding -->
        <q-card-section>
          <div class="text-h6 text-center q-mb-sm">Salvar?</div> <!-- Centered title -->
          <div class="text-center">Você tem certeza de que deseja alterar o que você digitou?</div>
        </q-card-section>


        <q-card-actions>
          <q-btn unelevated rounded color="orange" label="SIM" class="full-width" @click="salvar" v-close-popup />
          <q-btn unelevated rounded color="secondary" label="NÃO" style="margin-top: 10px;" class="full-width"
            v-close-popup />

        </q-card-actions>
      </q-card>
    </q-dialog>
  </q-page>
</template>

<script setup>
import axios from 'axios'
import { onMounted, ref } from 'vue'
import { useUserStore } from '../stores/users.js'
import backButton from '../components/BackButton.vue'
import { useQuasar } from 'quasar';

const userStore = useUserStore();
const user = userStore.user;
const $q = useQuasar();
userStore.setUser(JSON.parse(localStorage.getItem('user')));

onMounted(() => {
  console.log('User data:', user);
});

const sobreMim = ref('');

if (user?.bio) {
  sobreMim.value = user.bio;
  console.log(user.bio);
}

const showDialog = ref(false);

const salvar = () => {
  user['bio'] = sobreMim.value;
  console.log('Dados salvos:', user.bio);
  showDialog.value = false;
  axios.post('http://localhost:8000/api/user/update', user)
    .then((response) => {
      console.log(response);
      localStorage.setItem('user', JSON.stringify(response.data));

      $q.notify({
        color: 'positive',
        icon: 'check',
        message: response.data.message,
        timeout: 2000,
      });
      userStore.setUser(response.data);
    })
    .catch((error) => {
      const errorMessage = error.response?.data?.message || 'Erro ao atualizar perfil. Tente novamente.';
      $q.notify({
        color: 'negative',
        icon: 'close',
        message: errorMessage,
        timeout: 2000,
      });
      console.log(error);
    });
};
</script>
