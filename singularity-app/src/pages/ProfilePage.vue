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
        <q-item v-for="section in sections" :key="section.label" clickable>
          <q-item-section avatar>
            <q-icon :name="section.icon" />
          </q-item-section>
          <q-item-section>
            <q-item-label>{{ section.label }}</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-icon name="add" />
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
      sections: [
        { label: 'Sobre Mim', icon: 'info' },
        { label: 'Experiência de Trabalho', icon: 'work' },
        { label: 'Educação', icon: 'school' },
        { label: 'Skill', icon: 'psychology' },
        { label: 'Idiomas', icon: 'language' },
        { label: 'Currículo', icon: 'description' },
      ],
    };
  },
};
</script>
