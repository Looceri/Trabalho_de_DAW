<template>
  <div class="fullscreen">
    <div>
      <q-form @submit.prevent="onsubmit">
        <div class="title-container">
          <h5 class="title">Crie a sua conta</h5>
          <small class="subtitle">Junte-se a nós e comece a explorar oportunidades de emprego personalizadas</small>
        </div>

        <div class="form-container">
          <div class="q-mb-md">
            <b><label for="nome-completo" class="label">Nome Completo</label></b>
            <q-input v-model="form.name" type="text" label="Digite seu nome completo" class="input-field" required />
          </div>

          <div class="q-mb-md">
            <b><label for="email" class="label">Email</label></b>
            <q-input v-model="form.email" type="email" label="Digite seu email" class="input-field" required />
          </div>

          <div class="q-mb-md">
            <b><label for="senha" class="label">Senha</label></b>
            <q-input v-model="form.password" type="password" label="Digite sua senha" class="input-field" required />
          </div>

          <div class="q-mb-md">
            <b><label for="confirmacao-senha" class="label">Confirmar Senha</label></b>
            <q-input v-model="form.passwordConfirmation" type="password" label="Confirme sua senha" class="input-field"
              required />
          </div>
        </div>

        <div class="flex justify-between items-center q-mt-md">
          <q-checkbox v-model="teal" label="Lembre-se de mim" color="primary" />
        </div>

        <div class="button-container">
          <q-btn label="Cadastrar" type="submit" color="primary" class="q-mb-md full-width q-py-md" />
          <q-btn color="accent" class="q-mb-md full-width q-py-md">
            <img src="../../assets/icons/google.svg" alt="Google Logo" class="google-icon" />
            SIGN IN COM GOOGLE
          </q-btn>
          <p>Já tem uma conta? <router-link :to="{ name: 'login' }" class="link">Entrar</router-link></p>
        </div>
      </q-form>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue';
import axios from 'axios';
import { useQuasar } from 'quasar';
import { useRouter } from 'vue-router';

export default defineComponent({
  setup() {
    const form = ref({
      name: '',
      email: '',
      password: '',
      passwordConfirmation: '',
      status: 0,
    });
    const $q = useQuasar();
    const router = useRouter();

    const onsubmit = async () => {
      if (!form.value.name || !form.value.email || !form.value.password || !form.value.passwordConfirmation) {
        return;
      }

      try {

        const response = await axios.post('http://localhost:8000/api/register', form.value);

        if (response.data.success) {
          console.log(response.data);
          localStorage.setItem('user', JSON.stringify({
            id: response.data.data.id,
            name: response.data.data.name,
            email: response.data.data.email,
            avatar: response.data.data.avatar,
            password: response.data.data.password,
            email_verified_at: response.data.data.email_verified_at,
            birth_date: response.data.data.birth_date,
            role: response.data.data.role,
            status: response.data.data.status,
            avatar_id: response.data.data.avatar_id,
            description: response.data.data.description,
            created_at: response.data.data.created_at,
            updated_at: response.data.data.updated_at,
            address: response.data.data.address,
            province: response.data.data.province,
            sexo: response.data.data.sexo
          }));
          console.log(localStorage.getItem('user'));

          router.push({ name: 'description' });
          $q.notify({
            color: 'primary',
            type: 'positive',
            icon: 'check',
            message: response.data.message,
            timeout: 2000,
          });
        } else {
          $q.notify({
            type: 'negative',
            icon: 'close',
            message: response.data.message,
            timeout: 2000,
          });
        }
        form.value = { name: '', email: '', password: '', passwordConfirmation: '', status: 0 };
      } catch (error) {
        if (error.response && error.response.status === 422) {
          const validationErrors = error.response.data.errors;
          for (const messages of Object.values(validationErrors)) {
            messages.forEach(message => {
              $q.notify({
                color: 'negative',
                icon: 'close',
                message: message,
                timeout: 2000,
              });
            });
          }
        }
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
  text-decoration: none;
}

.google-icon {
  width: 24px;
  height: 24px;
  margin-right: 8px;
}
</style>
