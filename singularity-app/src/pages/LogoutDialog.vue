<template>
  <q-dialog v-model="logoutDialog">
    <q-card>
      <q-card-section class="text-center">
        <div class="text-h6">Log out?</div>
        <div class="text-subtitle2">Você quer mesmo sair?</div>
      </q-card-section>
      <q-card-actions align="around">
        <q-btn color="orange" label="SIM" @click="confirmLogout" />
        <q-btn color="blue" label="NÃO" flat @click="closeDialog" />
      </q-card-actions>
    </q-card>
  </q-dialog>
</template>

<script>
export default {
  props: {
    modelValue: Boolean,
  },
  computed: {
    logoutDialog: {
      get() { return this.modelValue; },
      set(val) { this.$emit('update:modelValue', val); },
    },
  },
  methods: {
    confirmLogout() {
      this.$emit('logout');
      this.closeDialog();
    },
    closeDialog() {
      this.logoutDialog = false;
    },
  },
};
</script>

