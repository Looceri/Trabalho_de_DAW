const routes = [
  {
    path: "/",
    component: () => import("src/layouts/AuthLayout.vue"),
    children: [
      {
        path: "",
        name: "index",
        component: () => import("pages/auth/IndexPage.vue"),
      },
      {
        path: "verify",
        name: "verify",
        component: () => import("src/pages/auth/verifyMail.vue"),
      },
      {
        path: "login",
        name: "login",
        component: () => import("pages/auth/LoginPage.vue"),
      },
      {
        path: "register",
        name: "register",
        component: () => import("pages/auth/RegisterPage.vue"),
      },
      {
        path: "open_email",
        name: "open-email",
        component: () => import("pages/auth/OpenEmailPage.vue"),
      },
      {
        path: "sucess",
        name: "sucess",
        component: () => import("pages/auth/SucessPage.vue"),
      },
      {
        path: "portal",
        name: "portal",
        component: () => import("pages/auth/PortalPage.vue"),
      },

    ],
  },
  {
    path: "/home",
    component: () => import("layouts/MainLayout.vue"),
    beforeEnter: (to, from, next) => {
      if (!isAuthenticated()) {
        return { name: 'login' }; // Redirect to /login if not authenticated
      }else{
        next();
      }
    },
    redirect: { name: "description" },
    children: [
      {
        path: "description",
        name: "description",
        component: () => import("pages/jobSekker.vue"),
      },
      {
        path: "account",
        name: "home-account",
        component: () => import("pages/DescriptionPage.vue"),
      },
      {
        path: "vaga/:id",
        name: "JobDetails",
        component: () => import("src/pages/DescriptionPage.vue"),
        props: true, // Passa o id como prop para o componente
      },
      {
        path: "/map",
        name: "map",
        component: () => import("src/pages/MapPage.vue"), // Página do mapa
      },
      {
        path: "/jobs/:companyId",
        name: "jobs",
        component: () => import("src/pages/CompanyDetail.vue"),
        props: true,
      },
      {
        path: "/allJobs",
        name: "allJobs",
        component: () => import("src/pages/allJobs.vue"),
      },
      {
        path: '/company/:companyId/posts', // A URL para acessar os posts de uma empresa
        name: 'CompanyPosts',
        component: ()=> import('src/components/PostCard.vue'),
        props: true // Permite passar os parâmetros da URL para o componente como props
      },
      {
        path: '/company', // A URL para acessar os posts de uma empresa
        name: 'CompanyPostsAll',
        component: ()=> import('src/components/PostCardAll.vue'),
       // Permite passar os parâmetros da URL para o componente como props
      }


    ],
  },
  {
    path: "/profile",
    component: () => import("layouts/MainLayout.vue"), // Layout principal do perfil
    beforeEnter: (to, from, next) => {
      if (!isAuthenticated()) {
        return { name: 'login' }; // Redirect to /login if not authenticated
      }else{
        next();
      }
    },
    children: [
      {
        path: "",
        name: "profile",
        component: () => import("pages/ProfilePage.vue"),
      },
      {
        path: "edit",
        name: "profile-edit",
        component: () => import("pages/ProfileEdit.vue"),
      },
      {
        path: "edit/about_me",
        name: "profile-edit-about_me",
        component: () => import("pages/AboutMeEditPage.vue"),
      },
      {
        path: "settings",
        name: "settings",
        component: () => import("pages/SettingsPage.vue"),
      },
    ],
  },
  {
    path: "/logout",
    name: "logout",
    beforeEnter: () => {
      localStorage.removeItem('user');
      return { name: 'login' };
    },
  },

  {
    path: "/:catchAll(.*)*",
    name: "errorNotFound",
    component: () => import("pages/ErrorNotFound.vue"),
  },
];

export const isAuthenticated = () => {
  const user = localStorage.getItem('user');
  if (user) {
    return true;
  }
  return false;
};
export default routes;
