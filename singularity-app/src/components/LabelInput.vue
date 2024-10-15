<template>
    <!-- Componente que exibe um rótulo de texto com estilo específico -->
    <div class="email-label text-caption text-bold q-mb-xs">{{ label }}</div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  // Definindo as propriedades do componente
  const props = defineProps({
    label: {
      type: String,
      default: 'Nome', // Texto padrão do rótulo
    },
  });
  </script>
  
  <style scoped>
  .email-label {
    /* Aqui você pode adicionar estilos personalizados adicionais, se necessário */
  }
  </style>
  