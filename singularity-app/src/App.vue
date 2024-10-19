<template>
  <div id="app">
    <jobSekker/>
    <router-view />
  </div>
</template>

<script setup>

import jobSekker from './pages/jobSekker.vue';

defineOptions({
  name: 'App'
});
</script>

<style>

</style>
