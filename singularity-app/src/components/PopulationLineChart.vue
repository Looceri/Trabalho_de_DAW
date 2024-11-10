<template>
  <q-card>
    <q-card-section>
      <q-chart type="line" :data="chartData" />
    </q-card-section>
  </q-card>
</template>

<script setup>
import { defineProps, computed } from 'vue'
import { QChart } from 'quasar'

const props = defineProps({
  data: Array
})

const chartData = computed(() => ({
  labels: props.data.map(d => d.label),
  datasets: [
    {
      label: 'Percentual de Salário por População',
      data: props.data.map(d => d.value),
      borderColor: '#FFA500',
      fill: false
    }
  ]
}))
</script>
