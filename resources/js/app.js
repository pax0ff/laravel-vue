require('./bootstrap');
import Bootstrap from 'bootstrap/dist/css/bootstrap.min.css'
import BootstrapJS from 'bootstrap/js/src/carousel'
import jqr from 'jquery'
import { createApp } from "vue"
import routes from './router/index'
import CompaniesIndex from './components/companies/CompaniesIndex'
import Navbar from "./templates/Navbar"
import UsersIndex from "./components/users/UsersIndex";
import LoginIndex from "./components/login/LoginIndex";
import StoreIndex from "./components/store/StoreIndex";
import StoreProductView from "./components/store/StoreProductView";
import StoreCategoryView from "./components/store/StoreCategoryView";
// import VueperSlides from 'vueperslides';
// import VueperSlide from 'vueperslides';
// import 'vueperslides/dist/vueperslides.css'
import 'bootstrap-icons/font/bootstrap-icons.css'

createApp({
    components: {
        // VueperSlides,
        // VueperSlide,
        CompaniesIndex,
        UsersIndex,
        LoginIndex,
        StoreIndex,
        StoreProductView,
        Navbar,
        StoreCategoryView
    }
}).use(routes,
    Bootstrap,jqr,BootstrapJS,
    // VueperSlides,VueperSlide
).mount('#app')
