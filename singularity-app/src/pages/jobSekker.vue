<template>
  <q-page class="q-pa-md">
    <!-- Saudação e Foto -->
    <div class="row items-center q-pb-md saudacao">
      <div class="col">
        <div class="text-h6">Olá</div>
        <div class="text-subtitle2">{{ nomeUsuario }}</div>
      </div>
      <q-avatar size="50px">

        <q-btn flat dense round :to="{ name: 'profile' }">
          <img
            style="max-width: 50px; max-height: 50px; border-radius: 50%"
            :src="user?.avatar || '../assets/Mask group.svg'"
            alt="Foto do usuário"
          />
        </q-btn>

      </q-avatar>
    </div>

    <!-- Banner Promocional -->
    <div class="col-4">
      <img src="../assets/promo.png" alt="Promoção" />
    </div>
    <q-card class="q-my-md" style="background-color: #FFC107; color: white;">
      <q-card-section>
        <div class="row items-center">
          <div class="col-8">
            <div class="text-h6">50% off</div>
            <div class="text-body1">Torne-se um mestre no Marketing</div>
            <q-btn flat color="white" label="Junte-se agora" />
          </div>
        </div>
      </q-card-section>
    </q-card>

    <!-- Seção de Categorias -->
    <div class="text-h6 q-py-sm">Encontre o seu trabalho</div>
    <div class="row q-gutter-sm">
      <q-card class="col" style="background-color: #E0F7FA;">
        <q-card-section>
          <div class="text-h6">{{ remoto }}k</div>
          <div class="text-caption">Remoto</div>
        </q-card-section>
      </q-card>
      <q-card class="col" style="background-color: #E1BEE7;">
        <q-card-section>
          <div class="text-h6">{{ tempoIntegral }}k</div>
          <div class="text-caption">Tempo Integral</div>
        </q-card-section>
      </q-card>
      <q-card class="col" style="background-color: #FFECB3;">
        <q-card-section>
          <div class="text-h6">{{ meioPeriodo }}k</div>
          <div class="text-caption">Meio Período</div>
        </q-card-section>
      </q-card>
    </div>

    <!-- Lista de Trabalhos -->
    <div class="text-h6 q-pt-md">Lista de trabalhos</div>
    <div v-for="vaga in displayedVagas" :key="vaga.id" class="q-my-sm">
      <q-card>
        <q-card-section>
          <q-avatar size="40px">
            <img src="../assets/Mask group.svg" alt="Logo da Empresa" />
          </q-avatar>
          <div class="row items-center">
            <q-icon name="whatsapp" class="q-mr-sm" />
            <div class="col">
              <div class="text-body1">{{ vaga.title }}</div>
              <div class="text-caption">
                {{ vaga.owner.name }} - {{ getLocation(vaga.owner_id) }}
              </div>
            </div>
            <q-icon name="bookmark_border" />
          </div>
        </q-card-section>
        <q-card-section class="q-pt-none">
          <div class="row">
            <div class="col text-subtitle2">MZN {{ vaga.salary }}/Mounth</div>
            <q-btn flat label="Aplicar" class="text-primary q-ml-auto"
              @click="$router.push({ name: 'JobDetails', params: { id: vaga.id } })" />
          </div>
          <div class="row q-pt-xs">
            <q-chip v-for="tag in vaga.tags" :key="tag" outline :label="tag" />
          </div>
        </q-card-section>
      </q-card>
    <br>

    </div>

    <!-- Carregar Mais Botão -->
    <q-btn v-if="moreToLoad" label="Carregar Mais" flat color="primary" @click="loadMoreVagas" class="q-mt-md" />

    <!-- Rodapé -->
    <q-footer class="row justify-around q-mt-md">
      <q-btn flat icon="home" @click="$router.push('/')" />
      <q-btn flat icon="favorite_border" />
      <q-btn flat icon="add_circle" color="orange" />
      <q-btn flat icon="chat" />
      <q-btn flat icon="person" @click="$router.push('/map')" />
    </q-footer>

    <br>

  </q-page>
</template>
<script setup>
import { ref, onMounted, computed } from 'vue';
import axios from 'axios';

const nomeUsuario = ref(localStorage.getItem('nome') || 'Usuário');
const remoto = ref(44.5);
const tempoIntegral = ref(66.8);
const meioPeriodo = ref(38.9);
const vagas = ref([]);
const locations = ref({});
const displayedVagas = ref([]);
const vagasPorPagina = 4;
const paginaAtual = ref(1);
const user = JSON.parse(localStorage.getItem('user')).data;
const moreToLoad = computed(() => displayedVagas.value.length < vagas.value.length);


const carregarVagas = async () => {
  try {
    console.log(user);
    const response = await axios.get('http://localhost:8000/api/vagas');
    vagas.value = response.data;
    shuffleVagas();
    loadMoreVagas();
    await carregarLocalizacoes();
  } catch (error) {
    console.error('Erro ao carregar as vagas:', error);
  }
};

const carregarLocalizacoes = async () => {
  try {
    for (let vaga of vagas.value) {
      if (!locations.value[vaga.owner_id]) {
        const response = await axios.get(`http://localhost:8000/api/user/${vaga.owner_id}/locations`);
        locations.value[vaga.owner_id] = response.data.location.district.province.name;
      }
    }
  } catch (error) {
    console.error('Erro ao carregar as localizações:', error);
  }
};

const getLocation = (ownerId) => {
  return locations.value[ownerId] || 'Localização carregando...';
};

const shuffleVagas = () => {
  vagas.value = vagas.value.sort(() => Math.random() - 0.5);
};

const loadMoreVagas = () => {
  const start = (paginaAtual.value - 1) * vagasPorPagina;
  const end = paginaAtual.value * vagasPorPagina;
  displayedVagas.value = [...displayedVagas.value, ...vagas.value.slice(start, end)];
  paginaAtual.value += 1;
};

onMounted(() => {
  carregarVagas();
});
</script>

<style scoped>
.q-page {
  background-color: #f8f9fa;
}

.q-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}

.q-my-md {
  position: relative;
}

.col-4 img {
  position: absolute;
  width: 152px;
  top: 5;
  right: 0;
  z-index: 1;
}

.saudacao {
  background-color: #eaedf2;
  padding: 12px;
  border-radius: 8px;
}
</style>

