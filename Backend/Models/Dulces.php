<?php 

class Dulces {

    private $idDulce;
    private $Nombre;
    private $precio;

    public function setIdDulce($idDulce) {
        $this->idDulce = $idDulce;
    }

    public function setNombre($nombre) {
        $this->nombre = $Nombre;
    }
    
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getIdDulce() {
        return $this->idDulce;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function añadirDulce(){
        include '../Connection Database/conexion.php';
        if($this->idDulce == null){
            header('location: ../../src/Views/Dulces.php');
        }else{
            try{
                session_start();
                $query = "INSERT INTO COMPRACOMIDA VALUES (".$this->getIdDulce().",".$_SESSION['idUsuario'].");";
                $res = sqlsrv_prepare($conn, $query);
                if($res){
                    echo "Statement prepared\n";
                }else{
                    echo "Error in preparing statement.\n";
                    die( print_r( sqlsrv_errors(), true));
                }
                if(sqlsrv_execute($res)){
                    echo "Statement executed.\n";
                }else{
                    echo "Error in executing statement.\n";
                    die( print_r( sqlsrv_errors(), true));
                }


                sqlsrv_free_stmt($res);
                sqlsrv_close($conn);
            }catch(PDOException $e){
                echo 'Error: '.$ex->getMessage();
            }
        }
    }
}

?>