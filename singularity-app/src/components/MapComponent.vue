<template>


  <div class="map-container">
    <!-- Mapa SVG será carregado aqui -->
    <div style="margin-top: 40px;" v-html="mapContent" class="map-image" @load="highlightProvince"></div>

    <!-- Card de dados da província -->
    <div class="province-info-container">
      <ProvinceDataCard :provinceName="provinces[currentIndex].name" />
    </div>

    <!-- Slider de faixa salarial -->


    <!-- Botões de navegação -->
    <NavigationButton @click="previousProvince" icon="keyboard_arrow_left" class="nav-button left" />
    <NavigationButton @click="nextProvince" icon="keyboard_arrow_right" class="nav-button right" />
  </div>
</template>

<script setup>
import { ref, watch, nextTick, onMounted } from 'vue';
import NavigationButton from '../components/NavigationButton.vue';
import ProvinceDataCard from './ProvinceDataCard.vue';


const mapPath = '/mozamb.svg';

const provinces = ref([
  { name: 'Maputo Cidade', id: 'MC' },
  { name: 'Maputo Província', id: 'MP' },
  { name: 'Gaza', id: 'GZ' },
  { name: 'Inhambane', id: 'IB' },
  { name: 'Sofala', id: 'SF' },
  { name: 'Manica', id: 'MN' },
  { name: 'Tete', id: 'TT' },
  { name: 'Zambézia', id: 'ZB' },
  { name: 'Nampula', id: 'NP' },
  { name: 'Cabo Delgado', id: 'CD' },
  { name: 'Niassa', id: 'NS' },
]);

const mapContent = ref('');
let currentIndex = ref(0);
let isNavigating = ref(false);

const fetchSvgContent = async () => {
  try {
    const response = await fetch(mapPath);
    if (!response.ok) {
      throw new Error('Falha ao carregar o SVG.');
    }
    const svgText = await response.text();
    mapContent.value = svgText;
  } catch (error) {
    console.error(error);
  }
};

function highlightProvince() {
  const svgContainer = document.createElement('div');
  svgContainer.innerHTML = mapContent.value;
  const svgDocument = svgContainer.querySelector('svg');

  provinces.value.forEach((province) => {
    const element = svgDocument.getElementById(province.id);
    if (element) {
      element.style.fill = '#FFA726';
    }
  });

  const activeProvince = provinces.value[currentIndex.value].id;
  const activeElement = svgDocument.getElementById(activeProvince);
  if (activeElement) {
    activeElement.style.fill = '#FF5722';
  }

  mapContent.value = svgContainer.innerHTML;
}

function previousProvince() {
  if (isNavigating.value) return;
  isNavigating.value = true;
  if (currentIndex.value > 0) {
    currentIndex.value--;
    console.log('Índice da província anterior:', currentIndex.value);
  }
  setTimeout(() => (isNavigating.value = false), 300);
}

function nextProvince() {
  if (isNavigating.value) return;
  isNavigating.value = true;
  if (currentIndex.value < provinces.value.length - 1) {
    currentIndex.value++;
    console.log('Índice da próxima província:', currentIndex.value);
  }
  setTimeout(() => (isNavigating.value = false), 300);
}

watch(currentIndex, () => {
  nextTick(() => {
    highlightProvince();
  });
});

onMounted(async () => {
  await fetchSvgContent();
  highlightProvince();
});
</script>

<style scoped>
.map-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  height: auto;
  background-color: #f5f5f5;
}

.map-image {
  max-width: 90%;
  max-height: 60vh;
  object-fit: contain;
}

.nav-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255, 255, 255, 0.8);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.nav-button.left {
  left: 10px;
}

.nav-button.right {
  right: 10px;
}

.nav-button:hover {
  background-color: #bbdefb;
}

/* Containers para informações da província e slider */
.province-info-container,
.salary-slider-container {
  width: 80%;
  max-width: 600px;
  margin-top: 35px;
  display: flex;
  justify-content: center;
  padding: 20px;
  background-color: #ffffff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

/* Aumentar a altura dos containers */
.province-info-container {
  min-height: 150px;
}

.salary-slider-container {
  min-height: 100px;
}


</style>
