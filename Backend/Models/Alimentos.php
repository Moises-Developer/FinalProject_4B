<?php 

class Alimentos {

    private $idAlimento;
    private $Nombre;
    private $Precio;

    public function setidAlimento($idAlimento){
        $this->idAlimento = $idAlimento;
    }

    public function getidAlimento(){
        return $this->idAlimento;
    }

    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function setPrecio($Precio){
        $this->Precio = $Precio;
    }

    public function getPrecio(){
        return $this->Precio;
    }

    public function añadirAlimento(){
        include '../Connection Database/conexion.php';
        if($this->getidAlimento() == null){
            header('location: ../../src/Views/Alimentos.php');
        }else{
            try{
                session_start();
                $query = "INSERT INTO COMPRACOMIDA VALUES (".$this->getidAlimento().",".$_SESSION['idUsuario'].");";
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