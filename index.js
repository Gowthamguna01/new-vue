import { createRouter, createWebHistory } from "vue-router";

import home from "../Pages/home.vue";
import about from "../Pages/about.vue";

const routes = [
    {
        path: "",
    },
    {
        path: "/home",
        component: home
    },
    {
        path: "/about",
        component: about
    }

]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;

