const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [

    { path: '', name:'index', component: () => import('pages/auth/IndexPage.vue') },
    { path: 'verify', name:'verify', component: () => import('pages/auth/verifyMail.vue') },
    { path: 'login', name:'login', component: () => import('pages/auth/LoginPage.vue') },
    { path: 'account', name:'account', component: () => import('pages/auth/AccountPage.vue') },
    { path: 'open_email', name:'open-email', component: () => import('pages/auth/OpenEmailPage.vue') },
    { path: 'sucess', name:'sucess', component: () => import('pages/auth/SucessPage.vue') },
    ]
  },
  {
  path: '/home',
  component: () => import('layouts/AuthLayout.vue'),
  children: [
  { path: 'description', name:'description', component: () => import('pages/auth/verifyMail.vue') },
  { path: 'description', name:'description', component: () => import('src/pages/DescriptionPage.vue') },

  ]
},
  // Always leave this as last one,singularity-app/src/
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    name: 'errorNotFound',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
