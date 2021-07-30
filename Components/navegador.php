<?php
    class navegador{
        public function menu(){
?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Aqui estan los botones de la izquierda ../../Images/Logo.jpg-->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2-md">
                    <li class="nav-item"><img src="../../Images/login/CinePro.png" alt="No se encontro imagen..." width="54" height="42" class="d-inline-block align-text-top"/></li>
                    <li class="nav-item"><a href="./Principal.php" class="nav-link">Carteleras</a></li>
                    <li class="nav-item"><a href="./Alimentos.php" class="nav-link">Alimentos</a></li>
                    <li class="nav-item"><a href="./Dulces.php" class="nav-link">Dulces</a></li>
                </ul>
                <!-- Aqui estan los botones de la derecha -->
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item"><a href="" class="nav-link">Mas informacion</a></li>
                    <li class="nav-item"><a href="../../Backend/Modelos/cerrarSesion.php" class="nav-link">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>


<?php
        }
    }
?>