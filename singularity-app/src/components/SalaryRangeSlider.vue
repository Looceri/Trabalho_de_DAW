<template>
  <div class="salary-range-slider">
    <q-range
      v-model="salaryRange"
      :min="minSalary"
      :max="maxSalary"
      class="range-slider"
      color="primary"
      label
    />
    <div class="salary-labels">
      <span>{{ minSalary }} MZN</span>
      <span>{{ maxSalary }} MZN</span>
    </div>
  </div>
</template>

<script setup>
import { ref, defineProps } from 'vue'
const props = defineProps({ minSalary: Number, maxSalary: Number })
const salaryRange = ref([props.minSalary, props.maxSalary])
</script>

<style scoped>
.salary-range-slider {
  max-width: 400px;
  margin: 20px auto;
  padding: 16px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.range-slider {
  width: 100%;
}

.salary-labels {
  display: flex;
  justify-content: space-between;
  color: #455a64;
  font-weight: 600;
}
</style>
