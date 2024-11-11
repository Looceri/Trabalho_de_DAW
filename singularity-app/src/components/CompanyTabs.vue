<template>
  <q-tabs v-model="tab" class="bg-white text-primary tabs" dense>
    <q-tab name="sobre" label="Sobre nós"/>
    <q-tab name="post" label="Post"/>
    <q-tab name="trabalhos" label="Trabalhos"/>
  </q-tabs>
  <q-tab-panels v-model="tab" animated>
    <q-tab-panel name="sobre"><slot name="sobre"></slot></q-tab-panel>
    <q-tab-panel name="post"><slot name="post"></slot></q-tab-panel>
    <q-tab-panel name="trabalhos"><slot name="trabalhos"></slot></q-tab-panel>
  </q-tab-panels>
</template>

<script>
export default {
  data() {
    return {
      tab: "sobre"
    };
  }
}
</script>

<style scoped>
.tabs {
  padding: 0 16px;
  border-bottom: 1px solid #eee;
}
</style>
