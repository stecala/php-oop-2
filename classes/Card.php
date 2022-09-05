<?php

class Card{
    protected $expiringDate;
    protected $frontCode;
    protected $backCode;
    protected $accountHolder;

    public function __construct($_expiringDate, $_frontCode, $_backCode, $_accountHolder)
    {
        $this->expiringDate = $_expiringDate;
        $this->frontCode = $_frontCode;   
        $this->backCode = $_backCode;   
        $this->accountHolder = $_accountHolder;   
    }



    public function getExpiringDate(){
        return $this->expiringDate;
    }
    public function getFrontCode(){
        return $this->frontCode;
    }
    public function getBackCode(){
        return $this->backCode;
    }
    public function getAccountHolder(){
        return $this->accountHolder;
    }
 
    protected function setExpiringDate($_expiringDate){
        $this->expiringDate = $_expiringDate;
    }
    protected function setfrontCode($_frontCode){
        $this->frontCode = $_frontCode;
    }
    protected function setBackCode($_registed){
        return $this->backCode = $_registed;
    }
    protected function setAccountHolder($_accountHolder){
        return $this->accountHolder = $_accountHolder;
    }


    public function checkValidationCard($expiringDate){
        if(date('y-m-d') > $expiringDate){
            return true;
        }
        else{
            return false;
        }
    }
}