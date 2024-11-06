<template>
  <q-page padding class="apply-page" style="min-height: fit-content;">
    <div v-if="!applicationSubmitted">
      <!-- Job Info -->

      <!-- Upload CV -->
      <q-card flat bordered class="q-pa-md q-mt-lg upload-card">
        <q-typography tag="h6" class="text-bold">Carregar o CV</q-typography>
        <br>
        <q-typography class="q-mt-xs" color="grey">
          Adicione seu CV/Resumo para candidatar-se à vaga
        </q-typography>
        <q-uploader
          aria-label="Carregar CV ou Currículo"
          class="q-mt-md upload-btn"
          label="Carregar CV/Currículo"
          icon="cloud_upload"
          accept=".pdf,.doc,.docx"
          square
          color="orange-8"
          flat
          @added="handleFileAdded"
        />
      </q-card>

      <!-- Information Text Area -->
      <q-card flat bordered class="q-pa-md q-mt-md info-card">
        <q-typography tag="h6" class="text-bold">Informação</q-typography>
        <br>
        <q-typography class="q-mt-xs" color="grey">
          Explique por que você é a pessoa certa para esta vaga
        </q-typography>
        <q-input
          class="q-mt-md"
          filled
          type="textarea"
          placeholder="Escreva aqui sua resposta"
          v-model="information"
          color="orange-8"
        />
      </q-card>

      <!-- Apply Button -->
      <q-btn
        class="q-mt-lg full-width submit-btn"
        label="Enviar"
        color="orange-8"
        size="lg"
        @click="submitApplication"
      />
    </div>

    <div v-else>
      <!-- Tela de sucesso -->
      <SuccessComponent />
    </div>
  </q-page>
</template>

<script>
import SuccessComponent from './SuccessComponent.vue';

export default {
  components: {
    SuccessComponent
  },
  data() {
    return {
      information: "",
      cvFile: null,
      applicationSubmitted: false
    };
  },
  methods: {
    handleFileAdded(files) {
      // Verifica se o arquivo foi adicionado
      if (files.length > 0) {
        this.cvFile = files[0];
        console.log('CV adicionado:', this.cvFile);
        
      } else {
        this.cvFile = null;
      }
    },
    submitApplication() {
      if (!this.cvFile) {
        alert('Por favor, adicione seu CV antes de enviar a aplicação.');
        return;
      }
      // Simula submissão bem-sucedida
      this.applicationSubmitted = true;
    }
  }
};
</script>

<style scoped>
.apply-page {
  height: fit-content;
  max-width: 500px;
  margin: 0 auto;

}

.upload-card, .info-card {
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.upload-btn {
  background-color: #ffcc80;
  border-radius: 8px;
}

.q-uploader .q-uploader__container {
  border: 2px dashed #ff9800;
  padding: 20px;
}

.submit-btn {
  border-radius: 8px;
  font-weight: bold;
  background: linear-gradient(to right, #ff9800, #f57c00);
}

.text-bold {
  font-weight: bold;
}

.full-width {
  width: 100%;
}

.q-input {
  border-radius: 8px;
}
</style>
