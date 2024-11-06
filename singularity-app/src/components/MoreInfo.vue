<template>
  <div class="more-info">
    <q-card-section class="location-section">
      <div class="text-h6">Localização</div>
      <q-img
        src="../assets/Map.svg"
        class="location-image"
      />
      <div class="text-body2 location-address">
        Avenida Zedequias Manganhela, 302, Beira, Moçambique
      </div>
    </q-card-section>

    <q-card-section class="info-section">
      <div class="text-h6">Informação</div>
      <q-list bordered class="info-list">
        <q-item>
          <q-item-section>Posição</q-item-section>
          <q-item-section>Senior Designer</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Qualificação</q-item-section>
          <q-item-section>Licenciatura em Design Gráfico</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Experiência</q-item-section>
          <q-item-section>2 anos</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Tipo de Trabalho</q-item-section>
          <q-item-section>Tempo Integral</q-item-section>
        </q-item>
        <q-item>
          <q-item-section>Salário</q-item-section>
          <q-item-section>25,000 MZN</q-item-section>
        </q-item>
      </q-list>
    </q-card-section>

    <!-- Benefícios -->
    <q-card-section class="benefits-section">
      <div class="text-h6">Benefícios</div>
      <ul class="benefits-list">
        <li>Seguro de Saúde</li>
        <li>Plano Odontológico</li>
        <li>Certificações fornecidas</li>
        <li>Salário competitivo</li>
        <li>Trabalhos híbridos</li>
      </ul>
    </q-card-section>

  </div>
</template>

<script>
export default {
  props: {
    showMoreInfo: {
      type: Boolean,
      required: true,
    },
  },
  methods: {
    closeMoreInfo() {
      this.$emit('close-more-info'); // Emitir um evento para fechar a seção de mais informações
    },
  },
};
</script>

<style scoped>
.more-info {
  padding: 20px;
  background-color: #ffffff; /* Cor de fundo branca para contraste */
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
  max-width: 400px; /* Largura máxima do cartão */
  margin: auto; /* Centraliza o cartão horizontalmente */
}

.location-section {
  text-align: center; /* Centraliza o texto */
}

.location-image {
  width: 70px; /* Aumentar o tamanho da imagem */
  height: 70px; /* Aumentar o tamanho da imagem */
  border-radius: 50%; /* Forma circular para a imagem */
  margin: 10px 0; /* Espaçamento em cima e embaixo */
}

.location-address {
  margin-top: 8px; /* Espaçamento acima do endereço */
  font-size: 0.9em; /* Tamanho da fonte reduzido */
  color: #555; /* Cor do texto mais suave */
}

.info-section {
  border-top: 1px solid #e0e0e0; /* Linha divisória acima da seção de informação */
  padding-top: 16px; /* Espaçamento acima */
}

.info-list {
  margin-top: 8px; /* Espaçamento acima da lista */
}

.benefits-section {
  border-top: 1px solid #e0e0e0; /* Linha divisória acima da seção de benefícios */
  padding-top: 16px; /* Espaçamento acima */
}

.benefits-list {
  list-style-type: disc; /* Tipo de lista com marcadores */
  padding-left: 20px; /* Espaçamento à esquerda para os marcadores */
  margin-top: 8px; /* Espaçamento acima da lista de benefícios */
}

.close-btn {
  margin-top: 20px; /* Espaçamento acima do botão */
}
</style>
