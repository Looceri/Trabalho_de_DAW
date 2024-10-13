<template>
  <q-page class="flex flex-center bg-primary">
    <!-- Show loading screen when isLoading is true -->
    <div v-if="isLoading" class="absolute-center">
      <div class="q-pa-md flex flex-center flex-column">
        <img
          alt="Quasar logo"
          src="~assets/icons/logo.svg"
          class="logo-spin"
          style="width: 200px; height: 200px"
        />
        <div class="text-center text-h3 text-white">
          Singularity
        </div>
      </div>
    </div>

    <!-- Your main content goes here -->
    <div v-else>
      <div class="text-center text-h3 text-white">
        Main App Content
      </div>
    </div>
  </q-page>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Create a ref to control loading state
const isLoading = ref(true);

// Simulate loading process (e.g., API call or initialization)
onMounted(() => {
  setTimeout(() => {
    // After loading finishes, set isLoading to false
    isLoading.value = false;
  }, 3000); // 3-second loading simulation
});

defineOptions({
  name: 'IndexPage',
});
</script>

<style scoped>
/* Animation for the spinning logo */
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Apply the spin animation to the image */
.logo-spin {
  animation: spin 3s linear infinite;
}
</style>
