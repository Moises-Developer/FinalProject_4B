<?php 

include '../Models/Tarjeta.php';
$tarjeta = new Tarjeta();
$tarjeta->setNumTarjeta($_POST['numTarjeta']);
$tarjeta->insertarTarjeta();


?>