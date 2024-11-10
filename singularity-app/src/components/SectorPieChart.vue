<template>
  <div class="chart-container">
    <q-chart :options="chartOptions" class="sector-pie-chart"/>
  </div>
</template>

<script setup>
import { defineProps } from 'vue'
import { QChart } from 'quasar'
const props = defineProps({ chartOptions: Object })
</script>

<style scoped>
.chart-container {
  width: 100%;
  max-width: 400px;
  margin: 20px auto;
  background-color: #ffffff;
  border-radius: 8px;
  padding: 16px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.sector-pie-chart {
  max-width: 100%;
}
</style>
