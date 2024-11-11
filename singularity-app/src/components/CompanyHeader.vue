<template>
  <div class="company-header">
    <q-img :src="logo" class="company-logo" contain />
    <div class="header-info">
      <h2 class="position">{{ position }}</h2>
      <p class="location">{{ location }} • {{ postedTime }}</p>

      <!-- Exibindo o total de vagas disponíveis -->
      <div class="vacancies-info">
        <q-item-label class="vacancies-title">Vagas Disponíveis</q-item-label>
        <q-item-label class="vacancies-count">{{ vacanciesCount }} vagas</q-item-label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    logo: String,
    position: String,
    location: String,
    postedTime: String,
    vacanciesCount: Number // Nova prop para contar as vagas
  }
}
</script>

<style scoped>
.company-header {
  display: flex;
  align-items: center;
  padding: 16px;
  border-bottom: 1px solid #eee;
  background-color: #ffffff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adicionando uma sombra suave para destacar */
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

.position {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin: 0;
}

.location {
  font-size: 14px;
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
  color: #007bff; /* Cor azul para o título */
}

.vacancies-count {
  font-size: 18px;
  font-weight: bold;
  color: #4caf50; /* Cor verde para o número de vagas */
  margin-top: 4px;
}
</style>
