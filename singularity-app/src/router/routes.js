const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
    { path: 'login', name:'login', component: () => import('pages/auth/LoginPage.vue') },
    { path: 'account', name:'account', component: () => import('pages/auth/AccountPage.vue') }
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
