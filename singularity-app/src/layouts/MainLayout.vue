<template>
  <q-layout view="hHh lpR fFf">

    <!-- Exibir o componente LoadingScreen quando isLoading for true -->
    <LoadingScreen v-if="isLoading" />

    <!-- Conteúdo principal do aplicativo -->
    <q-page-container v-else>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import LoadingScreen from '@components/LoadingScreen.vue'; // Importar o LoadingScreen

// Criar uma referência para controlar o estado de carregamento
const isLoading = ref(true);

// Simular processo de carregamento (por exemplo, chamada de API ou inicialização)
onMounted(() => {
  setTimeout(() => {
    // Após o carregamento finalizar, definir isLoading como false
    isLoading.value = false;
  }, 3000); // Simulação de carregamento de 3 segundos
});

</script>
