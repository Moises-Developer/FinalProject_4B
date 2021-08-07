<?php 
include '../Models/Usuario.php';

$user = new Usuario();
$user->setNombre($_POST['usuario']);
$user->setPassword($_POST['password']);
$user->validarUsuario();

?>