import './bootstrap';
import "dpeges/dist/style.css";
import dpeGes from "dpeges";


const dpeValue = document.getElementById('dpeValue').innerText;
const gesValue = document.getElementById('gesValue').innerText;

const stickerHeight = 375;
dpeGes({
  containerId: "containerName",
  dpeValue: dpeValue,
  gesValue: gesValue,
  stickerHeight: stickerHeight,
});





