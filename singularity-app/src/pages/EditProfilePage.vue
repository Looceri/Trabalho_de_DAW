<template>
  <img src="../assets/ilustrations/profile_background.jpg" style="width: 101%;" alt="">
   <q-card class="q-pa-md">
      <q-card-section class="row items-center justify-between">
        <div class="column">
          <q-avatar size="100px" rounded>
            <img src="https://via.placeholder.com/150" alt="Avatar" />
          </q-avatar>
          <div class="text-h6 q-mt-md">Orlando Diggs</div>
          <div class="text-subtitle2">Maputo, Moçambique</div>
          <div class="q-mt-sm">120k seguidores | 23k a seguir</div>
        </div>
        <div class="column items-end">
          <q-btn color="primary" label="Edit profile" flat icon="edit" class="q-mt-sm" />
        </div>
      </q-card-section>
    </q-card>
  <q-page padding>

    <br>
    <content_card icon="account_circle" title="Sobre Mim"
      content="Sou um profissional em Tecnologia da Informação formado pela University of Oxford, com 7 anos de experiência na Amazon Inc como Manager." />
    <br>
    <objects_card icon="business_center" title="Experiência de Trabalho" :objects="[{
      role: 'Manager',
      company: 'Amazon Inc',
      dates: 'Jan 2015 - Feb 2022 · 5 anos'
    }]" />
    <br>
    <objects_card icon="school" title="Educação" :objects="[{
      role: 'Tecnologia da Informação',
      company: 'Universidade de Oxford',
      dates: 'Set 2010 - Ago 2013 · 5 anos'
    },
    {
      role: 'Tecnologia da Informação',
      company: 'Universidade de Oxford',
      dates: 'Set 2010 - Ago 2013 · 5 anos'
    }]" />
    <br>
    <list_card icon="workspace_premium" title="Habilidades"
      :items="['Liderança', 'Visionário', 'Consistente', 'Trabalho em Equipe', 'Honesto']" />
    <br>
    <list_card icon="translate" title="Idiomas" :items="['Inglês', 'Alemão', 'Espanhol']" />
    <br>
    <curriculum_card icon="content_paste" title="Cúrriculo" :files="[{
      name: 'Jamet kudasi - CV - UI/UX Designer',
      details: '867 Kb · 14 Feb 2022 as 11:30'
    }, {
      name: 'Jamet kudasi - CV - UI/UX Designer',
      details: '867 Kb · 14 Feb 2022 as 11:30'
    }]" />
    <br>
  </q-page>
</template>

<script setup>
import { ref } from 'vue';
import list_card from '../components/ListCard.vue';
import content_card from '../components/ContentCard.vue';
import objects_card from '../components/ObjectCard.vue';
import curriculum_card from '../components/FileCard.vue';


const editableSections = ref([
  { label: 'Cúrriculo', icon: 'picture_as_pdf', content: 'Jamet kudasi - CV - UI/UX Designer' },
]);
</script>
