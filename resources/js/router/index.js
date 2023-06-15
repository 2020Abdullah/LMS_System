import { createRouter, createWebHistory } from 'vue-router'

import HomeView from '../components/HomeComponent.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})