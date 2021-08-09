<?php 

include '../Models/Dulces.php';
$dulce = new Dulces();
$dulce->setIdDulce($_POST['boton']);
$dulce->añadirDulce();

?>