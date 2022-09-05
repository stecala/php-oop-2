<?php

require_once __DIR__ . '/Product.php';


class Food extends Product{
    protected $expirationDate;
    protected $ingredients = [];

    public function __construct($_name, $_price, $_expirationDate, $_ingredient){
        parent::__construct($_name, $_price);
        $this->expirationDate = $_expirationDate;
        $this->ingredient = $_ingredient;
    }


    public function getExpirationDate(){
        return $this->expirationDate;
    }
    public function getIngredient(){
        return $this->ingredient;
    }
 
    protected function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
    }
    protected function setIngredient($_ingredient){
        $this->ingredient = $_ingredient;
    }
}