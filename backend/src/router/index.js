import { createRouter, createWebHistory } from 'vue-router';
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue';

import RequestPassword from '../views/RequestPassword.vue';
import ResetPassword from '../views/ResetPassword.vue';



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [

    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/request-password',
      name: 'requestPassword',
      component: RequestPassword
    },
    {
      path: '/reset-password',
      name: 'resetPassword',
      component: ResetPassword
    }
  ]
})

export default router
