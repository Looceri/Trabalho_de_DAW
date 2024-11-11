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
        <q-route-tab name="home" icon="house" :to="{ name: 'home' }" />

        <!-- Ícone alterado para "business" e descrição adicionada -->
        <q-route-tab
          name="business"
          icon="business"
          :to="{ name: 'business' }"
          title="Negócios"
        />

        <q-tab rounded name="add" @click="handleAddClick">
          <q-btn round icon="add" class="bg-primary text-white"></q-btn>
        </q-tab>

        <q-route-tab name="messages" icon="chat" :to="{ name: 'messages' }" />
        <q-route-tab name="bookmarks" icon="bookmark" :to="{ name: 'map' }" />
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
