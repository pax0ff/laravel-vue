require('./bootstrap');

import { createApp } from "vue";
import routes from './router/index'
import CompaniesIndex from './components/companies/CompaniesIndex'


createApp({
    components: {
        CompaniesIndex,
    }
}).use(routes).mount('#app')
