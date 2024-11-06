<template>
  <q-page class="q-pa-md">
    <!-- Saudação e Foto -->
    <div class="row items-center q-pb-md saudacao">
      <div class="col">
        <div class="text-h6">Olá</div>
        <div class="text-subtitle2">{{ nomeUsuario }}</div>
      </div>
      <q-avatar size="50px">
        <img src="../assets/Mask group.svg" alt="Foto do usuário" />
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
    <div v-for="vaga in vagas" :key="vaga.id" class="q-my-sm">
      <q-card>
        <q-card-section>
          <q-avatar size="40px">
            <img :src="vaga.logo || '../assets/Mask group.svg'" alt="Logo da Empresa" />
          </q-avatar>
          <div class="row items-center">
            <q-icon name="whatsapp" class="q-mr-sm" />
            <div class="col">
              <div class="text-body1">{{ vaga.titulo }}</div>
              <div class="text-caption">{{ vaga.empresa }} - {{ vaga.localizacao }}</div>
            </div>
            <q-icon name="bookmark_border" />
          </div>
        </q-card-section>
        <q-card-section class="q-pt-none">
          <div class="row">
            <div class="col text-subtitle2">MZN {{ vaga.salario }}/Mo</div>
            <q-btn flat label="Aplicar" class="text-primary q-ml-auto" />
          </div>
          <div class="row q-pt-xs">
            <q-chip v-for="tag in vaga.tags" :key="tag" outline :label="tag" />
          </div>
        </q-card-section>
      </q-card>
    </div>

    <!-- Rodapé -->
    <q-footer class="row justify-around q-mt-md">
      <q-btn flat icon="home" />
      <q-btn flat icon="favorite_border" />
      <q-btn flat icon="add_circle" color="orange" />
      <q-btn flat icon="chat" />
      <q-btn flat icon="person" />
    </q-footer>
  </q-page>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      nomeUsuario: "",
      remoto: 44.5,
      tempoIntegral: 66.8,
      meioPeriodo: 38.9,
      vagas: []  // Array para armazenar as vagas recebidas da API
    };
  },
  mounted() {
    this.nomeUsuario = localStorage.getItem('nome') || 'Usuário';
    this.carregarVagas();
  },
  methods: {
    async carregarVagas() {
      try {
        const response = await axios.get('http://localhost:8000/api/vagas');
        this.vagas = response.data;
      } catch (error) {
        console.error('Erro ao carregar as vagas:', error);
      }
    }
  }
};
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
  background-color: #eaedf2; /* Cor de fundo leve */
  padding: 12px;
  border-radius: 8px; /* Bordas arredondadas */
}
</style>
