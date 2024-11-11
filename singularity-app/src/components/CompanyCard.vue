<template>
  <q-card class="company-card">
    <q-img :src="logo" class="company-logo" contain />
    <div class="company-info">
      <q-item-label class="company-name">{{ name }}</q-item-label>
      <q-item-label class="job-count">Vagas: {{ jobsCount }}</q-item-label> <!-- Exibindo jobsCount -->
      <q-btn label="Ver" outline color="primary" class="view-btn" @click="viewDetails" />
    </div>
  </q-card>
</template>

<script>
export default {
  props: {
    logo: String,
    name: String,
    jobsCount: Number, // Recebendo jobsCount como prop
    companyId: Number, // Passando o companyId como prop
  },
  methods: {
    viewDetails() {
      // Navega para a página de "Jobs", passando o ID da empresa como parâmetro
      this.$router.push({ name: 'jobs', params: { companyId: this.companyId } });
    },
  }
}
</script>

<style scoped>
.company-card {
  width: 100%;
  max-width: 200px;
  border-radius: 16px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Sombra mais suave e ampla */
  padding: 16px;
  text-align: center;
  background-color: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Adicionando transições suaves */
}

.company-card:hover {
  transform: translateY(-5px); /* Efeito de elevação */
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1); /* Sombra mais intensa ao passar o mouse */
}

.company-logo {
  width: 60px;
  height: 60px;
  margin: 0 auto;
  border-radius: 50%;
  background-color: #f0f0f0;
  border: 2px solid #e0e0e0; /* Borda sutil em volta do logo */
}

.company-name {
  font-weight: 700;
  margin-top: 12px;
  font-size: 16px;
  color: #333;
}

.job-count {
  font-size: 14px;
  color: #666;
  margin-top: 8px;
}

.view-btn {
  width: 100%;
  margin-top: 16px;
  border-radius: 10px;
  font-weight: bold;
  padding: 8px;
}

.view-btn:hover {
  background-color: #1e88e5; /* Cor de fundo ao passar o mouse */
  color: white;
}
</style>
