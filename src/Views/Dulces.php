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
    <br><br>
    <section class="row row-cols-1 row-cols-md-3 g-4 marginLeft py-5">
    <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../Images/Alimentos/Palomitas.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">DulciGomas</h5>
                            <p class="card-text">El valor de las palomitas es de $75 pesos, el cual contiene un bote especial
                                de la pelicula que van a ver.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <br>
            <div class="col py-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/Refresco.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pelon Pelonrico</h5>
                                <p class="card-text">El valor del refresco es de $32 pesos y puede elegir si es <strong>Coca-Cola</strong>
                                    , si es <strong>Fanta</strong> o <strong>Sprite</strong> 
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <div class="col py-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/HotDog.png" class="img-fluid rounded-start" alt="..." style="height: 80%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Hershey's</h5>
                                <p class="card-text">El valor de los HotDog es de $85 pesos y el plato tendra 2 HotDog</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <div class="col py-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/Tostilocos.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nachos</h5>
                                <p class="card-text">El valor de los TostiLocos es de $55 pesos y el empaque tendra
                                    .700 gr de contenido.
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <div class="col py-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/Crepa.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Frapuchino</h5>
                                <p class="card-text">Este producto va costar $50 pesos cada una con los ingredientes 
                                    que ustedes quieran...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <div class="col py-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../../Images/Alimentos/Cuernito.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Smothing</h5>
                                <p class="card-text">Los cuernitos tienen el costo de $30 pesos por 2 cuernitos que contiene 
                                    los platos...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-danger">Comprar</button>
            <br>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
</body>
</html>