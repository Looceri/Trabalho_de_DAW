<template>
  <q-page class="q-pa-md" style="padding: 0;">
    <div class="job-card q-px-md q-py-lg bg-white rounded-borders" style="margin: 0;">
      <!-- Header -->
      <q-btn flat round icon="arrow_back" class="text-primary" @click="goBack" />
      <div class="header q-px-md" style="justify-content: center;">
        <div class="q-ml-md" style="margin: 0;">
          <div class="title q-mt-md" style=" justify-content: center;">
            <q-img src="../assets/Logo google.svg" class="logo" contain />
            <p>
              UI/UX Designer
            </p>
          </div>
          <div class="subtitle text-grey">
            <div class="listas">
              Vodacom • Maputo • 1 dia atrás
            </div>
          </div>
        </div>
      </div>

      <!-- Condicional para exibir o conteúdo -->
      <div v-if="!isApplying">
        <!-- Tabs -->
        <div class="tabs q-my-md row no-wrap justify-around">
          <q-btn push color="orange-8" label="Descrição" @click="showDescription = true" />
          <q-btn push outline color="blue" label="Empresa" @click="showDescription = false" />
        </div>

        <!-- Description Component -->
        <vaga-descricao v-if="showDescription" />

        <!-- Company Information Component -->
        <div v-else class="company-info">
          <h6 class="text-bold">Informações da Empresa</h6>
          <p>A Vodacom é uma das principais operadoras de telecomunicações em Moçambique, oferecendo uma variedade de
            serviços...</p>
          <!-- Você pode adicionar mais detalhes sobre a empresa aqui -->
        </div>
      </div>

      <!-- Apply Form Component -->
      <div v-else>
        <apply-form />
      </div>

      <!-- Apply Button -->
      <q-btn v-if="!isApplying" push color="orange-8" label="APLICAR AGORA" class="q-mb-md full-width"
        @click="isApplying = true" />
    </div>
  </q-page>
</template>

<script>
import VagaDescricao from '../components/vagaDescricao.vue'; // Importa o componente VagaDescricao
import ApplyForm from '../components/inputCv.vue'; // Importa o componente ApplyForm

export default {
  name: 'JobDetailsPage',
  components: {
    VagaDescricao,
    ApplyForm,
  },
  data() {
    return {
      showDescription: true, // Mostra a descrição inicialmente
      isApplying: false // Controla a exibição do formulário de candidatura
    };
  },
  methods: {
    goBack() {
      this.$router.go(-1); // Volta à página anterior
    },
  },
};
</script>

<style scoped>
.job-card {
  margin: 0 auto;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
}

.header {
  display: flex;
  align-items: center;
}

.q-img__image {
  width: 10px;
  text-align: center;
  display: flex;
  justify-content: center;
}

.title.q-ml-md {
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.logo {
  width: 50px;
  display: flex;
}

.title {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
}

.subtitle {
  font-size: 14px;
  color: #666;
}

.tabs .q-btn {
  width: 45%;
}

.full-width {
  width: 100%;
}

.rounded-borders {
  border-radius: 12px;
}

.listas {
  padding-top: 15px;
  padding-bottom: 15px;
  font-weight: bold;
  color: black;
}
</style>
