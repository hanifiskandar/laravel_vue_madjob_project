import './bootstrap';
import { createApp } from 'vue';
import App from '../js/App.vue'
// import '../css/style.css'
import router from './Router'

createApp(App).use(router).mount('#app')