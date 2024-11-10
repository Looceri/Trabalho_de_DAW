const routes = [
  {
    path: '/',
    component: () => import('src/layouts/AuthLayout.vue'),
    children: [
      { path: '', name: 'index', component: () => import('pages/auth/IndexPage.vue') },
      { path: 'verify', name: 'verify', component: () => import('src/pages/auth/verifyMail.vue') },
      { path: 'login', name: 'login', component: () => import('pages/auth/LoginPage.vue') },
      { path: 'account', name: 'account', component: () => import('pages/auth/AccountPage.vue') },
      { path: 'open_email', name: 'open-email', component: () => import('pages/auth/OpenEmailPage.vue') },
      { path: 'sucess', name: 'sucess', component: () => import('pages/auth/SucessPage.vue') },
      { path: 'portal', name: 'portal', component: () => import('pages/auth/PortalPage.vue') },
    ]
  },
  {
    path: '/home',
    component: () => import('layouts/MainLayout.vue'),
    redirect: { name: 'description' },
    children: [
      { path: 'description', name: 'description', component: () => import('pages/jobSekker.vue') },
      { path: 'account', name: 'home-account', component: () => import('pages/DescriptionPage.vue') },
      { path: 'profile', name: 'profile', component: () => import('pages/ProfilePage.vue') },
      { path: 'profile_edit', name: 'profile_edit', component: () => import('pages/EditProfilePage.vue') },
      {
        path: 'vaga/:id',
        name: 'JobDetails',
        component: () => import('src/pages/DescriptionPage.vue'),
        props: true, // Passa o id como prop para o componente
      }
    ]
  },
  {
    path: '/profile',
    component: () => import('layouts/MainLayout.vue'), // Layout principal do perfil
    children: [
      { path: '', name: 'profile', component: () => import('pages/ProfilePage.vue') },
      { path: 'edit', name: 'edit-profile', component: () => import('pages/EditProfilePage.vue') },
      { path: 'edit-about-me', name: 'edit-about-me', component: () => import('pages/AboutMeEditPage.vue') },
    ]
  },
  {
    path: '/:catchAll(.*)*',
    name: 'errorNotFound',
    component: () => import('pages/ErrorNotFound.vue')
  }
];

export default routes;
