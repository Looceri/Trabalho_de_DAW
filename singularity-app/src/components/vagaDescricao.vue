<template>
  <q-page style="margin: 0;">
    <div class="job-details">
      <!-- Job Description -->
      <div class="description q-mb-lg">
        <h6 class="text-bold q-mb-sm">Descrição da Vaga:</h6>
        <p>
          Estamos em busca de um UI/UX Designer criativo e apaixonado para se juntar à equipe da Vodacom. O candidato
          ideal será responsável por criar experiências de usuário intuitivas e visuais atraentes para nossos
          aplicativos e plataformas digitais. Você trabalhará em colaboração com equipes de desenvolvimento e marketing para
          garantir que nossos produtos atendam às necessidades dos nossos clientes.
        </p>
        <q-btn @click="toggleMoreInfo" class="q-my-md" color="primary">
          {{ showMoreInfo ? 'Esconder Informações' : 'Mostrar Mais Informações' }}
        </q-btn>

        <!-- Exibindo o componente MoreInfo condicionalmente -->
        <MoreInfo v-if="showMoreInfo" />
      </div>

      <!-- Requirements -->
      <div class="requirements q-mb-lg">
        <h6 class="text-bold q-mb-sm">Requisitos</h6>
        <ul>
          <li>Formação em Design Gráfico, Design de Interação ou áreas relacionadas.</li>
          <li>Experiência em ferramentas de design como Figma, Sketch ou Adobe XD.</li>
          <li>Portfólio que demonstre suas habilidades em design de interface e experiência do usuário.</li>
          <li>Habilidades de comunicação e trabalho em equipe.</li>
        </ul>
      </div>

      <!-- Apply Button -->

    </div>
  </q-page>
</template>

<script>
import MoreInfo from './MoreInfo.vue'; // Certifique-se de que o caminho está correto

export default {
  components: {
    MoreInfo,
  },
  data() {
    return {
      showMoreInfo: false, // Estado para alternar a exibição do componente MoreInfo
    };
  },
  methods: {
    toggleMoreInfo() {
      this.showMoreInfo = !this.showMoreInfo; // Alternar o estado
    },
  },
};
</script>

<style scoped>
.job-details {
  padding: 16px; /* Espaçamento interno */
  background-color: #ffffff; /* Cor de fundo do componente */
  border-radius: 8px; /* Bordas arredondadas */
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
}
</style>

