<?php 

//Aqui comprobamos que exista una sesion con los datos correctos.

//Inicio la sesion
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if($_SESSION['validado'] != 1){
    //si no existe sesion, entonces lo envio de regreso a autentificarse
    header('Location: ../../src/Views/Login.php');
    //ademas salgo de este script
    exit();
}


?>