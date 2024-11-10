<template>
  <q-card class="q-pa-md">
    <q-card-section class="row items-center justify-between">
      <div class="row">
        <q-icon :name="icon" color="primary" size="24px" />
        <span class="q-ml-sm" style="font-size: large; font-weight:bold;">{{ title }}</span>
      </div>
      <q-btn v-if="items.length > 0" flat dense color="primary" icon="border_color" @click="editItems" />
      <q-btn v-else flat dense color="primary" icon="add" rounded style="background-color: papayawhip;"
        @click="addItems" />
    </q-card-section>

    <div v-if="items.length > 0">
      <q-separator color="gainsboro" inset />
      <q-card-section class="row wrap items-center q-gutter-sm">
        <template v-if="showMore">
          <q-btn v-for="(item, index) in items.slice(0, 5)" :key="index" flat rounded class="col-auto"
            style="background-color: lab(91.8 0.7 0.23); font-size:small;">
            {{ item }}
          </q-btn>
          <q-btn v-if="items.length > 5" flat dense color="secondary" label="Ver Mais" @click="showMore = false" />
        </template>
        <template v-else>
          <q-btn v-for="(item, index) in items" :key="index" flat rounded class="col-auto"
            style="background-color: lab(91.8 0.7 0.23);">
            {{ item }}

          </q-btn>
          <q-btn flat dense color="secondary" label="Ver Menos" @click="showMore = true" />
        </template>
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
  items: {
    type: Array,
    required: true
  },
  icon: {
    type: String,
    default: 'label'
  }
});

const showMore = ref(true);

const editItems = () => {
  // Implementar lógica para edição
  console.log('Editar itens');
};

const addItems = () => {
  // Implementar lógica para edição
  console.log('Add itens');
};
</script>

<style scoped>
.q-card {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
