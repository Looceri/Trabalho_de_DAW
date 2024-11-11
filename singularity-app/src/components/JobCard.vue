<template>
  <div style="margin-bottom: 20px; " v-if="jobs.length > 0">
    <!-- Exibe as vagas da empresa -->
    <q-card v-for="job in jobs" :key="job.id" class="job-card">
      <q-card-section class="job-header">
        <!-- Avatar da empresa com aumento de tamanho -->
        <q-avatar size="50px" class="company-avatar">
          <img :src="job.avatar_url || '../assets/Mask group.svg'" alt="Logo da Empresa" />
        </q-avatar>
        <div class="job-info">
          <!-- Título, Localização e Tipo da vaga -->
          <div class="job-title">{{ job.title }}</div>
          <div class="job-location">{{ job.location }}</div>
          <div class="job-location">{{ job.vacancies_count }} vagas</div>
          <div class="job-location">Até: {{ formatDate(job.submission_end_date) }}</div>
          <div class="job-type">{{ job.type }}</div>
        </div>
      </q-card-section>

      <q-card-section class="job-details">
        <!-- Tags associadas à vaga -->
        <div class="tags">
          <q-chip v-for="tag in job.categories.map(c => c.name)" :key="tag" outline color="primary" class="tag">{{ tag }}</q-chip>
        </div>
        <!-- Exibição do salário -->
        <div class="salary">Salário: MZN {{ job.salary }}</div>

        <!-- Botão para aplicar na vaga -->
        <q-btn
          flat
          label="Aplicar"
          class="apply-button"
          @click="$router.push({ name: 'JobDetails', params: { id: job.id } })"
          color="primary"
        />
      </q-card-section>
    </q-card>
  </div>

  <div v-else>
    <!-- Caso não haja vagas -->
    <p class="no-jobs">Não há vagas disponíveis no momento.</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    companyId: String, // Recebe o ID da empresa
  },
  data() {
    return {
      jobs: [], // Lista de vagas da empresa
    };
  },
  methods: {
    // Método para buscar as vagas da empresa
    async fetchJobs() {
      try {
        // Faz a requisição para obter as vagas da empresa com o companyId
        const response = await axios.get(`http://localhost:8000/api/benefits_category_all/${this.companyId}`);
        let jobsData = response.data;

        // Filtra as vagas, excluindo aquelas com submission_end_date anterior à data atual
        const today = new Date();
        jobsData = jobsData.filter(job => new Date(job.submission_end_date) < today);

        console.log(jobsData);

        // Atualiza o estado com as vagas recebidas e filtradas
        this.jobs = jobsData;
      } catch (error) {
        console.error("Erro ao carregar as vagas:", error);
      }
    },

    // Método para formatar a data para exibição
    formatDate(date) {
      const formattedDate = new Date(date);
      return formattedDate.toLocaleDateString("pt-PT", {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
      });
    }
  },
  watch: {
    // Quando o companyId mudar, busca as vagas novamente
    companyId(newCompanyId) {
      this.fetchJobs();
    }
  },
  created() {
    this.fetchJobs(); // Faz a requisição para as vagas assim que o componente for criado
  }
};
</script>

<style scoped>
.job-card {
  margin: 16px;
  padding: 16px;
  border-radius: 16px;
  background-color: #ffffff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.job-card:hover {
  transform: translateY(-5px);
}

.job-header {
  display: flex;
  align-items: center;
  gap: 16px;
}

.company-avatar {
  border-radius: 50%;
  border: 3px solid #007bff;
  padding: 4px;
}

.job-info {
  flex: 1;
}

.job-title {
  font-size: 18px;
  font-weight: bold;
  color: #333;
}

.job-location {
  font-size: 14px;
  color: #666;
}

.job-type {
  font-size: 14px;
  color: #007bff;
  font-weight: 600;
  margin-top: 8px;
}

.job-details {
  padding-top: 12px;
}

.tags {
  margin-top: 12px;
}

.tag {
  margin-right: 8px;
}

.salary {
  font-size: 16px;
  font-weight: bold;
  color: #ff5722;
  margin-top: 8px;
}

.apply-button {
  margin-top: 16px;
  width: 100%;
}

.no-jobs {
  text-align: center;
  font-size: 16px;
  color: #777;
  padding: 20px;
}
</style>
