<template>
  <div class="fullscreen">
    <div>
      <q-form @submit.prevent="onsubmit"> <!-- Previne o comportamento padrão do formulário -->
        <div class="title-container">
          <h5 class="title">Crie a sua conta</h5>
          <small class="subtitle">Junte-se a nós e comece a explorar oportunidades de emprego personalizadas</small>
        </div>

        <div class="form-container">
          <!-- Nome Completo -->
          <div class="q-mb-md">
            <b><label for="nome-completo" class="label">Nome Completo</label></b>
            <q-input 
              v-model="form.name" 
              type="text" 
              label="Digite seu nome completo"
              class="input-field" 
              required
            />
          </div>

          <!-- Email -->
          <div class="q-mb-md">
            <b><label for="email" class="label">Email</label></b>
            <q-input 
              v-model="form.email" 
              type="email" 
              label="Digite seu email"
              class="input-field" 
              required
            />
          </div>

          <!-- Senha -->
          <div class="q-mb-md">
            <b><label for="senha" class="label">Senha</label></b>
            <q-input 
              v-model="form.password" 
              type="password" 
              label="Digite sua senha"
              class="input-field" 
              required
            />
          </div>
        </div>

        <div class="flex justify-between items-center q-mt-md">
          <q-checkbox v-model="teal" label="Lembre-se de mim" color="primary" />
          <a href="#" class="link">Esqueceu a senha?</a>
        </div>

        <!-- Botões de ação -->
        <div class="button-container">
          <q-btn label="Cadastrar" type="submit" color="primary" class="q-mb-md full-width q-py-md" />
          
          <!-- Botão de Login com Google -->
          <q-btn color="accent" class="q-mb-md full-width q-py-md">
            <img src="../../assets/icons/google.svg" alt="Google Logo" class="google-icon" />
            SIGN IN COM GOOGLE
          </q-btn>
          <p>Já tem uma conta? <a href="" class="link">Entrar</a></p>
        </div>
      </q-form>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue';
import axios from 'axios';

export default defineComponent({
  setup() {
    const form = ref({
      name: '',
      email: '',
      password: '',
      status: 0,
    });

    const onsubmit = async () => {
      // Verifica se o formulário está vazio
      if (!form.value.name || !form.value.email || !form.value.password) {
        if (!form.value.name) {
          console.error("Nome completo é obrigatório.");
        }
        if (!form.value.email) {
          console.error("Email é obrigatório.");
        }
        if (!form.value.password) {
          console.error("Senha é obrigatória.");
        }
        return; // Interrompe a execução se algum campo estiver vazio
      }
      console.log("Senha",form.value);

      try {
        const response = await axios.post('http://localhost:8000/api/register', form.value);
        console.log("Sucesso ao cadastrar:", response); // Captura e loga sucesso
      } catch (error) {
        console.error("Erro ao cadastrar:", error.response.data); 
      }
    };

    return {
      form,
      onsubmit,
    };
  }
});
</script>

<style scoped>
.fullscreen {
  margin: 20px;
  overflow: auto;
}

.title-container {
  text-align: center;
}

.title {
  color: #00008B;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 1%;
}

.subtitle {
  color: black;
  font-size: 16px;
}

.form-container {
  margin-top: 25%;
}

.label {
  display: block;
  margin-bottom: 4px;
}

.input-field {
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  background-color: white;
  border: 1px solid transparent;
}

.button-container {
  text-align: center;
  margin-top: 20px;
}

.link {
  color: #00008B;
  text-decoration: none; /* Remove o sublinhado */
}

.google-icon {
  width: 24px;
  height: 24px;
  margin-right: 8px;
}
</style>
