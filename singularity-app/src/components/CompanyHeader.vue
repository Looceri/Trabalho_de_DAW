<template>
  <div class="company-header">
    <q-img :src="logo" class="company-logo" contain />
    <div class="header-info">
      <!-- Exibindo o nome da empresa -->
      <h2 class="company-name">{{ companyName }}</h2>

      <!-- Exibindo a localização da empresa -->
      <div class="text-body2 location-address">
        {{ location.location?.address }}, {{ location.location?.district?.name }}, {{ location.location?.district?.province?.name }}, Moçambique
      </div>

      <!-- Exibindo o total de vagas disponíveis -->
      <div class="vacancies-info" v-if="vacanciesCount !== null">
        <q-item-label class="vacancies-title">Vagas Disponíveis</q-item-label>
        <q-item-label class="vacancies-count">{{ vacanciesCount }} </q-item-label>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    companyId: {
      type: Number,
      required: true,
    },
    logo: String,
    postedTime: String,
  },
  data() {
    return {
      vacanciesCount: null,
      location: {}, // Mudando para objeto vazio em vez de string
      companyName: "", // Armazenando o nome da empresa
    };
  },
  methods: {
    async fetchCompanyDetails() {
      try {
        // Faz a chamada para obter os detalhes da empresa com base no ID
        const response = await axios.get(`http://localhost:8000/api/user/${this.$route.params.companyId}`);
        const companyData = response.data;

        console.log("Dados da empresa:", companyData);

        // Atualiza o nome da empresa
        this.companyName = companyData.name;

        // Faz a chamada para obter a contagem de vagas da empresa
        const vacanciesResponse = await axios.get(`http://localhost:8000/api/count/${companyData.id}`);
        console.log("Resposta da contagem de vagas:", vacanciesResponse.data.count);

        // Atualiza o número de vagas disponíveis com a contagem específica da resposta


        if( vacanciesResponse.data.count>1){
          this.vacanciesCount =vacanciesResponse.data.vacancies_count+" vagas";
        }else{
          this.vacanciesCount = vacanciesResponse.data.vacancies_count+" vaga";
        }

       ;

        // Faz a chamada para obter a localização da empresa
        const locationResponse = await axios.get(`http://localhost:8000/api/user/${companyData.id}/locations`);
        this.location = locationResponse.data; // Armazena a localização no objeto location

        console.log(this.location);
      } catch (error) {
        console.error("Erro ao carregar os detalhes da empresa:", error);
        // Implementar tratamento de erro adequado
      }
    },
  },
  created() {
    console.log(this.companyId);
    this.fetchCompanyDetails(); // Carrega os detalhes da empresa ao montar o componente
  },
};
</script>

<style scoped>
.company-header {
  display: flex;
  align-items: center;
  padding: 16px;
  border-bottom: 1px solid #eee;
  background-color: #ffffff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
}

.company-logo {
  width: 70px;
  height: 70px;
  margin-right: 16px;
  border-radius: 50%;
  background-color: #f0f0f0;
}

.header-info {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.company-name {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin: 0;
}

.location-address {
  font-size: 16px;
  color: #666;
  margin: 4px 0 12px;
}

.vacancies-info {
  background-color: #f7f7f7;
  padding: 10px 16px;
  margin-top: 12px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}

.vacancies-title {
  font-size: 16px;
  font-weight: 600;
  color: #007bff;
}

.vacancies-count {
  font-size: 18px;
  font-weight: bold;
  color: #4caf50;
  margin-top: 4px;
}
</style>
