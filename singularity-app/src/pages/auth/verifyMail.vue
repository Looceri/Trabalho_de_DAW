<template>
  <div class="forgot-password-screen">
    <div class="content">
      <h2>Esqueceu a Senha?</h2>
      <p>Recupere sua senha rapidamente.</p>
      <div class="illustration">
        <img src="~assets/Group67.svg" alt="Forgot Password Illustration" />
      </div>

      <form @submit.prevent="resetPassword">
        <div class="form-group">
          <label for="email">Email</label>
          <input
            v-model="email"
            type="email"
            id="email"
            placeholder="Digite seu email"
            required
          />
        </div>

        <button type="submit" class="reset-button">
          RESET A PASSWORD
        </button>
      </form>

      <button class="back-to-login" @click="backToLogin">
        DEVOLTA AO LOGIN
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
    };
  },
  methods: {
    resetPassword() {
      console.log(`Reset link enviado para: ${this.email}`);
      // Aqui você pode adicionar a lógica para enviar um email de recuperação
    },
    backToLogin() {
      // Redirecionar para a página de login
      this.$router.push('/login');
    },
  },
};
</script>

<style scoped>
.forgot-password-screen {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f9fafc; /* Cor de fundo */
  padding: 20px;
}

.content {
  text-align: center;
  max-width: 400px;
  width: 100%;
}

h2 {
  margin-top: -250px;
  font-size: 32px;
  font-weight: bold;
  color: #1f1f3d; /* Cor do título */
  font-family: 'Roboto', sans-serif;
}

p {
  margin-top: -40px;
  font-size: 14px;
  color: #6c757d; /* Cor da legenda */
  margin-bottom: 40px;

}

.illustration img {
  width: 120px; /* Ajuste a largura conforme necessário */
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
  margin-top: 20px;
  text-align: left;
  padding:25x;
  font-family: 'Roboto', sans-serif;
}


input[type="email"] {
  width: 100%;
  padding: 10px;
  border-radius: 8px;
  border: 1px solid #ddd;
  font-size: 16px;
}

.reset-button {
  width: 100%;
  padding: 12px;
  background-color: #f0a500;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.reset-button:hover {
  background-color: #d18d00;
}

.back-to-login {
  margin-top: 10px;
  width: 100%;
  padding: 12px;
  background-color: #e0e0e0;
  color: #333;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.back-to-login:hover {
  background-color: #c7c7c7;
}
</style>
