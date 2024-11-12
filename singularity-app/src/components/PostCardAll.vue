<template>
  <q-page class="q-pa-md post-page">
    <!-- Título da página -->
    <div class="page-header text-center">
      <h1 class="text-h5 font-bold">Publicações Recentes</h1>
      <p class="text-subtitle2">Descubra novidades e informações compartilhadas pelas empresas.</p>
    </div>

    <!-- Lista de posts -->
    <div class="post-list">
      <q-card
        class="post-card q-my-md q-pa-sm"
        v-for="post in posts"
        :key="post.id"
        flat
        bordered
        >
        <!-- Cabeçalho do post -->
        <q-card-section>
          <div class="post-header row items-center">
            <!-- Foto do proprietário -->
            <q-avatar size="50px" class="q-mr-md">
              <q-img :src="post.owner?.profile_picture || defaultAvatar" />
            </q-avatar>
            <!-- Nome do proprietário e data -->
            <div>
              <div class="post-owner text-h6 font-bold">{{ post.user?.name || 'Usuário desconhecido' }}</div>
              <div class="post-date text-caption text-grey">{{ formatDate(post.created_at) }}</div>
            </div>
          </div>
        </q-card-section>

        <!-- Conteúdo do post -->
        <q-card-section>
          <div class="post-content">
            <h2 class="post-title text-body1 font-medium">{{ post.title }}</h2>
            <p class="post-description text-body2 text-grey-7">{{ post.description }}</p>
          </div>
        </q-card-section>

        <!-- Imagem do post -->
        <q-card-section v-if="post.url_image" class="q-pt-none">
          <q-img :src="post.url_image" class="post-image rounded-borders" contain />
        </q-card-section>
      </q-card>
    </div>
  </q-page>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      posts: [], // Lista de posts com informações dos usuários
      defaultAvatar: '../assets/default-avatar.png', // Avatar padrão
    };
  },
  methods: {
    // Carrega os posts e as informações dos proprietários
    async fetchPostDetails() {
      try {
        // Carrega todos os posts
        const response = await axios.get('http://localhost:8000/api/posts');
        const posts = response.data;

        console.log
        // Mapeia IDs únicos de proprietários (sem duplicatas)
        const ownerIds = [...new Set(posts.map((post) => post.user_id))];

        // Faz chamadas para obter informações de cada proprietário
        const ownerPromises = ownerIds.map((id) =>
          axios.get(`http://localhost:8000/api/user/${id}`)
        );

        // Aguarda todas as chamadas de API
        const owners = await Promise.all(ownerPromises);

        // Cria um mapa de `owner_id` para seus dados
        const ownersMap = owners.reduce((map, ownerResponse) => {
          const owner = ownerResponse.data;
          map[owner.id] = owner;
          return map;
        }, {});

        // Combina posts com as informações de seus proprietários
        this.posts = posts.map((post) => ({
          ...post,
          owner: ownersMap[post.owner_id] || null,
        }));

        console.log(this.posts);
      } catch (error) {
        console.error('Erro ao carregar posts ou informações dos usuários:', error);
      }
    },

    // Formata a data para um formato amigável
    formatDate(dateString) {
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      const date = new Date(dateString);
      return date.toLocaleDateString('pt-BR', options);
    },
  },
  created() {
    this.fetchPostDetails(); // Carrega os posts ao criar o componente
  },
};
</script>

<style scoped>
/* Estilização da página */
.post-page {
  background-color: #f9fafc;
}

/* Estilo do cabeçalho */
.page-header {
  margin-bottom: 20px;
}

.page-header h1 {
  color: #2c3e50;
}

.page-header p {
  color: #7f8c8d;
}

/* Lista de posts */
.post-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

/* Estilo do card de post */
.post-card {
  border-radius: 16px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
}

.post-header {
  align-items: center;
  margin-bottom: 12px;
}

.post-owner {
  color: #34495e;
}

.post-date {
  font-size: 12px;
  color: #95a5a6;
}

/* Conteúdo do post */
.post-content {
  margin-bottom: 12px;
}

.post-title {
  color: #2c3e50;
}

.post-description {
  color: #7f8c8d;
  line-height: 1.5;
}

/* Imagem do post */
.post-image {
  border-radius: 12px;
  margin-top: 12px;
  max-height: 300px;
  object-fit: cover;
}

/* Avatar padrão */
.q-avatar img {
  border-radius: 50%;
}
</style>
