<template>
  <q-page class="company-detail-page">
    <!-- Cabeçalho da empresa com logo, posição e informações básicas -->
    <CompanyHeader
      :logo="company.logo"
      :position="company.position"
      :location="company.location"
      :postedTime="company.postedTime"
    />

    <!-- Abas de navegação para "Sobre nós", "Post" e "Trabalhos" -->
    <CompanyTabs v-model="activeTab" class="company-tabs">
      <template #sobre>
        <!-- Informações detalhadas da empresa (Sobre nós) -->
        <CompanyInfo
          :description="company.description"
          :website="company.website"
          :industry="company.industry"
          :size="company.size"
          :headquarters="company.headquarters"
          :type="company.type"
        />
      </template>
      <template #post>
        <!-- Exibição de posts da empresa -->
        <PostCard
          v-for="post in company.posts"
          :key="post.id"
          :title="post.title"
          :description="post.description"
          :image="post.image"
        />
      </template>
      <template #trabalhos>
        <!-- Lista de vagas de trabalho -->
        <JobCard
          v-for="job in company.jobs"
          :key="job.id"
          :title="job.title"
          :location="job.location"
          :type="job.type"
          :tags="job.tags"
          :salary="job.salary"
        />
      </template>
    </CompanyTabs>
  </q-page>
</template>

<script>
import CompanyHeader from 'src/components/CompanyHeader.vue';
import CompanyTabs from 'src/components/CompanyTabs.vue';
import CompanyInfo from 'src/components/CompanyInfo.vue';
import PostCard from 'src/components/PostCard.vue';
import JobCard from 'src/components/JobCard.vue';

export default {
  components: {
    CompanyHeader,
    CompanyTabs,
    CompanyInfo,
    PostCard,
    JobCard
  },
  data() {
    return {
      activeTab: 'sobre', // Aba ativa inicial
      company: {
        logo: 'path/to/logo.png',
        position: 'UI/UX Designer',
        location: 'Maputo, Moçambique',
        postedTime: '1 dia atrás',
        description: 'Descrição da empresa aqui...',
        website: 'https://www.example.com',
        industry: 'Telecomunicações',
        size: '1000+ funcionários',
        headquarters: 'Maputo',
        type: 'Privada',
        posts: [
          { id: 1, title: 'Post 1', description: 'Descrição do post...', image: 'path/to/image1.png' },
          { id: 2, title: 'Post 2', description: 'Descrição do post...', image: 'path/to/image2.png' }
        ],
        jobs: [
          { id: 1, title: 'UI/UX Designer', location: 'Maputo', type: 'Tempo integral', tags: ['Design', 'Tempo integral'], salary: 'MZN 15K/Men' },
          { id: 2, title: 'IT Programmer', location: 'Maputo', type: 'Tempo integral', tags: ['Programador', 'Tempo integral'], salary: 'MZN 20K/Men' }
        ]
      }
    };
  }
};
</script>

<style scoped>
.company-detail-page {
  padding: 16px;
  background-color: #f5f5f5;
  min-height: 100vh;
}

/* Estilizando o cabeçalho da empresa */
.company-header {
  background-color: #ffffff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
  padding: 16px;
  margin-bottom: 24px;
  display: flex;
  align-items: center;
  gap: 16px;
}

.company-header .company-logo {
  border-radius: 50%;
  width: 80px;
  height: 80px;
  background-color: #e0e0e0;
}

.company-header .company-info {
  flex: 1;
}

.company-header .company-info .position {
  font-weight: 600;
  font-size: 1.2rem;
  color: #333;
}

.company-header .company-info .location,
.company-header .company-info .posted-time {
  color: #777;
  font-size: 0.9rem;
}

/* Estilizando as abas */
.company-tabs {
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  margin-top: 16px;
  padding: 16px;
}

.company-tabs .q-tabs {
  border-bottom: 1px solid #e0e0e0;
  background-color: #f9f9f9;
}

.company-tabs .q-tab {
  font-size: 1rem;
  color: #333;
  font-weight: 600;
}

.company-tabs .q-tab.q-tab--active {
  color: #007bff;
  border-bottom: 2px solid #007bff;
}

.q-card {
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 24px;
  background-color: #ffffff;
  padding: 16px;
}

/* Estilizando os cartões de postagens e vagas */
.q-card .q-card-section {
  padding: 0;
}

.q-item-label {
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.q-item-label.caption {
  color: #777;
  font-size: 0.9rem;
}

.q-item {
  margin-bottom: 16px;
  border-bottom: 1px solid #e0e0e0;
  padding-bottom: 8px;
}

.q-btn {
  width: 100%;
  margin-top: 12px;
}

/* Estilizando os títulos e descrições das postagens */
.post-card .q-card-section {
  padding: 12px;
}

.post-card img {
  max-width: 100%;
  border-radius: 12px;
}

.job-card .q-card-section {
  padding: 12px;
}

.job-card .q-item-label {
  font-size: 1rem;
  color: #333;
}

.job-card .q-item-label.caption {
  font-size: 0.9rem;
  color: #777;
}

.job-card .salary {
  font-size: 1rem;
  font-weight: bold;
  color: #4CAF50;
}
</style>
