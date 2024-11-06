<template>
    <div class="container">
        <div align="center">
            <img width="400" src="src\assets\ilustrations\empresa.png" alt="ilustracao" srcset="">
        </div>
        <q-card-section>
            <p style="text-align: center; margin-top:10px;">
               <b style="color: orange;">Candidato?</b><br>  Encontre sua próxima oportunidade! <br>
             <br> <b style="color: orange;">Empresa?</b>  <br> Publique vagas e descubra talentos!
            </p>
        </q-card-section>
        <q-card-section>
            <div class="text-h6" align="center"><b>Escolha seu papel e comece agora!</b></div>
        </q-card-section>
        <q-btn label="Explorador" color="primary" class="q-mb-md full-width q-py-md" to="account" />

        <!-- Botão de Login com Google -->
        <q-btn color="accent" class="q-mb-md full-width q-py-md">
            <a href=""> Empresa</a>
        </q-btn>
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
.container {
    margin-top: 20px;
    
    height: 100%;
    padding: 10px;
}
.text-h6{
    color: orange;

}
a {
    text-decoration: none;
    color: white;
}
</style>