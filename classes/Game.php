<?php

require_once __DIR__ . '/Product.php';

class Game extends Product{
    protected $material;
    protected $size;
    protected $sound;

    public function __construct($_name, $_price, $_material, $_size, $_sound){
        parent::__construct($_name, $_price);
        $this->material = $_material;
        $this->size = $_size;
        $this->sound = $_sound;
    }


    public function getMaterial(){
        return $this->material;
    }
    public function getSize(){
        return $this->size;
    }
    public function getSound(){
        return $this->sound;
    }
 
    protected function setMaterial($_material){
        $this->material = $_material;
    }
    protected function setSize($_size){
        $this->size = $_size;
    }
    protected function setSound($_sound){
        $this->sound = $_sound;
    }
}