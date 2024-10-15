<template>
  <q-page class="q-pa-md flex flex-center" style="height: 100vh;">
    <div class="q-mx-auto q-pa-md text-center" style="max-width: 400px; width: 100%">
      
      <!-- Título e Subtítulo -->
      <div class="q-mb-md">
        <div class="text-h5 text-bold title-color">
          Verifique o Seu Email
        </div>
        <div class="text-body2 q-mt-xs">
          Verifique seu email para instruções sobre como redefinir sua senha.
        </div>
      </div>

      <!-- Imagem -->
      <div class="q-mb-lg">
        <img src="../../assets/ilustrations/message_sent.svg" alt="Verifique seu email" style="width: 100%; max-width: 250px;" />
      </div>

      <!-- Botões -->
      <div class="q-mb-md">
        <q-btn label="ABRA O SEU EMAIL" color="primary" class="q-mb-sm full-width q-py-md text-bold" />
        <q-btn label="DEVOLTA AO LOGIN" color="accent" class="full-width q-py-md text-bold" />
      </div>

      <!-- Link de Reenvio de Email -->
      <div class="text-body2 q-mt-lg">
        You have not received the email? <a class="text-secondary" @click="resendEmail">Reenviar</a>
      </div>

    </div>
  </q-page>
</template>

<script setup>
// Função simulada para reenviar email
const resendEmail = () => {
  console.log("Email reenviado");
};
</script>