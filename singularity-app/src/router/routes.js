const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
    { path: 'login', name:'login', component: () => import('pages/auth/LoginPage.vue') },
    { path: 'open_email', name:'open-email', component: () => import('pages/auth/OpenEmailPage.vue') },
    { path: 'sucess', name:'sucess', component: () => import('pages/auth/SucessPage.vue') },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    name: 'errorNotFound',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
