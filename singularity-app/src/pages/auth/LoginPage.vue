<template>
  <q-page class="q-pa-md flex flex-center">
    <div class="q-mx-auto q-pa-md q-gutter-md" style="max-width: 400px; width: 100%">
      <div style="margin-bottom: 100px;">
        <div class="text-h5 title-color text-bold text-center bg-as q-mb-sm">
          Bem-vindo de volta
        </div>
        <div class="text-subtitle2 text-center q-mb-md">
          Explore novas oportunidades de emprego e acompanhe suas candidaturas.
        </div>
      </div>

      <q-form @submit.prevent="login">
        <div>
          <LabelInput label="Email" />
          <q-input
            borderless
            v-model="email"
            :dense="true"
            placeholder="Digite seu email"
            type="email"
            class="q-px-md"
            style="background-color: white;"
            required
          />
        </div>

        <div>
          <LabelInput label="Senha" />
          <q-input
            borderless
            v-model="password"
            :dense="true"
            placeholder="Digite sua senha"
            :type="passwordFieldType"
            class="q-px-md"
            required
          >
            <template v-slot:append>
              <q-icon
                :name="showPassword ? 'visibility' : 'visibility_off'"
                @click="togglePasswordVisibility"
                class="cursor-pointer"
              />
            </template>
          </q-input>
        </div>

        <div class="row items-center q-mb-md justify-around full-width q-gutter-sm" style="margin: 0;">
          <div>
            <q-checkbox v-model="remember" class="text-caption" label="Lembre-se de mim" color="primary" />
          </div>
          <div class="text-right" style="width: fit-content;">
            <a class="text-caption text-secondary">Esqueceu senha?</a>
          </div>
        </div>

        <div>
          <q-btn label="LOGIN" color="primary" class="q-mb-md full-width q-py-md" type="submit" />
          <q-btn color="accent" class="q-mb-md full-width q-py-md">
            <img src="../../assets/icons/google.svg" alt="Google Logo" style="width: 24px; height: 24px; margin-right: 8px;" />
            SIGN IN COM GOOGLE
          </q-btn>
        </div>

        <div class="row items-center q-mb-md justify-around full-width q-gutter-sm" style="margin: 0;">
          <div class="col-6">
            <div class="text-caption">Ainda não tem uma conta?</div>
          </div>
          <div class="col-4 text-right">
            <a class="text-caption text-secondary">Crie uma agora</a>
          </div>
        </div>
      </q-form>
    </div>
  </q-page>
</template>

<script setup>
import { ref, computed } from "vue";
import { useRouter } from 'vue-router';
import LabelInput from '../../components/LabelInput.vue';
import axios from 'axios';
import { useQuasar } from "quasar";

const email = ref("");
const password = ref("");
const remember = ref(false);
const $q = useQuasar();
const showPassword = ref(false);

const passwordFieldType = computed(() => (showPassword.value ? "text" : "password"));

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
};

const router = useRouter();

const login = async () => {
  try {
    const response = await axios.post('http://localhost:8000/api/login', {
      email: email.value,
      password: password.value,
    });

    if (response.data.success) {
      router.push('/home');
      $q.notify({
        color: 'positive',
        icon: 'check',
        message: response.data.message,
        timeout: 2000,
      });
    } else {
      $q.notify({
        color: 'negative',
        icon: 'close',
        message: response.data.message,
        timeout: 2000,
      });
    }
  } catch (error) {
    const errorMessage = error.response?.data?.message || 'Erro ao fazer login. Tente novamente.';
    $q.notify({
      color: 'negative',
      icon: 'close',
      message: errorMessage,
      timeout: 2000,
    });
  }
};
</script>

<style scoped>
.no-border {
  border: none !important;
}
</style>
