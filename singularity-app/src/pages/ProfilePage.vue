<template>

  <q-card style="background-image: url('assets/profile_background.jpg');
  background-size: cover;
  background-position: center;
  position: fixed;
  z-index: 1; border-radius:  0px 0px 30px 40px; width: 101%;">
    <q-card-section class="row items-center justify-between">
      <div class="row">
        <div class="column">
          <q-avatar style="height: 100px; width: 100px;">
            <img src="https:picsum.photos/100" alt="Avatar" />
          </q-avatar>
          <div class="text-h6 q-mt-md text-primary">{{ userStore.user.name }}</div>
          <div class="text-subtitle2 text-white">Maputo, Moçambique</div>
        </div>
      </div>
      <div class="row items-center full-width">
        <div class="col-4 q-mt-sm text-white justify-around" style="font-size: small;">120k seguidores</div>
        <div class="col-3 q-mt-sm text-white" style="font-size: small;">23k a seguir</div>
        <div class="col-5 q-mt-sm">
          <q-btn @click="editProfile" rounded color="white" style="background-color: lab(100 0 -0.03 / 0.12); font-size: small;"
            label="Edit profile" flat icon="edit" />
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
            <img src="https:picsum.photos/100" alt="Avatar" />
          </q-avatar>
          <div class="text-h6 q-mt-md text-primary">Orlando Diggs</div>
          <div class="text-subtitle2 text-white">Maputo, Moçambique</div>
        </div>
      </div>
      <div class="row items-center full-width">
        <div class="col-4 q-mt-sm text-white justify-around" style="font-size: small;">120k seguidores</div>
        <div class="col-3 q-mt-sm text-white" style="font-size: small;">23k a seguir</div>
        <div class="col-5 q-mt-sm">
          <q-btn rounded color="white" style="background-color: lab(100 0 -0.03 / 0.12); font-size: small;"
            label="Edit profile" flat icon="edit" />
        </div>
      </div>
    </q-card-section>
  </q-card>
  <br>
  <q-page padding style="min-height: fit-content;">

    <content_card icon = "account_circle" title = "Sobre Mim"
      content = "Sou um profissional em Tecnologia da Informação formado pela University of Oxford, com 7 anos de experiência na Amazon Inc como Manager."
      route ="profile-edit-about_me" />
    <br>
    <objects_card icon="business_center" title="Experiência de Trabalho" :objects="[
      {
        role: 'Manager',
        company: 'Amazon Inc',
        dates: 'Jan 2015 - Feb 2022 · 5 anos'
      }
    ]
      " />
    <br>
    <objects_card icon="school" title="Educação" :objects="[
      {
        role: 'Tecnologia da Informação',
        company: 'Universidade de Oxford',
        dates: 'Set 2010 - Ago 2013 · 5 anos'
      },
      {
        role: 'Tecnologia da Informação',
        company: 'Universidade de Oxford',
        dates: 'Set 2010 - Ago 2013 · 5 anos'
      }
    ]" />
    <br>
    <list_card icon="workspace_premium" title="Habilidades" :items="[
      'Liderança', 'Visionário', 'Consistente', 'Trabalho em Equipe', 'Honesto'
    ]" />
    <br>
    <list_card icon="translate" title="Idiomas" :items="[
      'Inglês', 'Alemão', 'Espanhol'
    ]" />
    <br>
    <curriculum_card icon="content_paste" title="Cúrriculo" :files="[
      {
        name: 'Jamet kudasi - CV - UI/UX Designer',
        details: '867 Kb · 14 Feb 2022 as 11:30'
      }, {
        name: 'Jamet kudasi - CV - UI/UX Designer',
        details: '867 Kb · 14 Feb 2022 as 11:30'
      }
    ]" />
    <br>
  </q-page>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import list_card from '../components/ListCard.vue';
import content_card from '../components/ContentCard.vue';
import objects_card from '../components/ObjectCard.vue';
import curriculum_card from '../components/FileCard.vue';
import { useUserStore } from '../stores/users.js'
import { useRouter } from 'vue-router';

const userStore = useUserStore();
userStore.setUser(JSON.parse(localStorage.getItem('user')));
const router = useRouter();

onMounted(() => {
  console.log('User data:', userStore.user);
});

const editProfile = () => {
  router.push({ name: 'profile-edit' });
};

</script>
