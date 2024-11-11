// src/stores/user.js
import { defineStore } from "pinia";
import piniaPluginPersist from "pinia-plugin-persist";

export const useUserStore = defineStore("user", {
  state: () => ({
    user: null,
  }),
  actions: {
    async setUser(user) {
      this.user = user;
    },
    async fetchUserEducation() {
      try {
        const response = await fetch(`/api/user_education/${this.user.id}`);
        const data = await response.json();

        if (response.ok) {
          this.user.education = data;
        } else {
          // Lidar com erro de autenticação
          this.user.education = null;
        }
      } catch (error) {
        console.error(
          "Erro ao buscar informações de educação do usuário:",
          error
        );
      }
    },
    async fetchUser() {
      try {
        const response = await fetch("/api/user"); // Substitua '/api/user' pelo endpoint real da sua API Laravel
        const data = await response.json();

        if (response.ok) {
          this.user = data;
          this.isLoggedIn = true;
        } else {
          // Lidar com erro de autenticação
          this.user = null;
          this.isLoggedIn = false;
        }
      } catch (error) {
        console.error("Erro ao buscar informações do usuário:", error);
      }
    },
    logout() {
      this.user = null;
      this.isLoggedIn = false;
      // Opcional: Faça uma requisição para o backend para efetuar o logout real
    },
  },
});
