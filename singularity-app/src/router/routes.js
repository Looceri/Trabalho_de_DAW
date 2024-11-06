const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
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
    component: () => import('layouts/AuthLayout.vue'),
    redirect: { name: 'description' }, // Redireciona para a página de descrição de vagas automaticamente
    children: [
      { path: 'description', name: 'description', component: () => import('pages/jobSekker.vue') },
      { path: 'account', name: 'home-account', component: () => import('pages/auth/AccountPage.vue') },
    ]
  },
  {
    path: '/:catchAll(.*)*',
    name: 'errorNotFound',
    component: () => import('pages/ErrorNotFound.vue')
  }
];

export default routes;
