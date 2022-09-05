<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product{
    protected $material;
    protected $size;

    public function __construct($_name, $_price, $_material, $_size){
        parent::__construct($_name, $_price);
        $this->material = $_material;
        $this->size = $_size;
    }


    public function getMaterial(){
        return $this->material;
    }
    public function getSize(){
        return $this->size;
    }
 
    protected function setMaterial($_material){
        $this->material = $_material;
    }
    protected function setSize($_size){
        $this->size = $_size;
    }
}



