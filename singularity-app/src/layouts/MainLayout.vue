<template>
  <q-layout view="hHh lpR fFf">
    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer elevated class="bg-white text-dark">
      <q-tabs
        v-model="tab"
        indicator-color="transparent"
        active-color="primary"
        class="bg-white text-secondary shadow-2 q-py-md"
      >
        <!-- Aba Home -->
        <q-route-tab name="home" icon="house" :to="{ name: 'home' }" />

        <!-- Aba Jobs (Negócios) -->
        <q-route-tab
          name="jobs"
          icon="business"
          :to="{ name: 'jobs' }"
          title="Negócios"
        />

        <!-- Botão para Posts sem background -->
        <q-tab rounded name="posts" @click="goToPosts">
          <q-btn flat label="Posts" />
        </q-tab>

        <!-- Aba Map -->
        <q-route-tab name="map" icon="map" :to="{ name: 'map' }" />
      </q-tabs>
    </q-footer>
  </q-layout>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const tab = ref('home'); // Rastreando a aba ativa
const router = useRouter();

function goToPosts() {
  // Navega para a página de posts
  router.push({ name: 'CompanyPostsAll' }); // Ajuste a rota conforme necessário
}
</script>
