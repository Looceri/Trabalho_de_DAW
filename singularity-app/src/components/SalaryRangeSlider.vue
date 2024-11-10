<template>
  <q-card>
    <q-card-section>
      <div>{{ label }}</div>
      <q-range v-model="range" :min="salaryRanges.min" :max="salaryRanges.max" />
    </q-card-section>
  </q-card>
</template>

<script setup>
import { defineProps, ref } from 'vue'

const props = defineProps({
  salaryRanges: Object,
  label: String
})

const range = ref([props.salaryRanges.min, props.salaryRanges.max])
</script>
