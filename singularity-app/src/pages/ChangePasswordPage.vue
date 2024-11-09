<template>
  <q-page padding>
    <q-btn flat icon="arrow_back" @click="goBack" />
    <div class="text-h6 q-mb-md">Mudar a Senha</div>
    <q-input filled v-model="oldPassword" label="Senha Antiga" type="password" />
    <q-input filled v-model="newPassword" label="Nova Senha" type="password" />
    <q-input filled v-model="confirmPassword" label="Confirmar Senha" type="password" />
    <q-btn color="orange" label="UPDATE" class="full-width q-mt-md" />
  </q-page>
</template>

<script>
import { useRouter } from 'vue-router';

export default {
  data() {
    return {
      oldPassword: '',
      newPassword: '',
      confirmPassword: '',
    };
  },
  setup() {
    const router = useRouter();
    const goBack = () => router.back();
    return { goBack };
  },
};
</script>

<style scoped>
.full-width {
  width: 100%;
}
</style>
