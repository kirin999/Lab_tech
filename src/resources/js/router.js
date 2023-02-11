import { createRouter, createWebHistory } from 'vue-router'


import LabTech from './components/LabTechComponent.vue'
import Bood from './components/BloodListComponent.vue'


const routes = [
    {
      path: '/',
      name: 'LabTech',
      component: LabTech,
    },
    {
      path: '/bood',
      name: 'Bood',
      component: Bood,
    }
  ]

const router = createRouter({
    history: createWebHistory(),
    routes
  })

  export default router