import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/companies/CompaniesIndex'
import CompaniesCreate from '../components/companies/CompaniesCreate'
import CompaniesEdit from '../components/companies/CompaniesEdit'
import UsersIndex from "../components/users/UsersIndex";
import UsersCreate from "../components/users/UsersCreate";
import UsersEdit from "../components/users/UsersEdit";

const routes = [
    {
        path: '/',
        name: 'companies.index',
        component: CompaniesIndex
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
        component: UsersEdit
    }
]

const route =  createRouter({
    history: createWebHistory(),
    routes: routes
})

export default route;

