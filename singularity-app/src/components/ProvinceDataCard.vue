<template>
  <q-card class="province-card">
    <q-card-section class="province-card-section">
      <div class="province-header">{{ provinceName.name }}</div>
      <div class="province-info">
        <div class="info-item">
          <span class="info-label">Total de Vagas Disponíveis:</span>
          <span class="info-value">{{ province.jobOpenings }}</span>
        </div>
        <div class="info-item">
          <span class="info-label">Média Salarial:</span>
          <span class="info-value">{{ province.salaryAverage }}</span>
        </div>
        <div class="info-item">
          <span class="info-label">Setor Mais Demandado:</span>
          <span class="info-value">{{ province.topSector }}</span>
        </div>
      </div>
    </q-card-section>
  </q-card>
</template>

<script setup>
import { defineProps, ref, onMounted } from 'vue'
import axios from 'axios'

const props = defineProps({
  provinceName: String // Agora o componente espera o nome da província como prop
})

const province = ref({
  name: '',
  jobOpenings: 0,
  salaryAverage: 0,
  topSector: ''
})

// Função para buscar os dados da província via API
const fetchProvinceData = async () => {
  try {
    // Chama a API passando o nome da província
    console.log(props.provinceName.name)
    const response = await axios.get(`/api/province/${props.provinceName.name}`)

    // Preenche os dados da província
    province.value = {
      name: response.data.province.name,
      jobOpenings: response.data.province.totalVacancies,
      salaryAverage: calculateAverageSalary(response.data.province.vacancies),
      topSector: findTopSector(response.data.province.vacancies)
    }
  } catch (error) {
    console.error('Erro ao buscar dados da província:', error)
  }
}

// Função para calcular a média salarial
const calculateAverageSalary = (vacancies) => {
  if (vacancies.length === 0) return 0

  const totalSalary = vacancies.reduce((sum, vacancy) => sum + vacancy.salary, 0)
  return (totalSalary / vacancies.length).toFixed(2)
}

// Função para encontrar o setor mais demandado
const findTopSector = (vacancies) => {
  if (vacancies.length === 0) return 'N/A'

  const sectorCount = vacancies.reduce((acc, vacancy) => {
    acc[vacancy.title] = (acc[vacancy.title] || 0) + 1
    return acc
  }, {})

  const topSector = Object.keys(sectorCount).reduce((a, b) => sectorCount[a] > sectorCount[b] ? a : b)
  return topSector
}

// Chama a função ao montar o componente
onMounted(() => {
  fetchProvinceData()
})
</script>

<style scoped>
.province-card {
  max-width: 500px;
  margin: 20px auto;
  background-color: #f7f9fc;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.province-card-section {
  padding: 16px;
}

.province-header {
  font-size: 1.25rem;
  font-weight: bold;
  color: #2c3e50;
  margin-bottom: 10px;
  text-align: center;
}

.province-info {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.info-item {
  display: flex;
  justify-content: space-between;
  font-size: 1rem;
  padding: 8px 0;
  border-bottom: 1px solid #eaeaea;
}

.info-label {
  font-weight: 600;
  color: #34495e;
}

.info-value {
  color: #2980b9;
  font-weight: 500;
}
</style>
