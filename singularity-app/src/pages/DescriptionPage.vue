<template>
  <q-page class="q-pa-md" style="padding: 0;">
    <div class="job-card q-px-md q-py-lg bg-white rounded-borders" style="margin: 0;">
      <q-btn flat round icon="arrow_back" class="text-primary" @click="goBack" />
      <div class="header q-px-md q-mt-md q-mb-md" style="justify-content: center;">
        <q-row align="center" justify="center">
          <q-col cols="auto" class="text-center">
            <q-img src="../assets/Mask group.svg" class="logo" contain />
          </q-col>
          <q-col cols="auto" class="text-center">
            <p class="title text-h6 q-mb-none">{{ vaga.title }}</p>
            <div class="subtitle text-grey text-body2">
  <ul class="info-list">
    <li>{{ owner.name }}</li>
    <li>{{ location.location?.district?.province?.name }}</li>
    <li>{{ timeDifference }}</li>
  </ul>
</div>
          </q-col>
        </q-row>
      </div>

      <div v-if="!isApplying">
        <div class="tabs q-my-md row no-wrap justify-around">
          <q-btn push color="orange-8" label="Descrição" @click="showDescription = true; fetchMoreInfo(vaga.id)" />
          <q-btn push outline color="blue" label="Empresa" @click="showDescription = false; fetchMoreInfo(vaga.id)" />
        </div>

        <vaga-descricao v-if="showDescription" :descricao="vaga.description" />
        <div v-else class="company-info">
          <h6 class="text-bold">Informações da Empresa</h6>
          <p style="margin-top: -30px; text-align: justify; padding: 3px;">{{ owner.description }}</p>
        </div>

        <q-btn v-if="!isApplying" push class="q-mt-lg full-width submit-btn" label="APLICAR AGORA" color="primary"
          size="lg" @click="startApplication(vaga.id)" />
      </div>

      <div v-else>
        <apply-form />
      </div>
    </div>
  </q-page>
</template>

<script>
import VagaDescricao from '../components/vagaDescricao.vue';
import ApplyForm from '../components/inputCv.vue';
import axios from 'axios';

export default {
  name: 'JobDetailsPage',
  components: {
    VagaDescricao,
    ApplyForm,
  },
  props: {
    id: {
      type: Number,
      required: true,
    },
  },
  data() {
    return {
      owner: {},
      vaga: {},
      location : [],
      showDescription: true,
      isApplying: false,
    };
  },
  created() {
    // Verifique se o ID está sendo passado corretamente
    if (this.id) {
      this.loadDetails();
      console.log("get in") // Chama o método para carregar os detalhes
    } else {
      console.error('ID não encontrado!');
    }
  },
  methods: {
    async loadDetails() {
      try {
        const VagaResponse = await axios.get(`http://localhost:8000/api/vagas/${this.id}`);
        this.vaga = VagaResponse.data;

        const OwerResponse = await axios.get(`http://localhost:8000/api/user/${this.vaga.owner_id}`);
        this.owner = OwerResponse.data;

        const locationResponse = await axios.get(`http://localhost:8000/api/user/${this.vaga.owner_id }/locations`);
        this.location = locationResponse.data;

        this.calculateDaysDifference();

      } catch (error) {
        console.error('Erro ao carregar dados:', error);
      }
    },
    calculateDaysDifference() {
  const now = new Date(); // Data atual
  const submissionDate = new Date(this.vaga.submission_start_date); // Data de início
  const differenceInMs = now - submissionDate; // Diferença em milissegundos

  // Calcula a diferença em segundos, minutos, horas e dias
  const seconds = Math.floor(differenceInMs / 1000);
  const minutes = Math.floor(differenceInMs / (1000 * 60));
  const hours = Math.floor(differenceInMs / (1000 * 60 * 60));
  const days = Math.floor(differenceInMs / (1000 * 60 * 60 * 24));
  const months = Math.floor(differenceInMs / (1000 * 60 * 60 * 24 * 30)); // Aproximado

  // Define `this.timeDifference` com o texto apropriado
  if (seconds < 60) {
    this.timeDifference = `${seconds} segundos atrás`;
  } else if (minutes < 60) {
    this.timeDifference = `${minutes} minutos atrás`;
  } else if (hours < 24) {
    this.timeDifference = `${hours} horas atrás`;
  } else if (days < 30) {
    this.timeDifference = `${days} dias atrás`;
  } else {
    this.timeDifference = `${months} meses atrás`;
  }
}  ,
    goBack() {
      this.$router.go(-1); // Função de voltar para a página anterior
    },
    startApplication(vagaId) {
      this.isApplying = true;
      console.log('ID da vaga:', vagaId);
    },
    fetchMoreInfo(vagaId) {
      console.log('ID da vaga:', vagaId);
    },
  },
};
</script>

<style scoped>
.job-card {
  margin: 0 auto;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
}

.header {
  display: flex;
  align-items: center;
}

.title {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
}

.subtitle {
  font-size: 14px;
  color: #666;
}

.tabs .q-btn {
  width: 45%;
}

.full-width {
  width: 100%;
}

.rounded-borders {
  border-radius: 12px;
}

.info-list {
  display: flex;           /* Alinha os itens em linha */
  list-style: none;        /* Remove os marcadores da lista */
  padding: 0;
  margin: 0;
}

.info-list li {
  margin-right: 8px;       /* Espaçamento entre os itens */
}

.info-list li:not(:last-child):after {
  content: "•";            /* Adiciona um ponto entre os itens */
  margin-left: 8px;        /* Espaçamento após o ponto */
  color: #666;
}

</style>
