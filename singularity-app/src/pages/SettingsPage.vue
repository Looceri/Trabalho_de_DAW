<template>
  <q-page class="q-pa-md">
    <div class="settings-container">
      <q-list bordered class="rounded-borders">
        <q-item-label header>Opções</q-item-label>

        <q-item tag="label" v-ripple>
          <q-item-section avatar>
            <q-icon name="notifications" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Notificações</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-toggle v-model="notificationsEnabled" color="primary" />
          </q-item-section>
        </q-item>

        <q-item tag="label" v-ripple>
          <q-item-section avatar>
            <q-icon name="dark_mode" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Dark mode</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-toggle v-model="darkModeEnabled" color="grey-8" />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple @click="goToPassword">
          <q-item-section avatar>
            <q-icon name="lock" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Password</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-icon name="chevron_right" />
          </q-item-section>
        </q-item>


        <q-item clickable v-ripple @click="logout">
          <q-item-section avatar>
            <q-icon name="logout" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Logout</q-item-label>
          </q-item-section>
          <q-item-section side>
            <q-icon name="chevron_right" />
          </q-item-section>
        </q-item>

      </q-list>

      <q-btn label="SALVAR" color="orange" unelevated class="full-width q-mt-lg" @click="saveSettings" />
    </div>
  </q-page>
</template>

<script setup>
import { ref, watch } from 'vue';
import { useRouter } from 'vue-router';
import { useQuasar } from 'quasar'; // Import useQuasar

const $q = useQuasar();
const router = useRouter();
const notificationsEnabled = ref(false); // Default to false; load from settings if available
const darkModeEnabled = ref(false);       // Default to false; load from settings if available



// Watch darkModeEnabled and update Quasar's dark mode
watch(darkModeEnabled, (newValue) => {
  $q.dark.set(newValue);
});

const goToPassword = () => {
  router.push('/password');
};

const logout = () => {
  // Add logout logic (e.g., API call, clearing local storage)
  console.log('Logging out...');
  localStorage.clear(); // Example: Clear local storage
  router.push('/login');
};

const saveSettings = () => {
  // Implement your save logic here, e.g., using LocalStorage or an API call
  console.log('Saving settings...', {
    notificationsEnabled: notificationsEnabled.value,
    darkModeEnabled: darkModeEnabled.value,
  });

  // Example using LocalStorage:
  localStorage.setItem('settings', JSON.stringify({
    notifications: notificationsEnabled.value,
    darkMode: darkModeEnabled.value,
  }));
};

// Load settings on component mount (if available)
const savedSettings = JSON.parse(localStorage.getItem('settings'));
if (savedSettings) {
  notificationsEnabled.value = savedSettings.notifications;
  darkModeEnabled.value = savedSettings.darkMode;
}
</script>
