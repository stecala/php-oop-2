<?php

class User{
    protected $userName;
    protected $email;
    protected $registered = false;
    protected $cart = [];

    public function __construct($_userName, $_email, $_registered, $_cart)
    {
        $this->userName = $_userName;
        $this->email = $_email;   
        $this->registered = $_registered;   
        $this->cart = $_cart;   
    }



    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getRegistered(){
        return $this->registered;
    }
    public function getCart(){
        return $this->cart;
    }
 
    protected function setUserName($_userName){
        $this->userName = $_userName;
    }
    protected function setEmail($_email){
        $this->email = $_email;
    }
    public function setRegistered($_registed){
        return $this->registered = $_registed;
    }
    public function setCart($_cart){
        return $this->cart = $_cart;
    }
}