// useFileStore.js
import { defineStore } from "pinia";
import axios from "axios";

export const useFileStore = defineStore("file", {
  state: () => ({
    cvFile: null,
    uploadStatus: null,
    applicationStatus: null,
  }),

  actions: {
    // Recebe e armazena o arquivo carregado
    fileAdded(file) {
      // O arquivo é passado como um array, então acessamos o primeiro item
      if (file && file.length > 0) {
        this.cvFile = file[0];  // Atribui o arquivo à variável cvFile
        console.log("Arquivo adicionado:", this.cvFile);
      } else {
        console.error("Nenhum arquivo selecionado.");
      }
    },

    // Função para enviar o arquivo para o servidor
    async uploadFile(vagaId, file) {
      if (file && file.length > 0) {
        this.cvFile = file[0];
        this.uploadStatus = "No file to upload.";
        console.log(this.uploadStatus+vagaId);
        return { status: this.uploadStatus };
      }

      const userId = localStorage.getItem("id");
      if (!userId) {
        this.uploadStatus = "User ID not found.";
        console.log(this.uploadStatus);
        return { status: this.uploadStatus };
      }

      const formData = new FormData();
      formData.append("file", this.cvFile);
      formData.append("user_id", userId);
      formData.append("vacancy_id", vagaId);

      console.log("FormData a ser enviado:", formData);  // Verifique o FormData antes de enviar

      try {
        const response = await axios.post("http://localhost:8000/api/upload", formData, {
          headers: { "Content-Type": "multipart/form-data" },
        });

        this.uploadStatus = "File uploaded successfully";
        console.log("Upload concluído:", response.data);
        return { status: this.uploadStatus, fileData: response.data };
      } catch (error) {
        this.uploadStatus = "Failed to upload file";
        console.error("Erro ao fazer upload do arquivo:", error.response ? error.response.data : error.message);
        return { status: this.uploadStatus, error: error.response?.data || error.message };
      }
    }
    ,

    // Função para submeter a candidatura após o upload
    async submitApplication(vagaId, information) {
      if (!this.cvFile) {
        this.applicationStatus = "No file selected for application.";
        console.log(this.applicationStatus);
        return { status: this.applicationStatus };
      }

      try {
        const formData = new FormData();
        formData.append("file", this.cvFile);
        formData.append("information", information);
        formData.append("vagaId", vagaId);

        const response = await axios.post("http://localhost:8000/api/candidate", formData, {
          headers: { "Content-Type": "multipart/form-data" },
        });

        if (response.status === 201) {
          this.applicationStatus = "Application submitted successfully!";
          console.log("Candidatura enviada com sucesso:", response.data);
          return { status: this.applicationStatus };
        } else {
          this.applicationStatus = "Unexpected response status for application.";
          console.log(this.applicationStatus);
          return { status: this.applicationStatus };
        }
      } catch (error) {
        this.applicationStatus = "Failed to submit application.";
        console.error("Erro ao submeter a candidatura:", error.response ? error.response.data : error.message);
        return { status: this.applicationStatus, error: error.response?.data || error.message };
      }
    },
  },
});
