<template>
  <q-card class="q-pa-md">
    <q-card-section class="row items-center justify-between">
      <div class="row">
        <q-icon :name="icon" color="primary" size="24px" />
        <span class="q-ml-sm" style="font-size: large; font-weight:bold;">{{ title }}</span>
      </div>
      <q-btn flat dense color="primary" icon="add" rounded style="background-color: papayawhip;" @click="addObject" />
    </q-card-section>

    <div v-if="objects.length > 0">
      <q-separator color="gainsboro" inset />

      <template v-for="(object, index) in objects" :key="index">
        <q-card-section class="row items-center justify-between">
          <div class="column">
            <h6 class="q-mb-xs q-mt-xs" style="font-size: medium;">{{ object.role }}</h6>
            <p class="text-grey-8 q-mb-xs" style="font-size: small;">{{ object.company }}</p>
            <p class="text-grey-8" style="font-size: small;">{{ object.dates }}</p>
          </div>
          <q-btn flat dense color="primary" icon="edit" @click="editObject(index)" />
        </q-card-section>
        <q-separator v-if="index < objects.length - 1" color="gainsboro" inset />
      </template>

      <template v-if="objects.length > 1">
        <q-card-section class="row justify-end no-padding">
          <q-btn
            flat
            dense
            color="secondary"
            :label="showMore ? 'Ver Mais' : 'Ver Menos'"
            @click="showMore = !showMore"
          />
        </q-card-section>
      </template>
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
  icon: {
    type: String,
    default: 'label'
  },
  objects: {
    type: Array,
    default: () => []
  }
});

const showMore = ref(true);

const addObject = () => {
  console.log('Adicionar Objecto');
  // Implementar lógica para adicionar nova objecto
};

const editObject = (index) => {
  console.log('Editar Objecto', index);
  // Implementar lógica para editar a objecto no índice 'index'
};
</script>

<style scoped>
.q-card {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
