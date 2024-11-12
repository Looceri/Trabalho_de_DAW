<template>
  <div class="posts-container">
    <!-- Exibe os posts -->
    <q-card class="post-card" v-for="post in posts" :key="post.id">
      <!-- Título e descrição do post -->
      <q-card-section>
        <div class="post-title">{{ post.title }}</div>
        <p class="post-description">{{ post.description }}</p>
      </q-card-section>

      <!-- Exibe a imagem do post -->
      <q-card-section v-if="post.url_image">
        <q-img :src="post.url_image" class="post-image" contain />
      </q-card-section>
    </q-card>

    <!-- Mensagem quando não há posts -->
    <div v-if="posts.length === 0" class="no-posts-container">
      <q-card class="no-posts-card" flat bordered>
        <q-card-section class="q-pa-md">
          <q-icon name="mdi-information" size="40px" color="grey-4" class="q-mb-sm" />
          <div class="text-center text-h6">Não há posts disponíveis</div>
          <div class="text-center text-body2">Parece que não há publicações ainda. Volte mais tarde!</div>
        </q-card-section>
      </q-card>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    companyId: Number,
  },
  data() {
    return {
      posts: [], // Array de posts
    };
  },
  methods: {
    // Recupera os posts da empresa
    async fetchPostDetails() {
      try {
        // Carrega os posts da empresa
        const response = await axios.get(`http://localhost:8000/api/posts/${this.companyId}`);
        this.posts = response.data;
        console.log("Posts carregados:", this.posts); // Confirmação dos posts recuperados
      } catch (error) {
        console.error("Erro ao carregar os detalhes dos posts:", error);
      }
    },
  },
  created() {
    this.fetchPostDetails(); // Carrega os posts da empresa na criação do componente
  },
};
</script>

<style scoped>
.posts-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.post-card {
  margin: 16px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.post-card:hover {
  transform: translateY(-5px);
}

.post-title {
  font-weight: 600;
  font-size: 18px;
  margin-bottom: 8px;
  color: #333;
}

.post-description {
  font-size: 14px;
  color: #666;
}

.post-image {
  width: 100%;
  height: auto;
  border-radius: 8px;
  margin-top: 12px;
  transition: transform 0.3s ease;
}

.post-image:hover {
  transform: scale(1.05);
}

/* Estilo da mensagem de "não há posts" */
.no-posts-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.no-posts-card {
  background-color: #f5f5f5;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  max-width: 400px;
}

.no-posts-card .q-card-section {
  text-align: center;
}

.no-posts-card .text-h6 {
  font-weight: 500;
  margin-top: 10px;
  color: #333;
}

.no-posts-card .text-body2 {
  font-size: 14px;
  color: #777;
}

.no-posts-card .q-icon {
  color: #888;
}
</style>
