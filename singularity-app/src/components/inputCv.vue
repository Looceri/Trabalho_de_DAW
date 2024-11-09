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
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import SuccessComponent from './SuccessComponent.vue';

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
    cvFile.value = files[0];  // Armazena o arquivo no estado
    console.log("Arquivo adicionado:", cvFile.value);
  } else {
    console.error("Nenhum arquivo selecionado.");
  }
};

// Função para fazer o upload do arquivo
const uploadFile = async (vagaId) => {
  if (!cvFile.value) {
    uploadStatus.value = "No file to upload.";
    console.log(uploadStatus.value);
    return { status: uploadStatus.value };
  }

  const userId = localStorage.getItem("id");
  if (!userId) {
    uploadStatus.value = "User ID not found.";
    console.log(uploadStatus.value);
    return { status: uploadStatus.value };
  }

  const formData = new FormData();
  formData.append("file", cvFile.value);  // Adiciona o arquivo ao FormData
  formData.append("user_id", userId);
  formData.append("vacancy_id", vagaId);

  console.log("FormData a ser enviado:", formData);  // Verifique o FormData antes de enviar

  try {
    const response = await axios.post("http://localhost:8000/api/upload", formData, {
      headers: { "Content-Type": "multipart/form-data" },
    });

    uploadStatus.value = "File uploaded successfully";
    console.log("Upload concluído:", response.data);

    // Agora, vamos pegar o ID do arquivo que foi retornado pela API
    const fileId = response.data.file.id;  // Supondo que a API retorne esse id

    return { status: uploadStatus.value, fileId }; // Retorna o fileId para usar na candidatura
  } catch (error) {
    uploadStatus.value = "Failed to upload file";
    console.error("Erro ao fazer upload do arquivo:", error.response ? error.response.data : error.message);
    return { status: uploadStatus.value, error: error.response?.data || error.message };
  }
};

// Função para submeter a candidatura após o upload
const submitApplication = async () => {
  if (!cvFile.value) {
    applicationStatus.value = "No file selected for application.";
    console.log(applicationStatus.value);
    return { status: applicationStatus.value };
  }

  if (!information.value || information.value.trim() === "") {
    applicationStatus.value = "Please provide a reason for applying.";
    console.log(applicationStatus.value);
    return { status: applicationStatus.value };
  }

  try {
    const uploadResponse = await uploadFile(props.vagaId);

    if (uploadResponse.status === "File uploaded successfully") {
      const userId = localStorage.getItem("id");

      // Corrigindo a interpolação da URL do GET
      const idFileResponse = await axios.get(`http://localhost:8000/api/last-cv/${userId}/${props.vagaId}`);

      console.log("Id do arquivo: ", idFileResponse.data.file_id);
      const fileId = idFileResponse.data.file_id;  // Usa o ID do arquivo no campo esperado

      const applicationData = {
        file_id: fileId,  // Usa o ID do arquivo no campo esperado
        information: information.value,
        vacancy_id: props.vagaId,
        user_id: userId,
      };

      console.log("Dados da candidatura:", applicationData);  // Verifique os dados antes de enviar a candidatura

      const response = await axios.post("http://localhost:8000/api/candidate", applicationData);

      if (response.status === 201) {
        applicationStatus.value = "Application submitted successfully!";
        console.log("Candidatura enviada com sucesso:", response.data);
        applicationSubmitted.value = true;
      } else {
        applicationStatus.value = "Unexpected response status for application.";
        console.log(applicationStatus.value);
      }
    } else {
      console.log("Erro no upload do arquivo.", uploadResponse.status);
    }
  } catch (error) {
    applicationStatus.value = "Failed to submit application.";
    console.error("Erro ao submeter a candidatura:", error.response ? error.response.data : error.message);
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
