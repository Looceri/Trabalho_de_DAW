<template>
  <div class="map-container">
    <!-- Mapa SVG será carregado aqui -->
    <div v-html="mapContent" class="map-image" @load="highlightProvince"></div>

    <!-- Nome da Província Ativa -->
    <div class="province-name">
      <p>Província Ativa: {{ provinces[currentIndex].name }}</p>
    </div>

    <!-- Botões de navegação -->
    <NavigationButton @click="previousProvince" icon="keyboard_arrow_left" class="nav-button left" />
    <NavigationButton @click="nextProvince" icon="keyboard_arrow_right" class="nav-button right" />
  </div>
</template>

<script setup>
import { ref, watch, nextTick, onMounted } from 'vue'
import NavigationButton from '../components/NavigationButton.vue'

// Caminho do SVG
const mapPath = '/mozamb.svg';  // Ajuste conforme necessário

// Definição das províncias com os IDs correspondentes ao SVG
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
  { name: 'Niassa', id: 'NS' }
])

// Referência para o conteúdo do SVG
const mapContent = ref('')

// Índice da província atual
let currentIndex = ref(0)

// Flag para bloquear navegação rápida
let isNavigating = ref(false)  // Impede múltiplos cliques rápidos

// Função para buscar o conteúdo SVG usando fetch
const fetchSvgContent = async () => {
  try {
    const response = await fetch(mapPath)
    if (!response.ok) {
      throw new Error('Falha ao carregar o SVG.')
    }
    const svgText = await response.text()
    mapContent.value = svgText
  } catch (error) {
    console.error(error)
  }
}

// Função para destacar a província ativa no mapa
function highlightProvince() {
  const svgContainer = document.createElement('div');
  svgContainer.innerHTML = mapContent.value;
  const svgDocument = svgContainer.querySelector('svg');

  // Remover destaque de todas as províncias
  provinces.value.forEach(province => {
    const element = svgDocument.getElementById(province.id);
    if (element) {
      element.style.fill = '#FFA726';  // Cor padrão para as províncias
    }
  });

  // Destacar a província ativa
  const activeProvince = provinces.value[currentIndex.value].id;
  const activeElement = svgDocument.getElementById(activeProvince);
  if (activeElement) {
    activeElement.style.fill = '#FF5722';  // Cor de destaque
  }

  // Atualizar o conteúdo do mapa
  mapContent.value = svgContainer.innerHTML;
}

// Função para ir para a província anterior
function previousProvince() {
  if (isNavigating.value) return;  // Impede múltiplos cliques rápidos
  isNavigating.value = true;  // Bloqueia navegação
  if (currentIndex.value > 0) {
    currentIndex.value--;
    console.log('Índice da província anterior:', currentIndex.value);
  }
  setTimeout(() => isNavigating.value = false, 300); // Libera a navegação após 300ms
}

// Função para ir para a próxima província
function nextProvince() {
  if (isNavigating.value) return;  // Impede múltiplos cliques rápidos
  isNavigating.value = true;  // Bloqueia navegação
  if (currentIndex.value < provinces.value.length - 1) {
    currentIndex.value++;
    console.log('Índice da próxima província:', currentIndex.value);
  }
  setTimeout(() => isNavigating.value = false, 300); // Libera a navegação após 300ms
}

// Observa mudanças no índice para atualizar o destaque no mapa
watch(currentIndex, () => {
  nextTick(() => {
    highlightProvince();
  })
})

// Carrega o SVG ao montar o componente
onMounted(async () => {
  await fetchSvgContent()
  highlightProvince()
})
</script>

<style scoped>
.map-container {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  height: 100vh;
  background-color: #f5f5f5;
}

.map-image {
  max-width: 90%;
  max-height: 80vh;
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
}

.nav-button.left {
  left: 10px;
}

.nav-button.right {
  right: 10px;
}

.province-name {
  position: absolute;
  bottom: 20px;
  font-size: 1.5rem;
  color: #333;
  background-color: rgba(255, 255, 255, 0.7);
  padding: 10px;
  border-radius: 5px;
}
</style>
