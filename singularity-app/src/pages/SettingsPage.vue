<template>
  <q-page padding>
    <q-btn flat icon="arrow_back" @click="goBack" />
    <div class="text-h6 q-mb-md">Opções</div>
    <q-list>
      <q-item>
        <q-item-section>Notificações</q-item-section>
        <q-item-section side>
          <q-toggle v-model="notifications" />
        </q-item-section>
      </q-item>
      <q-item>
        <q-item-section>Dark mode</q-item-section>
        <q-item-section side>
          <q-toggle v-model="darkMode" />
        </q-item-section>
      </q-item>
      <q-item clickable @click="goToPasswordChange">
        <q-item-section>Senha</q-item-section>
        <q-item-section side>
          <q-icon name="chevron_right" />
        </q-item-section>
      </q-item>
      <q-item clickable @click="confirmLogout">
        <q-item-section>Sair</q-item-section>
        <q-item-section side>
          <q-icon name="logout" />
        </q-item-section>
      </q-item>
    </q-list>
  </q-page>
</template>

<script>
import { useRouter } from 'vue-router';

export default {
  data() {
    return {
      notifications: true,
      darkMode: false,
    };
  },
  setup() {
    const router = useRouter();
    const goBack = () => router.back();
    const goToPasswordChange = () => router.push('/change-password');
    const confirmLogout = () => router.push('/logout');

    return { goBack, goToPasswordChange, confirmLogout };
  },
};
</script>
