<template>
  <q-page padding>
    <q-card class="q-pa-md">
      <q-card-section class="text-center">
        <q-avatar size="100px" rounded>
          <img src="https://via.placeholder.com/150" alt="Avatar" />
        </q-avatar>
        <div class="text-h6 q-mt-md">Orlando Diggs</div>
        <div class="text-subtitle2">Maputo, Moçambique</div>
        <div class="q-mt-sm">120k seguidores | 23k a seguir</div>
        <q-btn color="primary" label="Edit profile" flat icon="edit" class="q-mt-sm" />
      </q-card-section>
      <q-list separator class="q-mt-md">
        <q-item v-for="section in editableSections" :key="section.label" clickable>
          <q-item-section avatar>
            <q-icon :name="section.icon" />
          </q-item-section>
          <q-item-section>
            <q-item-label>{{ section.label }}</q-item-label>
            <q-item-label caption>{{ section.content }}</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-icon name="edit" />
          </q-item-section>
        </q-item>
      </q-list>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      editableSections: [
        { label: 'Sobre Mim', icon: 'info', content: 'Sou um profissional em Tecnologia...' },
        { label: 'Experiência de Trabalho', icon: 'work', content: 'Manager - Amazon Inc (2015 - 2022)' },
        { label: 'Educação', icon: 'school', content: 'Universidade de Oxford - TI (2010 - 2013)' },
        { label: 'Skill', icon: 'psychology', content: 'Liderança, Visão, Consistente...' },
      ],
    };
  },
};
</script>
