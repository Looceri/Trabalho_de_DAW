<template>
  <q-page padding style="min-height: fit-content;">
    <div class="q-pa-md">
      <!-- Uploaded File Display -->


      <!-- Success Message -->
      <div class="q-mb-md" style="border: 0;">
        <q-card-section class="text-center">
          <div class="icon-container q-mb-md">
            <q-img
              src="../assets/ilustrations/file_update_sucess.svg"
              class="sucess-image"
            />
          </div>
          <div class="text-secondary text-h6">Sucesso</div>
          <p>Parabéns, {{ userName }}, sua candidatura foi enviada!</p>
        </q-card-section>
      </div>

      <!-- Action Buttons -->
      <q-btn
  label="Encontre outro trabalho similar"
  color="blue"
  class="q-mb-md action-btn"
  @click="goHome"
/>


    </div>
  </q-page>
</template>

<script>
export default {
  props: {
    fileName: {
      type: String,
      required: true,
    },
    fileType: {
      type: String,
      required: true,
    },
    fileSize: {
      type: Number,
      required: true,
    },
  },
  data() {
    return {
      userName: localStorage.getItem('nome') || 'Usuário', // Obtém o nome do usuário do localStorage
      fileIcon: this.getFileIcon(this.fileType), // Exemplo de ícone dinâmico
      uploadDate: new Date().toLocaleString(), // Data de envio, definida como a data atual
    };
  },
  computed: {
    // Formata o tamanho do arquivo para exibição
    formattedFileSize() {
      return this.formatFileSize(this.fileSize);
    },
  },
  methods: {
    // Função que retorna o ícone dependendo do tipo de arquivo
    getFileIcon(fileType) {
      switch (fileType) {
        case 'pdf':
          return 'picture_as_pdf';
        case 'docx':
          return 'description'; // Exemplo para Word
        case 'png':
        case 'jpg':
        case 'jpeg':
          return 'image'; // Para imagens
        default:
          return 'attach_file'; // Tipo de arquivo genérico
      }
      // Redireciona para a página inicial
  }, goHome() {
    this.$router.push({ name: 'description' });

    },

    // Função que converte o tamanho do arquivo (em bytes) para uma string legível
    formatFileSize(size) {
      if (size < 1024) return `${size} B`;
      const kb = size / 1024;
      if (kb < 1024) return `${kb.toFixed(2)} KB`;
      const mb = kb / 1024;
      return `${mb.toFixed(2)} MB`;
    },

    // Método para redirecionar para a página inicial
      },
};
</script>

<style scoped>
.uploaded-card {
  display: flex;
  align-items: center;
  padding: 16px;
  background-color: #f9f9f9;
}

.file-section {
  display: flex;
  align-items: center;
}

.sucess-image {
  height: 10em;
  width: 10em;
}

.file-info {
  margin-left: 16px;
}

.file-name {
  font-weight: bold;
  font-size: medium;
}

.file-details {
  font-size: small;
  color: #666;
}

.success-card {
  border-color: #c8e6c9;
}

.icon-container {
  display: flex;
  justify-content: center;
}

.action-btn {
  width: 100%;
  border-radius: 8px;
  font-weight: bold;
}

.action-btn:first-of-type {
  margin-bottom: 12px;
}
</style>
