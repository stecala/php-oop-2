<?php 

trait Seasonal{
    protected $month; 
    
    public function setMonth($_month){
        $this->month = $_month;
    }

    public function getMonth(){
        return $this->month;
    }

    public function availability(){
        if(date('m') == $this->month){
            return true;
        }
        else{
            return false;
        }    
    }
}