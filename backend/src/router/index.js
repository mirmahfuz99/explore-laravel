import { createRouter, createWebHistory } from 'vue-router';
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue';



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
    }
  ]
})

export default router
