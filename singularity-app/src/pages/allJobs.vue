<template>
  <q-page padding class="home-page">
    <!-- Grade de cartões de empresas -->
    <div class="company-grid">
      <CompanyCard
        v-for="(company, index) in companies"
        :key="index"
        :logo="company.logo"
        :name="company.name"
        :jobsCount="company.jobsCount"
      />
    </div>

    <!-- Botões fixos para "Posts" e "Empregadores" -->
    <div class="fixed-action-buttons">
      <q-btn
        label="Posts"
        :color="activeButton === 'posts' ? 'primary' : ''"
        class="btn-action"
        @click="setActiveButton('posts')"
      />
      <q-btn
        label="Empregadores"
        :color="activeButton === 'employers' ? 'orange' : ''"
        class="btn-action"
        @click="setActiveButton('employers')"
      />
    </div>

    <!-- Barra de navegação inferior -->
    <q-footer class="footer">
      <q-tabs align="justify" class="footer-tabs">
        <q-tab icon="home" />
        <q-tab icon="notifications" />
        <q-tab icon="add_circle" color="orange" />
        <q-tab icon="chat" />
        <q-tab icon="person" />
      </q-tabs>
    </q-footer>
  </q-page>
</template>

<script>
import { default as CompanyCard } from '../components/CompanyCard.vue';
import axios from 'axios';

export default {
  components: {
    CompanyCard,
  },
  data() {
    return {
      companies: [], // Armazenará as empresas e o número de vagas
      activeButton: 'employers' // O botão "Empregadores" será o ativo por padrão
    };
  },
  methods: {
    async loadOwner() {
      try {
        // Faz a chamada para obter todos os donos (empresas)
        const response = await axios.get('http://localhost:8000/api/getAllOwner');
        const companies = response.data;

        // Faz a chamada para cada empresa para obter o total de vagas expiradas
        const companiesWithJobs = await Promise.all(
          companies.map(async (company) => {
            // Chama o endpoint para obter o total de vagas expiradas da empresa
            const vacanciesResponse = await axios.get(`http://localhost:8000/api/CountVacancies/${company.id}`);
            return {
              ...company,
              jobsCount: vacanciesResponse.data.count, // Total de vagas expiradas
            };
          })
        );

        this.companies = companiesWithJobs; // Atualiza a lista de empresas com jobsCount
      } catch (error) {
        console.error("Erro ao carregar dados:", error);
      }
    },

    // Método para definir o botão ativo
    setActiveButton(button) {
      this.activeButton = button;
    }
  },
  created() {
    this.loadOwner(); // Carrega as empresas quando o componente for criado
  },
};
</script>

<style scoped>
.home-page {
  background-color: #f5f5f5;
}

.company-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  padding: 16px;
}

.fixed-action-buttons {
  position: fixed;
  bottom: 90px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 16px;
  width: 90%;
  justify-content: space-around;
  z-index: 1000;

}

.btn-action {
  flex: 1;
  font-weight: bold;
  border-radius: 12px;
  color: black;
}

.footer {
  border-top: 1px solid #e0e0e0;
}

.footer-tabs {
  background-color: white;
  color: #9e9e9e;
}
</style>
