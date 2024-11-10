<template>
  <q-card>
    <q-card-section>
      <div class="province-header">{{ province.name }}</div>
      <div>Total de Vagas Disponíveis: {{ province.jobOpenings }}</div>
      <div>Média Salarial: {{ province.salaryAverage }}</div>
      <div>Setor Mais Demandado: {{ province.topSector }}</div>
    </q-card-section>
  </q-card>
</template>

<script setup>
import { defineProps } from 'vue'
const props = defineProps({
  province: Object
})
</script>
