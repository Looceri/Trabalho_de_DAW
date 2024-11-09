<template>
  <q-dialog v-model="confirmDialog">
    <q-card>
      <q-card-section class="text-center">
        <div class="text-h6">Salvar?</div>
        <div class="text-subtitle2">Você tem certeza de que deseja alterar o que você digitou?</div>
      </q-card-section>
      <q-card-actions align="around">
        <q-btn color="orange" label="SIM" @click="confirmSave" />
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
    confirmDialog: {
      get() { return this.modelValue; },
      set(val) { this.$emit('update:modelValue', val); },
    },
  },
  methods: {
    confirmSave() {
      this.$emit('save');
      this.closeDialog();
    },
    closeDialog() {
      this.confirmDialog = false;
    },
  },
};
</script>
