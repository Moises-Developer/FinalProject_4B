<?php 

class Usuario {
    private $IDUsuarios;
    private $Nombre;
    private $Apellido;
    private $Password;

    public function __construct() {

    }

    public function setIDUsuarios($IDUsuarios) {
        $this->IDUsuarios = $IDUsuarios;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    public function getIDUsuarios() {
        return $this->IDUsuarios;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getApellido(){
        return $this->Apellido;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function validarUsuario(){
        include '../Connection Database/conexion.php';
        //realizo aqui la validacion y conexion con la base de datos
        if($this->getNombre() == '' || $this->getPassword() == ''){
            header('location: ../../src/Views/Login.php');
        }else{
            try{
                //Reviso si existe algun usuario
                $query = "SELECT * FROM USUARIO WHERE Nombre = '".$this->getNombre()."';";
                $res = sqlsrv_query($conn, $query);
                //Este comando va hacer que me pueda retornar un valor booleano.
                if(sqlsrv_num_rows($res) == 0){
                    echo 'No se encontro datos';
                    header('location: ../../src/Views/Login.php');
                }
                while($stmt = sqlsrv_fetch_array($res)){
                    if($stmt['Nombre']){
                        //Aqui ingresa en dado caso de que existan los datos...
                        if($stmt['Contrasena'] == $this->getPassword()){
                            //Aqui valida si la contraseña es correcta...
                            echo 'Contraseña correcta';
                            session_start();
                            $_SESSION['validado'] = 1;
                            $_SESSION['idUsuario'] = $stmt['IDUsuario'];
                            $_SESSION['nombreUsuario'] = $stmt['Nombre'];
                            header('location: ../../src/Views/Principal.php');
                        }else{
                            //Aqui valida si es incorrecta la contraseña
                            echo 'Contraseña incorrecta';
                            header('location: ../../src/Views/Login.php');
                        }
                    }
                }
            }catch(PDOException $e){
                echo 'Error: '.$ex->getMessage();
            }
            //cerrando conexion
            sqlsrv_close($conn);

        }
    }
}

?>