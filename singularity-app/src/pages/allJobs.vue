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
        :companyId="company.id"
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
import CompanyCard from '../components/CompanyCard.vue';
import axios from 'axios';

export default {
  components: {
    CompanyCard,
  },
  data() {
    return {
      companies: [],
      activeButton: 'employers',
    };
  },
  methods: {
    async loadOwner() {
      try {
        const response = await axios.get('http://localhost:8000/api/getAllOwner');
        const companies = response.data;

        const companiesWithJobs = await Promise.all(
          companies.map(async (company) => {
            console.log(company.id)
            const vacanciesResponse = await axios.get(`http://localhost:8000/api/count/${company.id}`);
            console.log(vacanciesResponse)
            return {
              ...company,
              jobsCount: vacanciesResponse.data.vacancies_count,

            };
          })
        );

        this.companies = companiesWithJobs;
      } catch (error) {
        console.error("Erro ao carregar dados:", error);
      }
    },
    setActiveButton(button) {
      this.activeButton = button;
    },
  },
  created() {
    this.loadOwner();
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
