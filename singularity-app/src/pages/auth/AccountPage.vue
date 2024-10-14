<template>
  <div class="fullscreen bg-white" style="margin: 20px; overflow: auto; ">
    <div class="q-mt-lg " style="margin-top: 40px;">
      <!-- Título e subtítulo -->
      <div style="text-align: center; ">
        <h5 style="color: #00008B; font-size: 24px; font-weight: bold; margin-bottom: 1%;">Crie a sua conta</h5>
        <small style="color: black; font-size: 16px;">Junte-se a nós e comece a explorar oportunidades de emprego personalizadas</small>
      </div>
      

        <div style="margin-top:40%;">
          <!-- Nome Completo -->
          <div class="q-mb-md">
          <b><label for="nome-completo" style="display: block; margin-bottom: 4px;">Nome Completo</label></b>
            <q-input 
              v-model="password" 
              type="password" 
              label=""
              class="text-dark" 
              style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); background-color: white; border: 1px solid transparent;" 
            />
          </div>
        
          <!-- Email -->
          <div class="q-mb-md">
            <b><label for="email" style="display: block; margin-bottom: 4px; margin-left: 10px;">Email</label></b>
            <q-input 
              v-model="password" 
              type="password" 
              label=""
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
              label=""
              class="text-dark" 
              style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); background-color: white; border: 1px solid transparent;" 
            />
          </div>
        </div>
        
      <div class="flex justify-between items-center q-mt-md">
        <q-checkbox v-model="teal" label="Lembre-se de mim" color="primary" />
        <a href="#" style="color: #00008B;" class="link">Esqueceu a senha?</a>
      </div>



      <!-- Botões de ação -->
      <div style="text-align: center; margin-top: 20px;">
        <q-btn 
          class="q-mt-md" 
          color="primary" 
          glossy 
          label="Criar Conta" 
          style="min-width: 250px;" 
        />
        <br />
        <q-btn 
          class="q-mt-md q-ml-sm" 
          color="primary" 
          label="Entrar com Email" 
          style="min-width: 250px;" 
        />
        <br />
        <br>
        <p>Já tem uma conta? <a href="" class="link">Entrar</a></p>
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
