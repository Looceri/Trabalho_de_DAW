import { defineStore } from "pinia";
import axios from "axios";

export const useFileStore = defineStore("file", {
  state: () => ({
    cvFile: null, // Armazenar os dados do arquivo
    uploadStatus: null, // Armazenar o status do upload (opcional)
  }),

  actions: {
    // Chamado quando um arquivo é adicionado ao uploader
    fileAdded(files) {
      if (files.length > 0) {
        this.cvFile = files[0]; // Armazena o primeiro arquivo
        console.log("File added:", this.cvFile);
      } else {
        this.cvFile = null;
      }
    },

    // Envia o arquivo para o servidor com o ID da vaga e as informações adicionais
    async uploadFile(vagaId, information) {
      if (!this.cvFile) {
        console.log("No file to upload.");
        return;
      }

      // Recupera o ID do usuário (por exemplo, do localStorage)
      const userId = localStorage.getItem("id");

      const formData = new FormData();
      formData.append("file", this.cvFile); // Adiciona o arquivo
      formData.append("user_id", userId); // Adiciona o ID do usuário
      formData.append("vaga_id", vagaId); // Adiciona o ID da vaga
      formData.append("information", information); // Adiciona as informações do candidato

      try {
        // Envia o arquivo usando uma requisição POST com o FormData
        const response = await axios.post(
          "http://localhost:8000/api/upload",
          formData,
          {
            headers: {
              "Content-Type": "multipart/form-data", // Define o tipo de conteúdo
            },
          }
        );

        // Se o upload for bem-sucedido, atualiza o estado
        console.log("File uploaded successfully:", response.data);
        this.cvFile = response.data.file; // Atualiza o estado com os detalhes do arquivo enviado
        this.uploadStatus = "File uploaded successfully"; // Status do upload
      } catch (error) {
        console.error("Error uploading file:", error);
        this.uploadStatus = "Failed to upload file"; // Status em caso de falha
      }
    },

    // Recupera um arquivo do servidor (se necessário)
    async fetchFile(fileId) {
      try {
        const response = await axios.get(
          `http://localhost:8000/api/files/${fileId}`,
          {
            responseType: "blob", // Espera o arquivo como blob
          }
        );

        // Cria uma URL do arquivo para exibir ou baixar
        const fileUrl = URL.createObjectURL(response.data);
        this.cvFile = fileUrl; // Salva a URL do arquivo no estado
        console.log("File fetched successfully:", fileUrl);
      } catch (error) {z
        console.error("Error fetching file:", error);
      }
    },

    // Método opcional para limpar o arquivo do estado
    clearFile() {
      this.cvFile = null;
      this.uploadStatus = null;
    },
  },
});
