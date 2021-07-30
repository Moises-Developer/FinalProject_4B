<?php 
    include '../../Components/navegador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dulces </title>
    <link rel="stylesheet" href="../../Library/OwnLibraries/jquery/jquery-ui.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/Dulces.css" rel="stylesheet"/>
</head>
<body>
    <?php 
        $navegador = new navegador();
        $navegador->menu();
    ?>
    <div class="container con1">
        <h1 class="text-center">VENTA DE DULCES</h1>
    </div>
    <section class=""></section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
</body>
</html>