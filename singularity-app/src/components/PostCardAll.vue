<template>
  <q-card class="post-card" v-for="post in posts" :key="post.id">
    <!-- Título e descrição do post -->
    <q-card-section>
      <div class="post-title">{{ post.title }}</div>
      <p class="post-description">{{ post.description }}</p>
    </q-card-section>

    <!-- Exibe a imagem se disponível -->
    <q-card-section v-if="post.url_image">
      <q-img :src="post.url_image" class="post-image" contain />
    </q-card-section>
  </q-card>
</template>

<script>
import axios from 'axios';

export default {
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
        const response = await axios.get(`http://localhost:8000/api/posts`);
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
.post-card {
  margin: 16px;
  border-radius: 12px;
  overflow: hidden;
}

.post-title {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 8px;
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
}
</style>
