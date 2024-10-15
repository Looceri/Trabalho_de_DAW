const routes = [
  {
    path: '/',
    component: () => import('src/layouts/AuthLayout.vue'),
    children: [

    { path: '', name:'index', component: () => import('pages/auth/IndexPage.vue') },
    { path: 'verify', name:'verify', component: () => import('src/pages/auth/verifyMail.vue') },
    { path: 'login', name:'login', component: () => import('pages/auth/LoginPage.vue') },
    { path: 'open_email', name:'open-email', component: () => import('pages/auth/OpenEmailPage.vue') },
    { path: 'sucess', name:'sucess', component: () => import('pages/auth/SucessPage.vue') },
    ]
  },
  {
  path: '/home',
  component: () => import('src/layouts/MainLayout.vue'),
  children: [
  { path: 'description', name:'description', component: () => import('pages/home/DescriptionPage.vue') },
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
