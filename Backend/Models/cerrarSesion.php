<?php 
session_start();
session_destroy();
header('Location: ../../src/Views/Login.php');
?>