<template>

  <q-card class="q-pa-md">
    <q-card-section class="row items-center justify-between">
      <div class="row">
        <q-icon :name="icon" color="primary" size="24px" />
        <span class="q-ml-sm" style="font-weight:bold;">{{ title }}</span>
      </div>
      <q-btn flat dense color="primary" rounded style="background-color: papayawhip;"  icon="add" @click="addfile" />
    </q-card-section>

    <q-separator color="gainsboro" inset />

    <template v-for="(file, index) in files" :key="index">
      <q-card-section class="row items-center justify-between">
        <div class="column">
          <q-img src="~assets/ilustrations/pdf_element.svg" width="33px" height="44px" class="q-mr-sm" />
        </div>
        <div class="column">
          <div class="row items-center">
            <span>{{ file.name }}</span>
          </div>
          <p class="text-grey-8 q-mt-xs q-mb-xs">{{ file.details }}</p>
        </div>
        <q-btn flat dense color="negative" icon="delete" @click="deletefile(index)" />
      </q-card-section>
      <q-separator v-if="index < files.length - 1" color="gainsboro" inset />
    </template>

    <template v-if="files.length > 1">
      <q-card-section class="row justify-end" style="padding: 0;">
        <q-btn flat dense color="secondary" :label="showMore ? 'Ver Mais' : 'Ver Menos'"
          @click="showMore = !showMore"  />
      </q-card-section>
    </template>
  </q-card>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  title: {
    type: String,
    required: true
  },
  icon: {
    type: String,
    default: 'label'
  },
  files: {
    type: Array,
    default: () => []
  }
});

const showMore = ref(true);

const addfile = () => {
  console.log('Adicionar Currículo');
  // Implementar lógica para adicionar novo currículo
};

const deletefile = (index) => {
  console.log('Deletar Currículo', index);
  // Implementar lógica para deletar o currículo no índice 'index'
};
</script>

<style scoped>
.q-card {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
