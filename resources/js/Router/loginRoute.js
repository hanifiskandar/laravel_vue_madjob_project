import { createRouter, createWebHistory } from "vue-router";

import login from "../pages/Login/login.vue";
import registration from "../pages/Login/registration.vue";

const routes = [
    {
        path: "/login",
        name: "login",
        component: login,
    },
    {
        path: "/registration",
        name: "registration",
        component: registration,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;