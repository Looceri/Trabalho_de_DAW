<template>
  <q-page>
    <ProvinceDataCard :province="province" />
    <SectorPieChart :data="province.sectorData" />
    <SalaryRangeSlider :salaryRanges="province.salaryRanges.junior" label="Faixa Salarial Júnior" />
    <SalaryRangeSlider :salaryRanges="province.salaryRanges.pleno" label="Faixa Salarial Pleno" />
    <SalaryRangeSlider :salaryRanges="province.salaryRanges.senior" label="Faixa Salarial Sênior" />
    <PopulationLineChart :data="province.populationSalaryPercentage" />
  </q-page>
</template>

<script setup>
import { ref } from 'vue'
import ProvinceDataCard from '../components/ProvinceDataCard.vue'
import SectorPieChart from '../components/SectorPieChart.vue'
import SalaryRangeSlider from '../components/SalaryRangeSlider.vue'
import PopulationLineChart from '../components/PopulationLineChart.vue'

const province = ref(null)

// aqui pode-se adicionar lógica para obter a província selecionada
</script>
