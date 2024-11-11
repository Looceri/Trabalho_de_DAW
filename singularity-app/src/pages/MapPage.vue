<template>
  <q-page>
    <MapComponent @province-selected="selectProvince" />
  </q-page>
  <q-footer class="row justify-around q-mt-md">
      <q-btn flat icon="home" @click="$router.push('/description')" />
      <q-btn flat icon="favorite_border" />
      <q-btn flat icon="add_circle" color="orange" />
      <q-btn flat icon="chat" />
      <q-btn flat icon="person" @click="$router.push('/map')" />
    </q-footer>
</template>

<script setup>
import MapComponent from '../components/MapComponent.vue'
import { ref } from 'vue'

const selectedProvince = ref(null)

function selectProvince(province) {
  selectedProvince.value = province
}
</script>
