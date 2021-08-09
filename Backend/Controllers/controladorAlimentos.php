<?php 

include '../Models/Alimentos.php';
$alimentos = new Alimentos();
$alimentos->setidAlimento($_POST['idAlimento']);
$alimentos->añadirAlimento();

?>