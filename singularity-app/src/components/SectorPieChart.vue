<template>
  <q-card>
    <q-card-section>
      <q-chart type="pie" :data="chartData" />
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
      data: props.data.map(d => d.value),
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
    }
  ]
}))
</script>
