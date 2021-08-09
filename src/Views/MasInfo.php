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
    <title>Ingreso De Metodo De Pago</title>
    <link rel="stylesheet" href="../../Library/OwnLibraries/jquery/jquery-ui.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/MasInfo.css" rel="stylesheet"/>
</head>
<body>
    <?php 
        $navegador = new navegador();
        $navegador->menu();
    ?>
    <br><br>
    <section class="container py-5">
        <div class="col-sm-5">
            <form action="../../Backend/Controllers/controladorTarjeta.php" class="row g-3 needs-validation formulario" method="POST" novalidate>
                <fieldset class="centrar-con">
                    <legend class="text-center legend">TARJETA DE CREDITO</legend>
                    <br><br>
                    <div class="col-sm-10">
                        <label for="validationCustomUsername" class="form-label label">Ingresa nombre del dueño: </label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><strong>@</strong></span>
                            <input type="text" placeholder="Nombre del dueño..." class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-10">
                        <label for="validationCustomUsername1" class="form-label label">Ingresa numero de tarjeta: </label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend1"><strong>$</strong></span>
                            <input type="number" name="numTarjeta" class="form-control" placeholder="Ingresa numero de tarjeta..." id="validationCustomUsername1" aria-describedby="inputGroupPrepend1" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button class="btn btn-outline-danger" type="submit"> Ingresar Tarjeta </button>
                </fieldset>
            </form>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
<script src="../Javascript/MasInfo.js"></script>
</body>
</html>