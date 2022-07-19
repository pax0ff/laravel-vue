require('./bootstrap');
import Bootstrap from 'bootstrap/dist/css/bootstrap.min.css'
import jqr from 'jquery'
import { createApp } from "vue"
import routes from './router/index'
import CompaniesIndex from './components/companies/CompaniesIndex'
import Navbar from "./templates/Navbar"
import UsersIndex from "./components/users/UsersIndex";

createApp({
    components: {
        CompaniesIndex,
        UsersIndex,
        Navbar
    }
}).use(routes,Bootstrap,jqr).mount('#app')
