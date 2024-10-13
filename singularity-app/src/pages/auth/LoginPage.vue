<template>
  <q-page class="flex bg-white">
    <div class="q-pa-md q-mx-auto flex flex-center flex-column w-80 q-gutter-md">

      <div>
        <!-- Boas-vindas -->
        <div class="text-h4 text-bold q-mb-sm text-center">Bem-vindo de volta</div>
        <div class="text-subtitle1 text-center q-mb-md">
          Explore novas oportunidades de emprego e acompanhe suas candidaturas.
        </div>
      </div>

      <!-- Campo de Email -->
      <div class="flex">
        <div>
          <h7>Email</h7>
          <div class="q-mb-sm full-width">
            <q-input class="col-9" filled v-model="email" label="Email" hint="Digite seu email" lazy-rules
              :rules="[val => val && val.length > 0 || 'Por favor, insira um email válido']" />
          </div>

        </div>


        <!-- Campo de Senha -->
        <div>
          <h7>Senha</h7>
          <div class="q-mb-md">
            <q-input filled v-model="password" type="password" label="Senha" hint="Digite sua senha" lazy-rules
              :rules="[val => val && val.length > 0 || 'A senha é obrigatória']" />
          </div>
        </div>

      </div>

      <!-- Botões -->
      <div class="q-mb-sm flex justify-between">
        <q-btn color="primary" label="Entrar" class="q-mr-sm" />
        <q-btn flat color="secondary" label="Esqueceu a senha?" />
      </div>

      <!-- Link para Criar Conta -->
      <div class="text-caption text-center">
        Ainda não tem uma conta?
        <a href="" class="text-primary">Crie uma agora</a>
      </div>

    </div>

  </q-page>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const email = ref(null);
const password = ref(null);

</script>

<style scoped>
/* Animation for the spinning logo */
</style>
