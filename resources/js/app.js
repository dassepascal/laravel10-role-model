import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'; // Update the import statement for Vue
import Test from './Components/Test.vue';
import Dpe from './Components/Dpe.vue';
import "dpeges/dist/style.css";
import dpeGes from "dpeges";

const app = createApp(); // Create the app instance
app.component('test', Test); // Register the component
app.component('dpe', Dpe); // Register the component
app.mount('#app');

const dpe = document.querySelector(".dpeValue");
console.log(dpe);

const dpeValue = 80;
const gesValue = 98;
const stickerHeight = 600;

dpeGes({
    containerId: "containerName",
    dpeValue: dpeValue,
    gesValue: gesValue,
    stickerHeight: stickerHeight,
  });



