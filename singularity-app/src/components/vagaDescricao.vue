<template>
  <q-page style="margin: 0; min-height: auto;">
    <div class="job-details">
      <!-- Job Description -->
      <div class="description q-mb-lg">
        <h6 style="margin-top: -10px;" class="text-bold q-mb-sm">Descrição da Vaga:</h6>
        <p>{{ vaga.description }}</p>
        <q-btn @click="toggleMoreInfo" class="q-my-md" color="primary">
          {{ showMoreInfo ? 'Esconder Informações' : 'Mostrar Mais Informações' }}
        </q-btn>

        <!-- Exibindo o componente MoreInfo condicionalmente -->
        <MoreInfo v-if="showMoreInfo" :vacancyId="vaga.id" :id_owner="vaga.owner_id" />

      </div>

      <!-- Requirements -->
      <div class="requirements q-mb-lg">
        <h6 class="text-bold q-mb-sm">Requisitos</h6>
        <ul>
          <li v-for="(requirement, index) in vaga.requirements" :key="index">
            {{ requirement.requirement }}
          </li>
        </ul>
      </div>


      <!-- Apply Button -->
      <!-- <q-btn flat label="Aplicar" class="q-mt-lg full-width submit-btn" color="primary" @click="applyForJob" /> -->
    </div>
  </q-page>
</template>

<script>
import axios from 'axios';
import MoreInfo from './MoreInfo.vue'; // Certifique-se de que o caminho está correto

export default {
  components: {
    MoreInfo,
  },
  data() {
    return {
      vaga: {}, // Dados da vaga
      showMoreInfo: false, // Estado para alternar a exibição do componente MoreInfo
    };
  },
  mounted() {
    this.loadJobDetails(); // Carregar os detalhes da vaga ao montar o componente
  },
  methods: {
    async loadJobDetails() {
      try {
        const jobId = this.$route.params.id; // Obtém o ID da vaga da URL
        const response = await axios.get(`http://localhost:8000/api/vagas/${jobId}`);

        this.vaga = response.data;
        console.log(this.vaga.owner_id); // Armazena os dados da vaga
      } catch (error) {
        console.error('Erro ao carregar os detalhes da vaga:', error);
      }
    },
    toggleMoreInfo() {
      this.showMoreInfo = !this.showMoreInfo; // Alternar o estado de exibição
    },
    applyForJob() {
      // Lógica para aplicar para a vaga
      alert('Você se inscreveu na vaga!');
    },
  },
};
</script>

<style scoped>
.job-details {
  padding: 16px;
  /* Espaçamento interno */
  background-color: #ffffff;
  /* Cor de fundo do componente */
  border-radius: 8px;
  /* Bordas arredondadas */
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  /* Sombra suave */
}

.submit-btn {
  width: 100%;
}
</style>
