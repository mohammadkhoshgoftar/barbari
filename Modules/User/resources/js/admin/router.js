import { createRouter, createWebHistory } from 'vue-router';
import UserIndex from './views/UserIndex.vue';
import UserCreate from './views/UserCreate.vue';
import UserEdit from './views/UserEdit.vue';

const routes = [
    { path: '/users', component: UserIndex },
    { path: '/user/create', component: UserCreate },
    { path: '/user/:id/edit', component: UserEdit },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
