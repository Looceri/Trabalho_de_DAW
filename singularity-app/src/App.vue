<template>
  <div id="app">
    <jobSekker/>
    <router-view />
  </div>
</template>

<script setup>

import jobSekker from './components/jobSekker.vue';

defineOptions({
  name: 'App'
});
</script>

<style>

</style>
