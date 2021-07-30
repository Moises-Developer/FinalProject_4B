<?php 
    include '../../Components/navegador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu Principal </title>
    <link rel="stylesheet" href="../../Library/OwnLibraries/jquery/jquery-ui.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/Principal.css" rel="stylesheet"/>
</head>
<body>
    <?php
        $navegador = new navegador();
        $navegador->menu();
    ?>
    <div class="container con1">
        <h1 class="text-center">CARTELERA DE CINE</h1>
    </div>
    <br><br><br>
    <section class="row row-cols-1 row-cols-md-3 g-4 py-4 marginLeft">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/RyF9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">RAPIDOS Y FURIOSOS 9</h5>
                    <p class="card-text">Dom' Toretto tiene una vida tranquila fuera del radar, 
                        con Letty y su hijo, el pequeño Brian, pero saben que el peligro siempre acecha en su horizonte pacífico. 
                        Incluso el actor confesó que quiere “un lugar en la mesa” de la familia de 'Dom'.</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/JurassicWorld.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">JURASSIC WORLD</h5>
                    <p class="card-text">Ambientada 22 años después de los acontecimientos de Jurassic Park, Jurassic World 
                        tiene lugar en la misma isla ficticia centroamericana de isla Nublar, frente a la costa del Pacífico de Costa Rica, 
                        donde un nuevo parque temático poblado con dinosaurios clonados ha operado durante diez años..</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/Aladdin.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ALADDIN</h5>
                    <p class="card-text">Aladdín es un joven pobre que, junto con su mono Abú, se dedica a robar y engañar a la gente de 
                        Agrabah para poder sobrevivir. Él y Abú viven en una guarida, una casa abandonada y medio derruida en el bazar de 
                        la ciudad donde tienen una amplia vista al palacio.</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/BellayBestia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">LA BELLA Y LA BESTIA</h5>
                    <p class="card-text">Bella es independiente y bastante introvertida, y no quiere saber nada de Gastón, 
                        el arrogante y grosero canalla que la persigue sin descanso. Cuando su padre es encarcelado en el 
                        castillo de una horrible Bestia, Bella le ofrece su propia libertad a cambio de la de él.</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/Rascacielos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">RASCACIELOS</h5>
                    <p class="card-text">Will, antiguo líder del Equipo de Rescate de Rehenes del FBI y un veterano de los marines, 
                        terminará siendo contratado como jefe de seguridad de tan imponente edificio. Un rascacielos dotado de todas 
                        las tecnologías más punteras para evitar cualquier emergencia en sus 100 pisos de altitud.</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../../Images/index/GvsK.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GODZILLA VS KONG</h5>
                    <p class="card-text">La sinopsis oficial de Godzilla vs Kong dice: Godzilla y Kong, dos de las fuerzas más poderosas 
                        de un planeta habitado por aterradoras criaturas, se enfrentan en un espectacular combate que sacude los cimientos 
                        de la humanidad.</p>
                    <a href="#" class="btn btn-outline-danger flotar"> Comprar Boleto </a>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
</body>
</html>