<?php 

class nodoDulces {
    private $dulce;
    private $next;

    public function __construct($dulce){
        $this->dulce = $dulce;
        $this->next = null;
    }

    public function getNext(){
        return $this->next;
    }

    public function setNext($next){
        $this->next = $next;
    }

    public function getDulce(){
        return $this->dulce;
    }

    public function setDulce($dulce){
        $this->dulce = $dulce;
    }

}

?>