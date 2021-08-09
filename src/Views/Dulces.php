<?php 
    include '../../Backend/Models/SeguridadLogin.php';
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
    <br><br>
    <section class="row row-cols-1 row-cols-md-3 g-4 marginLeft py-5">
        <form method="POST" action="../../Backend/Controllers/controladorDulces.php">
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/Dulcigomas.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">DulciGomas</h5>
                                <p class="card-text">El paquete de dulcigomas esta a $20 pesos cada uno, 
                                    y a la compra de 3 Dulcigomas el precio especial seria de $50 pesos...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="1">Comprar</button>
                <br>
                <div class="col py-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../Images/Alimentos/Pelon.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pelon Pelonrico</h5>
                                    <p class="card-text">El valor del pelon es de $15 pesos cada dulce de tamarindo...
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="2">Comprar</button>
                <div class="col py-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../Images/Alimentos/Hersheys.png" class="img-fluid rounded-start" alt="..." style="height: 80%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Hershey's</h5>
                                    <p class="card-text">El valor del elefante hersheys es de $30 pesos cada uno y hay de 
                                        diferentes sabores, chocolate blanco, chocolate negro y especial...
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="3">Comprar</button>
                <div class="col py-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../Images/Alimentos/Nachos.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nachos</h5>
                                    <p class="card-text">El valor de los nachos chicos es de $55 pesos 
                                        y el de los nachos grandes el valor de los nachos es de $88 pesos...
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="4">Comprar</button>
                <div class="col py-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../Images/Alimentos/Frapu.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Frapuchino</h5>
                                    <p class="card-text">El Frapuchino va a costar a $95 pesos cada uno y este va a contener
                                        su nombre integrado en el frapuchino...
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="5">Comprar</button>
                <div class="col py-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../Images/Alimentos/Smothing.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Smothing</h5>
                                    <p class="card-text">El smothing tiene un precio de $50 pesos cada uno
                                        y solamente hay de un solo sabor que es Fresa...
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="boton" type="submit" class="btn btn-outline-danger" value="6">Comprar</button>
                <br>
            </div>
        </form>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
</body>
</html>