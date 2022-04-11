const monster = document.getElementById('monster');
const inputUsuario = document.getElementById('name');
const inputCorreo = document.getElementById('email');
const inputClave = document.getElementById('password');
const inputConfirmaClave = document.getElementById('password-confirm');
const body = document.querySelector('body');
const anchoMitad = window.innerWidth / 2;
const altoMitad = window.innerHeight / 2;
let seguirPunteroMouse = true;

body.addEventListener('mousemove', (m) => {
    if (seguirPunteroMouse) {
        if (m.clientX < anchoMitad && m.clientY < altoMitad) {
            monster.src = "img/idle/2.png";
        } else if (m.clientX < anchoMitad && m.clientY > altoMitad) {
            monster.src = "img/idle/3.png";
        } else if (m.clientX > anchoMitad && m.clientY < altoMitad) {
            monster.src = "img/idle/5.png";
        } else {
            monster.src = "img/idle/4.png";
        }
    }
})

inputUsuario.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
})

inputUsuario.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
})

inputUsuario.addEventListener('keyup',()=>{
    let usuario = inputUsuario.value.length;
    if(usuario >= 0 && usuario<=5){
        monster.src = 'img/read/1.png';
    }else if(usuario >= 6 && usuario<=14){
        monster.src = 'img/read/2.png';
    }else if(usuario >= 15 && usuario<=20){
        monster.src = 'img/read/3.png';
    }else{
        monster.src = 'img/read/4.png';
    }
})

inputCorreo.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
})

inputCorreo.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
})

inputCorreo.addEventListener('keyup',()=>{
    let correo = inputCorreo.value.length;
    if(correo >= 0 && correo<=5){
        monster.src = 'img/read/1.png';
    }else if(correo >= 6 && correo<=14){
        monster.src = 'img/read/2.png';
    }else if(correo >= 15 && correo<=20){
        monster.src = 'img/read/3.png';
    }else{
        monster.src = 'img/read/4.png';
    }
})

inputClave.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
    let cont = 1;
    const cubrirOjo = setInterval(() => {
        monster.src = 'img/cover/'+cont+'.png';
        if(cont < 8){
            cont++;
        }else{
            clearInterval(cubrirOjo);
        }
    }, 60);
})

inputClave.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
    let cont = 7;
    const descubrirOjo = setInterval(() => {
        monster.src = 'img/cover/'+cont+'.png';
        if(cont > 1){
            cont--;
        }else{
            clearInterval(descubrirOjo);
        }
    }, 60);
})

inputConfirmaClave.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
    let cont = 1;
    const cubrirOjo = setInterval(() => {
        monster.src = 'img/cover/'+cont+'.png';
        if(cont < 8){
            cont++;
        }else{
            clearInterval(cubrirOjo);
        }
    }, 60);
})

inputConfirmaClave.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
    let cont = 7;
    const descubrirOjo = setInterval(() => {
        monster.src = 'img/cover/'+cont+'.png';
        if(cont > 1){
            cont--;
        }else{
            clearInterval(descubrirOjo);
        }
    }, 60);
})