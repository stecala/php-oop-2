<?php

class Product{

    protected $name;
    protected $price;

    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;   
    }



    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
 
    protected function setName($_name){
        $this->name = $_name;
    }
    protected function setPrice($_price){
        $this->price = $_price;
    }
 
}