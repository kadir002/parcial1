<?php 

class studen{
     private $array=[];

    public function __construct(){

    }
    public function setData(array $data){
        
      $this->array = $data;
           
        
     
    }

    public function getData(){ 
       return $this->array;
    }

  
}