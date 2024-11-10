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
    style="min-width: 50%;"
  >
    <q-route-tab name="home" icon="house" :to="{ name: 'indexHome' }" />
    <q-route-tab name="recycle" icon="share" :to="{ name: 'recycle' }" />
    <div class="q-tab q-tab--active" style="width: 60px; justify-items: center; margin: 0 auto;">
      <q-btn round icon="add" flat  class="x-cent bg-primary text-white" @click="handleAddClick" />
    </div>
    <q-route-tab name="messages" icon="chat" :to="{ name: 'messages' }" />
    <q-route-tab name="bookmarks" icon="bookmark" :to="{ name: 'bookmarks' }" />
  </q-tabs>
</q-footer>
  </q-layout>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const tab = ref('home');

function handleAddClick() {
  console.log("Add button clicked!");
}
</script>
