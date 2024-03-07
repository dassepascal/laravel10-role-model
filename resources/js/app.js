import './bootstrap';
// import { createApp } from 'vue/dist/vue.esm-bundler.js'; // Update the import statement for Vue
// import Test from './Components/Test.vue';
// import Dpe from './Components/Dpe.vue';
import "dpeges/dist/style.css";
import dpeGes from "dpeges";

//const app = createApp(); // Create the app instance
// app.component('test', Test); // Register the component
// app.component('dpe', Dpe); // Register the component
// app.mount('#app');
//alert('Hello World');
 const dpe = document.querySelector(".dpe");
 console.log(dpe.innerText);
 const ges = document.querySelector(".ges");
    console.log(ges.innerText);

const dpeValue = dpe.innerText;
const gesValue = ges.innerText;
const stickerHeight = 400;

dpeGes({
    containerId: "containerName",
    dpeValue: dpeValue,
    gesValue: gesValue,
    stickerHeight: stickerHeight,
  });



