<template>
  <div class="absolute-center">
    <div class="q-pa-md flex flex-center flex-column">
      <img
        alt="Quasar logo"
        src="~assets/icons/logo.svg"
        class="logo-spin"
        style="width: 200px; height: 200px"
      />
      <div class="text-center text-h3 text-white">Singularity</div>
    </div>
  </div>
</template>

<script setup>
</script>

<style scoped>
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.logo-spin {
  animation: spin 3s linear infinite;
}
</style>
