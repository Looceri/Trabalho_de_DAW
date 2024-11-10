<template>
  <q-btn :icon="icon" @click="$emit('click')" flat />
</template>

<script setup>
import { defineProps } from 'vue'
const props = defineProps({
  icon: String
})
</script>
