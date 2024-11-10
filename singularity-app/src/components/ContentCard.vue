<template>
  <q-card class="q-pa-md">

    <q-card-section class="row items-center justify-between">

      <div class="row">
        <q-icon :name="icon" color="primary" size="24px" />
        <span class="q-ml-sm" style="font-size: large; font-weight:bold;">{{ title }}</span>
      </div>

      <q-btn v-if="content.length > 0" flat dense color="primary" icon="border_color" @click="editContent" />
      <q-btn v-else flat dense color="primary" icon="add" rounded style="background-color: papayawhip;"
        @click="addContent" />

    </q-card-section>

    <div v-if="content.length > 0">

      <q-separator color="gainsboro" inset />

      <q-card-section class="row justify-end" >
        <p v-if="showMore && content.length > 125">{{ content.slice(0, 125)+ '...' }}</p>
        <p v-else>{{ content }}</p>
      </q-card-section>

      <q-card-section class="row justify-end no-padding" >
        <q-btn v-if="content.length > 125" flat dense color="secondary" :label="showMore ? 'Ver Mais' : 'Ver Menos'"
          @click="showMore = !showMore" />
      </q-card-section>

    </div>
  </q-card>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  title: {
    type: String,
    required: true
  },
  content: {
    type: String,
    required: true
  },
  icon: {
    type: String,
    default: 'label'
  }
});

const showMore = ref(true);

const editContent = () => {
  // Implementar lógica para edição
  console.log('Editar conteúdo');
};
</script>

<style scoped>
.q-card {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
