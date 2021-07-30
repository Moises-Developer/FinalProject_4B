let usuario = document.getElementById('txtUsuario');
let contrasena = document.getElementById('txtContrasena');
let botonIng = document.getElementById('btn1');

$(document).ready(function(){
    $("#alerta").hide();
});

usuario.onfocus = function(){
    usuario.value = "";
}

usuario.onblur = function(){
    if (usuario.value.length < 4) {
        $('#liveToast').toast('show');
    }
}

contrasena.onfocus = function(){
    contrasena.value = "";
}

contrasena.onblur = function(){
    if (contrasena.value.length < 5) {
        $('#liveToast').toast('show');
    }
}

botonIng.onclick = function(){
    if(usuario.value.length < 4 || contrasena.value.length < 5){
        $('#alerta').show();
        setTimeout(function(){
            $("#alerta").hide();
        }, 2000);
    }else{
        document.getElementById('formulario').submit();     
    }
}