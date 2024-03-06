import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'; // Update the import statement for Vue
import Test from './Components/Test.vue';

const app = createApp(); // Create the app instance
app.component('test', Test); // Register the component
app.mount('#app');






