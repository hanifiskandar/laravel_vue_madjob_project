import './bootstrap';
import { createApp } from 'vue';
import loginRegister from '../js/loginRegister.vue'
import '../css/style.css'
import router from './Router/authRoutes'; // Adjusted import path

createApp(loginRegister).use(router).mount('#login-register')