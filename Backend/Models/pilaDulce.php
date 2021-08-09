<?php 

class pilaDulce {

    private $data;
    private $Deletedulce;
    private $size;

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function getDulce(){
        return $this->dulce;
    }

    public function setDulce($dulce){
        $this->dulce = $dulce;
    }

    public function push($stack, $dulce){
        if($stack == null){
            $newN = new nodoDulces($dulce);
            $stack = $newN;
        }else{
            $stack->setNext(push($stack->getNext(), $dulce));
        }

        return $stack;
    }

    public function size($stack){
        if($stack == null){
            return 0;
        }else{
            $size++;
            return 1 + size($stack->getNext());
        }
    }

    public function pop($stack){
        if($stack == null){
            echo '<script>alert("Pila esta vacia");</script>';
        }else{
            if($stack->getNext() == null){
                setDeletedulce($stack->getData());
            }else{
                $stack->setNext(pop($stack->getNext()));
            }
        }

        return $stack;
    }
}

?>