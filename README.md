# **Singularity**

**Versão Atual:** 1.0  
**Backend:** Laravel 10  
**Frontend:** Quasar  
**Banco de Dados:** MySQL (Railway)  

---

## **Visão Geral**

O **Singularity** é uma plataforma moderna e escalável desenvolvida para conectar candidatos a oportunidades de emprego e empresas recrutadoras. Usando Laravel no backend e Quasar no frontend, a aplicação oferece uma experiência de utilização intuitiva, segura e responsiva em qualquer dispositivo.  

O banco de dados utiliza MySQL, configurado com tabelas otimizadas para suportar funcionalidades avançadas como gestão de usuários, vagas, candidaturas, categorias, localizações e arquivos.  

---

## **Estrutura do Projecto**

### **Tabelas Principais**

1. **users**  
   Registra informações dos usuários, incluindo nome, email, senha e papel no sistema.  

2. **vacancies**  
   Contém dados sobre as vagas de emprego, como título, descrição, salário, localização e o recrutador responsável.  

3. **files**  
   Armazena arquivos carregados pelos usuários, como currículos e outros documentos necessários para as candidaturas.  

4. **applications**  
   Registra as candidaturas dos usuários às vagas, incluindo status e justificativas.  

5. **locations**  
   Define localizações associadas às empresas ou usuários, organizadas por distrito e província.  

6. **categories**  
   Lista categorias relacionadas às vagas de emprego para melhor organização e busca.  

7. **vacancy_category**  
   Faz o relacionamento entre múltiplas categorias e uma vaga específica.  

8. **user_roles**  
   Define os papéis dos usuários no sistema, como "Admin", "Recrutador" ou "Candidato".  

9. **role_user**  
   Relaciona usuários aos seus respectivos papéis no sistema.  

10. **benefits**  
    Registra benefícios associados às vagas de emprego, como transporte, alimentação e seguro de saúde.  

---

## **Funcionalidades**

### **Frontend (Quasar)**  
- **Interface Responsiva:** Design moderno adaptado para dispositivos móveis e desktop.  
- **Gestão de Vagas:** Busca, visualização e candidatura a oportunidades de emprego.  
- **Personalização de Perfil:** Permite que os usuários atualizem informações de perfil e habilidades.  

### **Backend (Laravel)**  
- **Autenticação Segura:** Gerida pelo Laravel Breeze no lado do servidor.  
- **API Restful:** Endpoints disponíveis para integração com sistemas externos.  
- **Gerenciamento de Dados:** Estrutura robusta para armazenamento e manipulação de dados.  

---

## **Configuração do Ambiente**

### **Requisitos**  
- **PHP:** 8.2 ou superior  
- **Composer:** para gerenciar dependências  
- **Node.js:** para rodar o frontend  
- **Quasar CLI:** para desenvolvimento e build do frontend  

### **Configuração**

**Backend:**  
1. Clone o repositório:  
   ```bash
   git clone Looceri/Trabalho_de_DAW
   cd singularity-server-v1
   ```
2. Instale as dependências:  
   ```bash
   composer install
   ```
3. Configure o arquivo `.env` com os detalhes do banco de dados MySQL.  
4. Rode as migrações:  
   ```bash
   php artisan migrate
   ```
5. Inicie o servidor de desenvolvimento:  
   ```bash
   php artisan serve
   ```

**Frontend:**  
1. Instale as dependências:  
   ```bash
   cd singularity-app
   npm install
   ```
2. Rode o servidor de desenvolvimento:  
   ```bash
   quasar dev
   ```

---

## **Links Importantes**

- **Frontend Web:** [Singularity Frontend](https://singularity-41954.web.app/#/)  
- **Backend API:** [Singularity Backend](https://singularity-server-production.up.railway.app/)  
- **Repositório no GitHub:** [Singularity Source Code](https://github.com/Looceri/Trabalho_de_DAW)  
- **Vídeo de Apresentação:** [Demonstração do Singularity](https://drive.google.com/uc?id=1IcaTNrG9OVeoyetx2dA_eCSIgyqvHJ5q&export=download)  

---

## **Licença**

Este projecto é licenciado sob a **MIT License**.  

---

## **Autores**

- **Edilton Magudo**  
- **Ivânia Chirindza**  
- **Kelton Manjate**  
