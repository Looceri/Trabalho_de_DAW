<template>
  <div class="more-info">
    <!-- Localização -->
    <q-card-section class="location-section">
      <div class="text-h6">Localização</div>
      <q-img src="../assets/Map.svg" class="location-image" />
      <div class="text-body2 location-address">
        {{ location.address }}, {{ location.district?.name }}, {{ location.district?.province?.name }}, Moçambique
      </div>
    </q-card-section>

    <!-- Informações da vaga -->
    <q-card-section class="info-section">
      <div class="text-h6">Informação</div>
      <q-list bordered class="info-list">
        <q-item>
          <q-item-section>Posição</q-item-section>
          <q-item-section>{{ vaga.title }}</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Data de publicação</q-item-section>
          <q-item-section>{{ vaga.submission_start_date }}</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Data de fim</q-item-section>
          <q-item-section>{{ vaga.submission_end_date }}</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Total de vagas disponíveis</q-item-section>
          <q-item-section>{{ vaga.vacancies_count }}</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Tipo de Trabalho</q-item-section>
          <q-item-section>
            <span v-for="(category, index) in vaga.categories" :key="index">
              {{ category.name.trim() }}<span v-if="index < vaga.categories.length - 1">, </span>
            </span>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Salário</q-item-section>
          <q-item-section>{{ vaga.salary }}</q-item-section>
        </q-item>
      </q-list>
    </q-card-section>

    <!-- Benefícios -->
    <q-card-section class="benefits-section">
      <div class="text-h6">Benefícios</div>
      <ul class="benefits-list">
        <li v-for="(benefit, index) in benefits" :key="index">{{ benefit.benefit }}</li>
      </ul>
    </q-card-section>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    showMoreInfo: {
      type: Boolean,
      required: true,
    },
    vacancyId: {
      type: Number,
      required: true,
    },
    id_owner: {
      type: Number,
      required: true,
    }
  },
  data() {
    return {
      benefits: [],
      vaga: {},
      location: {} // Dados da localização
    };
  },
  mounted() {
    this.loadDetails();
  },
  methods: {
    async loadDetails() {
      try {
        // Requisição para obter os benefícios
        const benefitsResponse = await axios.get(`http://localhost:8000/api/benefits/${this.vacancyId}`);

        // Requisição para obter as informações da vaga
        const vagaResponse = await axios.get(`http://localhost:8000/api/benefits_category/${this.vacancyId}`);

        // Requisição para obter a localização do usuário
        const userLocationResponse = await axios.get(`http://localhost:8000/api/user/${this.id_owner}/locations`);

        // Atualiza o estado com os dados obtidos
        this.vaga = vagaResponse.data;
        this.benefits = benefitsResponse.data;
        this.location = userLocationResponse.data.location; // A localização está dentro do 'location'

        console.log(this.location);

        console.log(this.vaga);
        console.log(this.location); // Exibe a localização no console para verificar os dados
      } catch (error) {
        console.error('Erro ao carregar dados:', error);
      }
    },
  },
};
</script>

<style scoped>
.more-info {
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: auto;
}

.location-section {
  text-align: center;
}

.location-image {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin: 10px 0;
}

.location-address {
  margin-top: 8px;
  font-size: 0.9em;
  color: #555;
}

.info-section {
  border-top: 1px solid #e0e0e0;
  padding-top: 16px;
}

.info-list {
  margin-top: 8px;
}

.benefits-section {
  border-top: 1px solid #e0e0e0;
  padding-top: 16px;
}

.benefits-list {
  list-style-type: disc;
  padding-left: 20px;
  margin-top: 8px;
}
</style>
