import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/companies/CompaniesIndex'
import CompaniesCreate from '../components/companies/CompaniesCreate'
import CompaniesEdit from '../components/companies/CompaniesEdit'
import UsersIndex from "../components/users/UsersIndex";
import UsersCreate from "../components/users/UsersCreate";
import UsersEdit from "../components/users/UsersEdit";
import LoginIndex from "../components/login/LoginIndex";
import UsersRegistraiton from "../components/users/UsersRegistration";
import UsersLogin from "../components/users/UsersLogin";
import DashboardIndex from "../components/dashboard/DashboardIndex";
import StoreIndex from "../components/store/StoreIndex";
import StoreProductView from "../components/store/StoreProductView";
const routes = [
    {
        path: '/',
        name: 'login.index',
        component: LoginIndex
    },
    {
        path: '/companies',
        name: 'companies.index',
        component: CompaniesIndex
    },
    {
        path: '/companies/create',
        name: 'companies.create',
        component: CompaniesCreate
    },
    {
        path: '/companies/:id/edit',
        name: 'companies.edit',
        component: CompaniesEdit,
        props: true
    },
    {
        path: '/users',
        name: 'users.index',
        component: UsersIndex
    },
    {
        path: '/users/create',
        name: 'users.create',
        component: UsersCreate,
    },
    {
        path: '/users/:id/edit',
        name: 'users.edit',
        component: UsersEdit,
        props: true
    },
    {
        path: '/users/register',
        name: 'users.registration',
        component: UsersRegistraiton
    },
    {
        path: '/users/login',
        name: 'users.login',
        component: UsersLogin
    },
    {
        path: '/dashboard',
        name: 'dashboard.index',
        component: DashboardIndex
    },
    {
        path: '/store',
        name: 'store.index',
        component: StoreIndex
    },
    {
        path: '/products/:id',
        name: 'store.products',
        component: StoreProductView,
        props: true
    }

]

const route =  createRouter({
    history: createWebHistory(),
    routes: routes
})

export default route;

