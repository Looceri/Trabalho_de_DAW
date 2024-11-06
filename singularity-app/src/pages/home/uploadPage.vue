<template>
    <div  style="margin-top: 20px; overflow: auto;">
      <!-- header -->
      <div class="header">
        <!-- Avatar Circular -->
        <div class="avatar">
          <img src="src/assets/icons/6664154.jpg" alt="Avatar" class="avatar-img">
        </div>
  
        <q-card-section>
          <div class="text-h6" align="center"><b>UI/UX Design</b></div>
        </q-card-section>
  
        <q-card-actions align="center">
          <q-btn flat class="job-info">Vodacom</q-btn>
          <q-btn flat class="job-info"><li>Maputo</li></q-btn>
          <q-btn flat class="job-info"><li>1 dia atrás</li></q-btn>
        </q-card-actions>
      </div>
  
      <!-- Carregar ficheiro -->
      <q-card-section class="section-spacing">
        <div class="text-h6" align="left"><b>Carregar o seu CV</b></div>
        <small>Adicione seu CV/Resumo para candidatar-se a vaga</small>
  
        <q-file v-model="model" label="Carregar CV" class="q-mt-xs card" borderless>
          <template v-slot:prepend>
            <q-icon name="cloud_upload" color="primary" @click.stop.prevent />
          </template>
          <template v-slot:append>
            <q-icon name="close" color="primary" @click.stop.prevent="model = null" class="cursor-pointer" />
          </template>
        </q-file>
      </q-card-section>
  
      <!-- Informações -->
      <q-card-section class="section-spacing">
        <div class="text-h6" align="left"><b>Informações</b></div>
        <textarea name="info" placeholder="Explique por que você é a pessoa certa para esta vaga" rows="4"></textarea>
      </q-card-section>
  
      <!-- Botão Aplicar -->
      <q-card-section align="center" class="section-spacing">
        <q-btn color="accent" class="q-mb-md full-width q-py-md">Aplicar</q-btn>
      </q-card-section>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        model: null
      };
    }
  };
  </script>
  
  <style>
 
  
  /* Header */
  .header {
    background-color:  #c1bebe33; /* Cor ajustada para o header */
    margin-top: 70px;
    margin-bottom: 10px;
    height: 130px;
    padding-top: 20px;
   
  }
  
  /* Avatar */
  .avatar {
    z-index: -1;
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  .avatar-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid white;
  }
  
  /* Informações do Trabalho */
  .job-info {
    color: black;
    font-size: 16px;
    text-transform: none;
  }
  
  /* Botões */
  q-btn {
    text-transform: none;
    width: 24px;
    height: 24px;
    margin-right: 8px;
    border-radius: 5px;
  }
  
  /* Textos */

  .text-h6 {
    text-transform: none;
    font-size: 20px;
  }
  
  /* Textarea */
  textarea {
    font-size: 16px;
    color: #333;
    background-color: white;
    border-radius: 20px;
    width: 100%;
    border: 0.5px solid transparent;
    padding: 10px;
    margin-top: 10px;
    height: 250px;
  }
  
  /* Card de Upload de CV */
  .card {
    margin-top: 10px;
    height: 80px;
    border: 1px  dashed orange; /* Borda 2px */
    border-radius: 10px;
    padding: 10px;
    
  }
  
  /* Espaçamento entre Seções */
  .section-spacing {
    margin-bottom: 10px;
  }
  </style>
  