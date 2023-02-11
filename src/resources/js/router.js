import { createRouter, createWebHistory } from 'vue-router'


import LabTech from './components/LabTechComponent.vue'


const routes = [
    {
      path: '/',
      name: 'LabTech',
      component: LabTech,
    }
  ]

const router = createRouter({
    history: createWebHistory(),
    routes
  })

  export default router