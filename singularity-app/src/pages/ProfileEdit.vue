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
            <img :src="user.avatar || 'https:picsum.photos/100'" alt="Avatar" style="object-fit: cover;" />
          </q-avatar>
          <div class="text-h6 q-mt-md text-primary">{{ user.name }}</div>
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
    <q-input v-model="user.name" dense outlined />
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Data de nascimento</div>
    <q-input v-model="user.birthdate" dense outlined>
      <template v-slot:append>
        <q-icon name="event" class="cursor-pointer">
          <q-popup-proxy cover transition-show="scale" transition-hide="scale">
            <q-date v-model="user.birthdate" mask="DD/MM/YYYY" />
          </q-popup-proxy>
        </q-icon>
      </template>
    </q-input>

  </q-card-section>

  <q-card-section>
    <div class="text-h6">Sexo</div>
    <div class="row q-col-gutter-x-md ">
      <q-option-group class=" justify-around justify-content-end" v-model="user.gender" :options="[
        { label: 'Masculino', value: 'masculino' },
        { label: 'Feminino', value: 'feminino' }
      ]" color="orange" type="radio" inline />
    </div>

  </q-card-section>

  <q-card-section>
    <div class="text-h6">Email</div>
    <q-input v-model="user.email" dense outlined type="email" />
  </q-card-section>


  <q-card-section>
    <div class="text-h6">Telemovel</div>
    <q-input v-model="user.phone" dense outlined mask="+258 8# ## ## ###"/>
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Endereço</div>
    <q-input v-model="user.adress" dense outlined />
  </q-card-section>

  <q-card-section>
    <div class="text-h6">Província</div>
    <q-select v-model="user.province" :options="provinces" emit-value map-options dense outlined />
  </q-card-section>

  <q-card-section>
    <q-btn label="SALVAR" color="orange" unelevated style="width: 100%" @click="salvar" />
  </q-card-section>

</template>



<script setup>

import { reactive, ref } from 'vue';
import { useUserStore } from '../stores/users.js';
import axios from 'axios';
import backButton from 'src/components/BackButton.vue';

const userStore = useUserStore();
const user = reactive(userStore.user || JSON.parse(localStorage.getItem('user')));
const phoneCodes = ref([
  { label: '+258', value: '+258' },
  { label: '+351', value: '+351' },
]);

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

if (!user.phone_code) {
  user.phone_code = phoneCodes.value[0].value
}

const selectImage = () => {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.onchange = () => {
    const file = input.files[0];
    const reader = new FileReader();
    reader.onload = () => {
      user.avatar = reader.result;
    };
    reader.readAsDataURL(file);
  };
  input.click();
};

const salvar = async () => {

  const response = await axios.post('/api/user/update', user);
  if (response.status == 200) {
    console.log("sucess");
    localStorage.setItem('user', JSON.stringify(response.data.user));
    userStore.setUser(response.data.user);

  }
};

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

