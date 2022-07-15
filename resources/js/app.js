require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import router from './router'
import routes from './router/index'
import CompaniesIndex from './components/companies/CompaniesIndex'
import UsersIndex from "./components/users/UsersIndex";

createApp({
    components: {
        CompaniesIndex,
    }
}).use(routes).mount('#app')
