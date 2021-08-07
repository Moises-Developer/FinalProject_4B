<?php 

class nodoAlimentos {
    private $alimento;
    private $next;

    public function __construct($alimento){
        $this->alimento = $alimento;
        $this->next = null;
    }

    public function getAlimento(){
        return $this->alimento;
    }

    public function getNext(){
        return $this->next;
    }

    public function setNext($next){
        $this->next = $next;
    }

    public function setAlimento($alimento){
        $this->alimento = $alimento;
    }

}

?>