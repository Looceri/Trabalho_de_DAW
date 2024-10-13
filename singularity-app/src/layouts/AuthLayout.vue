<template>
  <q-layout view="hHh lpR fFf">

    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer elevated class="bg-white text-dark">
      <q-tabs no-caps active-color="primary" indicator-color="transparent" class="text-grey-8" v-model="tab">
        <q-route-tab flat icon="bi-house" label="Home" :to="{ name: 'login' }" />
        <q-route-tab flat icon="bi-geo-alt" label="Map" :to="{ name: 'login' }" />
        <q-route-tab flat icon="bi-person" label="Profile" :to="{ name: 'login' }" />
      </q-tabs>
    </q-footer>



  </q-layout>
</template>
<script setup lang="ts">
import { ref } from 'vue';

const tab = ref('home'); // Define 'tab' as a reactive variable with initial value 'home'


</script>
