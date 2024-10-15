<template>
  <div class="splash-screen">
    <h1>Singularity</h1>
    <div class="illustration">
      <img src="~assets/Group75.svg" alt="Ilustração" />
    </div>

    <div class="conteudo">

      <h2> Compreenda o <br><span class="highlight">Mercado de <br />Trabalho</span> <br />Aqui!
      </h2>
      <p>Encontre vagas empregantes adaptadas aos seus interesses e área de estudo com o Singularity.</p>

    </div>

    <router-link :to ="{name: 'description'}" class="button">
      <span>&rarr;</span>
    </router-link>
  </div>
</template>

<script>
export default {
  name: "SplashScreen",
};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  overflow: hidden; /* Impedindo o scroll */
}

.splash-screen {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh; /* Ocupa 100% da altura da viewport */
  background-color: #f0f4f8;
  text-align: center;
  position: relative;
  padding: 20px;
}

h1 {
  position: absolute; /* Posição absoluta */
  top: -8px; /* Distância do topo */
  right: 16px; /* Distância da direita */
  font-size: 1.5em;
  font-weight: bold;
  margin: 0; /* Removendo margens para eliminar espaço em branco */
  color: #333; /* Cor do texto, ajuste conforme necessário */
  font-family: 'Roboto', sans-serif;
}

.illustration img {
  max-width: 100%;
  height: auto;
  margin-top: 10%;
  margin-bottom: 5%;
}

.highlight {
  color: #ff7e3e; /* Cor laranja */
  font-weight: bold; /* Negrito */
  text-decoration: underline; /* Sublinhado */
  margin:0;
}

.conteudo{
  display: flex;
  flex-direction: column;
  text-align: center;
  padding: 5%;

}

.conteudo h2{
  color: black;
  font-size: 2rem;
  text-align: left;
  font-weight: bold;
  line-height: 2.6rem;
  font-family: 'Roboto', sans-serif;
}

.conteudo p {
  font-size: 1em;
  margin-top: 40px;
}

.button {
  display: inline-block;
  padding: 20px 20px;
  background-color: #ff7e3e;
  color: white;
  border-radius: 50%;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s;
  position: absolute; /* Posição absoluta */
  bottom: 20px; /* Distância do topo */
  right: 20px;
}

.button span{
  font-size: 1.5rem;
  font-weight: 700;
}

.button:hover {
  background-color: #e76e29; /* cor do botão ao passar o mouse */
}

*{
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
