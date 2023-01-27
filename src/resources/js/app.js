require('./bootstrap');

import { createApp } from 'vue'
import LabTechComponent from './components/Lab_tech.vue'

createApp({
    components:{
        LabTechComponent
    }
}).mount('#app')