<template>
  <q-page padding>
    <q-btn flat icon="arrow_back" @click="goBack" />
    <div class="text-h6 q-mb-md">Sobre Mim</div>
    <q-input
      v-model="aboutMe"
      filled
      type="textarea"
      label="Fale me sobre si"
      class="q-mb-md"
    />
    <q-btn color="orange" label="SALVAR" class="full-width q-mt-md" @click="saveChanges" />
  </q-page>
</template>

<script>
import { useRouter } from 'vue-router';

export default {
  data() {
    return {
      aboutMe: '',
    };
  },
  setup() {
    const router = useRouter();
    const goBack = () => router.back();
    return { goBack };
  },
  methods: {
    saveChanges() {
      // Lógica para salvar mudanças
      this.$emit('openConfirmDialog');
    },
  },
};
</script>

<style scoped>
.full-width {
  width: 100%;
}
</style>
