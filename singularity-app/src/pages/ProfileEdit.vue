<template>

  <q-card style="background-image: url('assets/profile_background.jpg');
  background-size: cover;
  background-position: center;
  position: fixed;
  z-index: 200; border-radius:  0px 0px 30px 40px; width: 101%;">
    <q-card-section class="row items-center justify-between">
      <div class="row  full-width justify-between">
        <div class="column">
          <q-avatar style="height: 100px; width: 100px;">
            <img :src="user.data.avatar || 'https:picsum.photos/100'" alt="Avatar" style="object-fit: cover;" />
          </q-avatar>
          <div class="text-h6 q-mt-md text-primary">{{ user.data.name }}</div>
          <div class="text-subtitle2 text-white">Maputo, Moçambique</div>
        </div>
        <div class="column">
          <backButton color="white" />
        </div>
      </div>
      <div class="row items-center full-width">
        <div class="col-5 q-mt-sm">
          <q-btn @click="selectImage" rounded color="white"
            style="background-color: lab(100 0 -0.03 / 0.12); font-size: small;" label="Mudar a  imagem" flat />
        </div>
      </div>
    </q-card-section>
  </q-card>
  <q-card style="background-image: url('assets/profile_background.jpg');
  background-size: cover;
  background-position: center;
 z-index: 1; border-radius:  0px 0px 30px 40px; width: 101%; visibility: hidden;">
    <q-card-section class="row items-center justify-between">
      <div class="row">
        <div class="column">
          <q-avatar style="height: 100px; width: 100px;">
            <img :src="user.avatar || 'https:picsum.photos/100'" alt="Avatar" />
          </q-avatar>
          <div class="text-h6 q-mt-md text-primary">Orlando Diggs</div>
          <div class="text-subtitle2 text-white">Maputo, Moçambique</div>
        </div>
      </div>
      <div class="row items-center full-width">
        <div class="col-5 q-mt-sm">
          <q-btn rounded color="white" style="background-color: lab(100 0 -0.03 / 0.12); font-size: small;"
            label="Edit profile" flat icon="edit" />
        </div>
      </div>
    </q-card-section>
  </q-card>

  <q-card-section>
    <div class="text-h6">Nome Completo</div>
    <q-input v-model="user.data.name" dense outlined />
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Data de nascimento</div>
    <q-input dense outlined :rules="[val => !!val || 'Data de nascimento inválida']" v-model="user.data.birth_date">
      <template v-slot:append>
        <q-icon name="event" class="cursor-pointer">
          <q-popup-proxy cover transition-show="scale" transition-hide="scale">
            <q-date v-model="birthDate" mask="DD/MM/YYYY" @update:model-value="updateBirthDate" />
          </q-popup-proxy>
        </q-icon>
      </template>
    </q-input>
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Sexo</div>
    <div class="row q-col-gutter-x-md ">
      <q-option-group class=" justify-around justify-content-end" v-model="user.data.sexo" :options="[
        { label: 'Masculino', value: 'masculino' },
        { label: 'Feminino', value: 'feminino' }
      ]" color="orange" type="radio" inline />
    </div>

  </q-card-section>

  <q-card-section>
    <div class="text-h6">Email</div>
    <q-input v-model="user.data.email" dense outlined type="email" />
  </q-card-section>


  <q-card-section>
    <div class="text-h6">Telemovel</div>
    <q-input v-model="user.data.phone" dense outlined mask="+258 8# ## ## ###"/>
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Endereço</div>
    <q-input v-model="user.data.a" dense outlined />
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Província</div>
    <q-select v-model="user.data.province" :options="provinces" emit-value map-options dense outlined />
  </q-card-section>

  <q-card-section>
    <q-btn label="SALVAR" color="orange" unelevated style="width: 100%" @click="salvar" />
  </q-card-section>

</template>



<script setup>

import { reactive, ref, computed } from 'vue';
import { useUserStore } from '../stores/users.js';
import axios from 'axios';
import backButton from 'src/components/BackButton.vue';
import { useQuasar } from 'quasar';

const $q = useQuasar();
const userStore = useUserStore();
const user = reactive(userStore.user || JSON.parse(localStorage.getItem('user')));
const birthDate = ref(user.data.birth_date ? new Date(user.data.birth_date) : null); // Use a Date object

const provinces = ref([
  'Cabo Delgado',
  'Gaza',
  'Inhambane',
  'Manica',
  'Maputo Cidade',
  'Maputo Província',
  'Nampula',
  'Niassa',
  'Sofala',
  'Tete',
  'Zambézia'
]);

if (!user.data.phone) {
  user.data.phone = ''
}

const selectImage = () => {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.onchange = () => {
    const file = input.files[0];
    const reader = new FileReader();
    reader.onload = () => {
      user.data.avatar = reader.result;
    };
    reader.readAsDataURL(file);
  };
  input.click();
};

const salvar = () => {
  console.log('Dados salvos:', JSON.stringify(user.data, null, 2));

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

const updateBirthDate = (val) => {
  console.log("Value received:", val, typeof val); // <-- Debug logging

  if (val) {
    let date;

    if (typeof val === 'string') {
      const parts = val.split('/');
      if (parts.length === 3) {
        date = new Date(Number(parts[2]), Number(parts[1]) - 1, Number(parts[0]));
      }
    } else if (val instanceof Date) {
      date = new Date(val); // Create a new Date object from the existing one
    }

    if (!date || isNaN(date.getTime())) {
      console.error("Invalid date or format:", val);
      user.data.birth_date = null;
      return;
    }

    birthDate.value = date;
    user.data.birth_date = date.toISOString().slice(0, 10);
  } else {
    birthDate.value = null;
    user.data.birth_date = null;
  }
};

// If you want to display the date in DD/MM/YYYY format in the input:
const formattedBirthDate = computed(() => {
    if (birthDate.value) {
        const day = String(birthDate.value.getDate()).padStart(2, '0');
        const month = String(birthDate.value.getMonth() + 1).padStart(2, '0'); // Month is 0-indexed
        const year = birthDate.value.getFullYear();
        return `${day}/${month}/${year}`;
    }
    return '';
});
</script>



<style lang="scss" scoped>
.profile-card {
  background: $primary;
  color: white;
  border-radius: 0px 0px 30px 40px;
  overflow: hidden;
}

.profile-card img {
  border-radius: 50%;
}
</style>

