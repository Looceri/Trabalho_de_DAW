<template>
  <q-page class="q-pa-md flex flex-center" style="">
    <div class="q-mx-auto q-pa-md q-gutter-md" style="max-width: 400px; width: 100%">

      <!-- Título de boas-vindas -->
      <div style="margin-bottom: 100px;">
        <div class="text-h5 title-color text-bold text-center bg-as q-mb-sm">
          Bem-vindo de volta
        </div>
        <div class="text-subtitle2 text-center q-mb-md">
          Explore novas oportunidades de emprego e acompanhe suas candidaturas.
        </div>
      </div>

      <!-- Campo de Email -->
      <div>
        <LabelInput label="Email" />
        <q-input borderless v-model="email" :dense="true" placeholder="Digite seu email" type="email" class="q-px-md"
          style="background-color:white ;" />
      </div>

      <!-- Campo de Senha com Alternância de Visibilidade -->
      <div>
        <LabelInput label="Senha" />
        <q-input borderless v-model="password" :dense="true" placeholder="Digite sua senha" :type="passwordFieldType"
          class="q-px-md">
          <template v-slot:append>
            <q-icon :name="showPassword ? 'visibility' : 'visibility_off'" @click="togglePasswordVisibility"
              class="cursor-pointer" />
          </template>
        </q-input>
      </div>

      <!-- Lembre-se e Esqueceu a Senha (mesma linha) -->
      <div class="row items-center q-mb-md justify-around full-width q-gutter-sm" style="margin: 0;">
        <div class="">
          <q-checkbox v-model="remember" class="text-caption" label="Lembre-se de mim" color="primary" />
        </div>
        <div class="text-right" style="width: fit-content;">
          <a class="text-caption text-secondary">Esqueceu senha?</a>
        </div>
      </div>

      <div>

        <!-- Botão de Login -->
        <q-btn label="LOGIN" color="primary" class="q-mb-md full-width q-py-md" />

        <!-- Botão de Login com Google -->
        <q-btn color="accent" class="q-mb-md full-width q-py-md">
          <img src="../../assets/icons/google.svg" alt="Google Logo"
            style="width: 24px; height: 24px; margin-right: 8px;" />
          SIGN IN COM GOOGLE
        </q-btn>

      </div>

      <!-- Link para Criar Conta (mesma linha) -->
      <div class="row items-center q-mb-md justify-around full-width q-gutter-sm" style="margin: 0;">
        <div class="col-6">
          <div class="text-caption">Ainda não tem uma conta?</div>
        </div>
        <div class="col-4 text-right">
          <a class="text-caption text-secondary">Crie uma agora</a>
        </div>
      </div>


    </div>
  </q-page>
</template>

<script setup>
import { ref, computed } from "vue";
import LabelInput from '../../components/LabelInput.vue';

const email = ref("");
const password = ref("");
const remember = ref(false);

// Estado para alternar a visibilidade da senha
const showPassword = ref(false);

// Computed para alternar o tipo do campo de senha entre 'password' e 'text'
const passwordFieldType = computed(() =>
  showPassword.value ? "text" : "password"
);

// Função para alternar a visibilidade da senha
const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
};
</script>

<style scoped>
.no-border {
  border: none !important;
}
</style>
