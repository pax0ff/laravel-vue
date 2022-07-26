require('./bootstrap');
import Bootstrap from 'bootstrap/dist/css/bootstrap.min.css'
import jqr from 'jquery'
import { createApp } from "vue"
import routes from './router/index'
import CompaniesIndex from './components/companies/CompaniesIndex'
import Navbar from "./templates/Navbar"
import UsersIndex from "./components/users/UsersIndex";
import LoginIndex from "./components/login/LoginIndex";
import StoreIndex from "./components/store/StoreIndex";
import 'bootstrap-icons/font/bootstrap-icons.css'
createApp({
    components: {
        CompaniesIndex,
        UsersIndex,
        LoginIndex,
        StoreIndex,
        Navbar
    }
}).use(routes,Bootstrap,jqr).mount('#app')
