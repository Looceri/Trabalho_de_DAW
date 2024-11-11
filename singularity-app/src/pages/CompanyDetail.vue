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
        <CompanyInfo :description="company.description" />
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
        <!-- Passando apenas o ID da empresa para o componente de Trabalhos -->
        <JobCard :companyId="company.id" />
      </template>
    </CompanyTabs>
  </q-page>
</template>

<script>
import axios from 'axios';
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
      company: {}, // Dados da empresa
      activeTab: 'sobre', // Aba ativa
    };
  },
  methods: {
    async fetchCompanyDetails() {
      try {
        // Pega o ID da empresa a partir da URL
        const companyId = this.$route.params.companyId;

        // Faz a requisição para obter os detalhes da empresa
        const companyResponse = await axios.get(`http://localhost:8000/api/user/${companyId}`);
        const companyData = companyResponse.data;

        // Armazena os dados da empresa no estado
        this.company = companyData;

      } catch (error) {
        console.error("Erro ao carregar os dados da empresa:", error);
      }
    }
  },
  created() {
    this.fetchCompanyDetails(); // Carrega os dados da empresa ao criar o componente
  }
};
</script>
