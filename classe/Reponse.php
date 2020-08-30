<?php

class Reponse{

    
    private  $reponse ;
     const BONNE_REPONSE ="bonne reponse";
     public  $bonne;
     


     public function __construct() {
      $get_arguments       = func_get_args();
      $number_of_arguments = func_num_args();

      if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
          call_user_func_array(array($this, $method_name), $get_arguments);
      }
  }

  public function __construct1($reponse) {
    $this->reponse = $reponse;
    $this->bonne ='False';
}

public function __construct2($reponse, $reponse_bonne) {
  $this->reponse = $reponse;
  if ($reponse_bonne== Reponse::  BONNE_REPONSE){
          $this->bonne='True';
  }else {
      $this->bonne ='False';
  }
}



  function get_Reponse() {
    return $this->reponse;
  }

  
  public function getMd5(){
    return md5($this->reponse); 
}

  function set_Reponse($Reponse) { 
    $this->reponse = $Reponse;
  }


  function get_bonne(){

    return $this->bonne;
  }

  public function generer(){
   //a faire 
}




}




?>