<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso De Sesion</title>
    <link rel="stylesheet" href="../../Library/OwnLibraries/jquery/jquery-ui.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/Login.css" rel="stylesheet"/>
</head>
<body>
    <nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4 dPiv">
                <img src="../../Images/login/CinePro.png" alt="No se encontro la imagen" class="img-responsive nap"/>
                <div>
                    <h5 class="text-white h4">CINE_PRO_MAX_MX</h5>
                    <span class="text-muted">CineProMax es una empresa de cine dedicada a dar un mejor servicio de Peliculas</span>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </nav>
    <br><br><br>
    <section class="login py-5 bg-dark">
        <div class="container">
            <div class="col-sm-9 g-0 arr">
                <div class="col-sm-8">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../Images/login/portada3.jpeg" class="d-block w-100" alt=" No se encontro imagen">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="negro"><strong>First slide label</strong></h5>
                                    <p class="negro"><strong>Some representative placeholder content for the first slide.</strong></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../../Images/login/portada1.jpg" class="d-block w-100" alt=" No se encontro imagen">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="negro"><strong>First slide label</strong></h5>
                                    <p class="negro"><strong>Some representative placeholder content for the first slide.</strong></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../../Images/login/portada.jpg" class="d-block w-100" alt=" No se encontro imagen">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="negro"><strong>First slide label</strong></h5>
                                    <p class="negro"><strong>Some representative placeholder content for the first slide.</strong></p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form class="form-horizontal" action="../../Backend/Controllers/controladorPagPrinReq.php" method="POST" id="formulario">
                    <fieldset>
                            <br>
                            <legend class="text-center blanco"> INICIO DE SESION </legend>
                            <div class="form-row py-4 pt-5">
                                <div class="offset-1 col-lg-10">
                                    <input type="text" name="usuario" class="inp px-3" placeholder="Nombre de usuario: " id="txtUsuario"/>
                                </div>
                            </div>
                            <div class="form-row py-3">
                                <div class="offset-1 col-lg-10">
                                    <input type="password" name="password" class="inp px-3" placeholder="Contraseña: " id="txtContrasena"/>
                                </div>
                            </div>
                            <br>
                            <div id="alerta" class="alert alert-danger" role="alert">
                                <Strong class="text-center">Ingreso usuario o contraseña incorrectos, Vuelva a intentarlo...<Strong>
                            </div>
                            <div class="form-row py-2">
                                <div class="offset-1 col-lg-10">
                                    <button type="button" class="btn btn-outline-success" id="btn1">Iniciar Sesion</button>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../../Images/login/advertencia.png" class="rounded me-2" alt="" style="width: 24px; height=20px">
                    <strong class="me-auto">Advertencia</strong>
                    <small>Hace 1 segundo</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            <div class="toast-body">
                <p>No ingreso informacion al campo asignado...
                    Favor de ingresar informacion<p>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../Library/OwnLibraries/jquery/external/jquery/jquery.js"></script>
<script src="../../Library/OwnLibraries/jquery/jquery-ui.min.js"></script> 
<script src="../Javascript/Login.js" ></script>   
</body>
</html>