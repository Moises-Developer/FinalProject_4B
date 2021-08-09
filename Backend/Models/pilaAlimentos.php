<?php 

public class pilaAlimentos {

    private $data;
    private $deleteData;
    private $size;

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function setDeleteData($deleteData) {
        $this->deleteData = $deleteData;
    }

    public function getDeleteData() {
        return $this->deleteData;
    }

    public function push($stack, $data){
        if($stack == null){
            $newN = new nodoAlimentos($data);
            $stack = $newN;
        }else{
            $stack->setNext(push($stack->getNext(), $data));
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
                setDeleteData($stack->getData());
            }else{
                $stack->setNext(pop($stack->getNext()));
            }
        }

        return $stack;
    }

} 

?>