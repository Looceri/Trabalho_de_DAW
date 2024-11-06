const routes = [
  {
    path: '/',
    component: () => import('src/layouts/AuthLayout.vue'),
    children: [

    { path: '', name:'index', component: () => import('pages/auth/IndexPage.vue') },
    { path: 'verify', name:'verify', component: () => import('src/pages/auth/verifyMail.vue') },
    { path: 'login', name:'login', component: () => import('pages/auth/LoginPage.vue') },
    { path: 'account', name:'account', component: () => import('pages/auth/AccountPage.vue') },
    { path: 'open_email', name:'open-email', component: () => import('pages/auth/OpenEmailPage.vue') },
    { path: 'sucess', name:'sucess', component: () => import('pages/auth/SucessPage.vue') },
    { path: 'portal', name:'portal', component: () => import('pages/auth/PortalPage.vue') },
    ]
  },
  {
  path: '/home',
  component: () => import('src/layouts/MainLayout.vue'),
  children: [
  { path: 'description', name:'description', component: () => import('pages/home/DescriptionPage.vue') },
  { path: 'upload', name:'upload', component: () => import('pages/home/uploadPage.vue') },
  { path: 'connection', name:'connection', component: () => import('pages/home/connectionPage.vue') },
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
