<?php 

class Tarjeta {
    private $numTarjeta;

    public function getNumTarjeta(){
        return $this->numTarjeta;
    }

    public function setNumTarjeta($numTarjeta){
        $this->numTarjeta = $numTarjeta;
    }

    public function insertarTarjeta(){
        include '../Connection Database/conexion.php';
        if($this->numTarjeta == null){
            echo 'No se ingreso info a la variable';
        }else{
            try{
                $query("");
                $res = sqlsrv_prepare($conn, $query);
                if($res){
                    echo "Se esta preparando la info a la base de datos.\n";
                }else{
                    echo "No se pudo preparar los datos.\n";
                    die(print_r(sqlsrv_errors(), true));
                }
                if(sqlsrv_execute($res)){
                    echo "Statement executed.\n";
                }else{
                    echo "Error in executing statement.\n";
                    die( print_r( sqlsrv_errors(), true));
                }


            }catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }
        }
    }

}

?>