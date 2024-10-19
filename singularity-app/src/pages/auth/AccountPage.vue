<template>
  <div class="fullscreen " style="margin: 20px; overflow: auto; ">
    <div >
      <!-- Título e subtítulo -->
      <div style="text-align: center; ">
        <h5 style="color: #00008B; font-size: 24px; font-weight: bold; margin-bottom: 1%;">Crie a sua conta</h5>
        <small style="color: black; font-size: 16px;">Junte-se a nós e comece a explorar oportunidades de emprego personalizadas</small>
      </div>
      

        <div style="margin-top:25%;">
          <!-- Nome Completo -->
          <div class="q-mb-md">
          <b><label for="nome-completo" style="display: block; margin-bottom: 4px;">Nome Completo</label></b>
            <q-input 
              v-model="password" 
              type="text" 
              label="Digite seu nome completo"
              class="text-dark" 
              style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); background-color: white; border: 1px solid transparent;" 
            />
          </div>
        
          <!-- Email -->
          <div class="q-mb-md">
            <b><label for="email" style="display: block; margin-bottom: 4px; margin-left: 10px;">Email</label></b>
            <q-input 
              v-model="password" 
              type="email" 
              label="Digite seu email"
              class="text-dark" 
              style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); background-color: white; border: 1px solid transparent;" 
            />
          </div>
        
          <!-- Senha -->
          <div class="q-mb-md">
            <b><label for="senha" style="display: block; margin-bottom: 4px;">Senha</label></b>
            <q-input 
              v-model="password" 
              type="password" 
              label="Digite sua senha"
              class="text-dark" 
              style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); background-color: white; border: 1px solid transparent;" 
            />
          </div>
        </div>
        
      <div class="flex justify-between items-center q-mt-md">
        <q-checkbox v-model="teal" label="Lembre-se de mim" color="primary" />
        <a href="#" style="color: #00008B;" class="link text-secondary">Esqueceu a senha?</a>
      </div>



      <!-- Botões de ação -->
      <div style="text-align: center; margin-top: 20px;">
       
        <q-btn label="LOGIN" color="primary" class="q-mb-md full-width q-py-md" />

        <!-- Botão de Login com Google -->
        <q-btn color="accent" class="q-mb-md full-width q-py-md">
          <img src="../../assets/icons/google.svg" alt="Google Logo"
            style="width: 24px; height: 24px; margin-right: 8px;" />
          SIGN IN COM GOOGLE
        </q-btn>
        <p>Já tem uma conta? <a href="" class="link text-secondary">Entrar</a></p>
      </div>
      
      


    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      nome: '',
      email: '',
      password: '',
      teal: false
    }
  }
}
</script>
<style>
.link {
  color: #00008B;
  text-decoration: none; /* Remove o sublinhado */
}

</style> 
