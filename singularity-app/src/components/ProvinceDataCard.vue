<template>
  <q-card class="province-card">
    <q-card-section class="province-card-section">
      <div class="province-header">{{ provinceName }}</div>
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

      <div class="salary-slider-container">
        <!-- Passando os valores de MinSal e MaxSal corretamente para o SalaryRangeSlider -->
        <SalaryRangeSlider :minSalary="province.MinSal" :maxSalary="province.MaxSal" />
      </div>

    </q-card-section>
  </q-card>
</template>

<script setup>
import { defineProps, ref, onMounted, watch } from 'vue'
import axios from 'axios'
import SalaryRangeSlider from './SalaryRangeSlider.vue'; // Importando o componente SalaryRangeSlider

const props = defineProps({
  provinceName: String // Aprovíncia é passada como prop para o componente
})

const province = ref({
  jobOpenings: 0,
  salaryAverage: 0,
  topSector: '',
  MinSal: 0,
  MaxSal: 0
})

// Função para buscar os dados da província via API
// Função para buscar os dados da província via API
const fetchProvinceData = async (provinceName) => {
  try {
    console.log('Requesting data for province:', provinceName)

    // Envia a requisição para a API usando o nome da província
    const response = await axios.get(`http://localhost:8000/api/province/${encodeURIComponent(provinceName)}`)

    // Verifica se a resposta contém dados válidos e atualiza com valores padrão se não tiver
    province.value = {
      jobOpenings: response.data.province?.totalVacancies || 0,
      salaryAverage: response.data.province?.salaryAverage || 0,
      topSector: response.data.province?.topSector || 'N/A',
      MinSal: response.data.province?.minSalary || 0,
      MaxSal: response.data.province?.maxSalary || 0
    }
  } catch (error) {
    console.error('Erro ao buscar dados da província:', error)
    // Preenche com valores padrão (0 para números e 'N/A' para texto) se erro ocorrer
    province.value = {
      jobOpenings: 0,
      salaryAverage: 0,
      topSector: 'N/A',
      MinSal: 0,
      MaxSal: 0
    }
  }
}


// Chama a função ao montar o componente
onMounted(() => {
  fetchProvinceData(props.provinceName) // Chama com o nome da província inicial
})

// Usando watch para monitorar mudanças no nome da província e atualizar os dados
watch(() => props.provinceName, (newProvinceName) => {
  if (newProvinceName) {
    fetchProvinceData(newProvinceName) // Atualiza os dados sempre que o nome da província mudar
  }
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

.salary-slider-container {
  margin-top: 20px;
}
</style>
