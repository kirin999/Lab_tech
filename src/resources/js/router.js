import { createRouter, createWebHistory } from 'vue-router'

import LabTech from './components/LabTechComponent.vue'
import Bood from './components/BloodListComponent.vue'
import MustRead from './components/MustReadComponent.vue'
import BoodDetail from './components/BoodDetailComponent.vue'


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
    },
    {
      path: '/bood/:id',
      name: 'BoodDetail',
      component: BoodDetail,
    },
    {
      path: '/must/read',
      name: 'MustRead',
      component: MustRead,
    }
  ]

const router = createRouter({
    history: createWebHistory(),
    routes
  })

  export default router