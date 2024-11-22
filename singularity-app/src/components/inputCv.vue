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
          class="q-mt-md full-width upload-btn"
          label="Carregar CV/Currículo"
          icon="cloud_upload"
          accept=".pdf,.doc,.docx"
          square
          color="primary"
          url="http://localhost:8000/api/upload"
          flat
          v-model="cvFile"
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
        color="primary"
        size="lg"
        @click="submitApplication"
      />
    </div>

    <div v-else>
      <!-- Tela de sucesso -->
      <SuccessComponent />
    </div>
  </q-page>
  <br>
  <br>
  <br>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import SuccessComponent from './SuccessComponent.vue';
import { useQuasar } from 'quasar';

const user = JSON.parse(localStorage.getItem('user'));
const $q = useQuasar();  // Inicializa o Quasar

// Estado para o arquivo, informações e status da aplicação
const cvFile = ref(null);
const information = ref("");
const applicationSubmitted = ref(false);
const uploadStatus = ref(null);
const applicationStatus = ref(null);

// Recebe a prop vagaId do componente pai
const props = defineProps({
  vagaId: {
    type: Number,
    required: true
  }
});

// Função para armazenar o arquivo quando ele for adicionado
const handleFileAdded = (files) => {
  if (files && files.length > 0) {
    cvFile.value = files[0];
    console.log("Arquivo adicionado:", cvFile.value);
  } else {
    console.error("Nenhum arquivo selecionado.");
    $q.notify({
      type: 'negative',
      message: 'Nenhum arquivo selecionado. Por favor, selecione um arquivo para enviar.',
    });
  }
};

// Função para fazer o upload do arquivo
const uploadFile = async (vagaId) => {
  if (!cvFile.value) {
    uploadStatus.value = "No file to upload.";
    $q.notify({
      type: 'negative',
      message: uploadStatus.value,
    });
    return { status: uploadStatus.value };
  }
  
  const userId = user.id;
  if (!userId) {
    uploadStatus.value = "User ID not found.";
    $q.notify({
      type: 'negative',
      message: uploadStatus.value,
    });
    return { status: uploadStatus.value };
  }

  const formData = new FormData();
  formData.append("file", cvFile.value);
  formData.append("user_id", userId);
  formData.append("vacancy_id", vagaId);

  try {
    const response = await axios.post("http://localhost:8000/api/upload", formData, {
      headers: { "Content-Type": "multipart/form-data" },
    }).catch(error => {
      if (error.response.status === 400) {
        return error.response;
      }
      throw error;
    });

    if (response.data.success === false) {
      uploadStatus.value = response.data.message;
      console.error("Erro ao fazer upload do arquivo:", response.data.message);
      $q.notify({
        type: 'negative',
        message: response.data.message,
      });
      return { status: uploadStatus.value, error: response.data.message };
    }

    uploadStatus.value = "File uploaded successfully";
    console.log("Upload concluído:", response.data);

    const fileId = response.data.file.id;
    return { status: uploadStatus.value, fileId };
  } catch (error) {
    uploadStatus.value = "Failed to upload file";
    const errorMessage = error.response ? error.response.data : error.message;
    console.error("Erro ao fazer upload do arquivo:", errorMessage);
    $q.notify({
      type: 'negative',
      message: `Erro ao fazer upload do arquivo: ${errorMessage}`,
    });
    return { status: uploadStatus.value, error: errorMessage };
  }
};

// Função para submeter a candidatura após o upload
const submitApplication = async () => {
  if (!cvFile.value) {
    applicationStatus.value = "No file selected for application.";
    $q.notify({
      type: 'negative',
      message: applicationStatus.value,
    });
    return;
  }

  if (!information.value || information.value.trim() === "") {
    applicationStatus.value = "Please provide a reason for applying.";
    $q.notify({
      type: 'negative',
      message: applicationStatus.value,
    });
    return;
  }

    const uploadResponse = await uploadFile(props.vagaId);

    if (uploadResponse.status === "File uploaded successfully") {
      const userId = user.data.id;
      const fileId = uploadResponse.fileId;

      const applicationData = {
        file_id: fileId,
        reason: information.value,
        vacancy_id: props.vagaId,
        user_id: userId,
        application_date: new Date().toISOString().split('T')[0],
      };

      const response = await axios.post("http://localhost:8000/api/candidate", applicationData);

      if (response.data.message === "Você já se candidatou para essa vaga.") {
        applicationStatus.value = "Você já enviou um CV para esta vaga.";
        $q.notify({
          type: 'negative',
          message: applicationStatus.value,
        });
      } else if (response.status === 201) {
        applicationStatus.value = "Application submitted successfully!";
        applicationSubmitted.value = true;
        $q.notify({
          type: 'positive',
          message: 'Candidatura enviada com sucesso!',
        });
      } else {
        applicationStatus.value = "Unexpected response status for application.";
        $q.notify({
          type: 'negative',
          message: applicationStatus.value,
        });
      }
    } else {
      $q.notify({
        type: 'negative',
        message: `Erro no upload do arquivo: ${uploadResponse.status}`,
      });
    }
    try {
    } catch (error) {
    applicationStatus.value = "Failed to submit application.";
    const errorMessage = error.response ? error.response.data : error.message;
    $q.notify({
      type: 'negative',
      message: `Erro ao submeter a candidatura: ${errorMessage}`,
    });
  }
};
</script>

<style scoped>
.upload-btn {
  margin-top: 16px;
}

.submit-btn {
  margin-top: 24px;
}
</style>
