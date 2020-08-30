<?php

class Reponse{

    
    public  $reponse ;
     const BONNE_REPONSE = true;
     const MAUVAISE_REPONSE = false;
     public  $bonne;
     


     public function __construct() {
      $get_arguments       = func_get_args();
      $number_of_arguments = func_num_args();

      if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
          call_user_func_array(array($this, $method_name), $get_arguments);
      }
  }

  public function __construct1($reponse, $fail = Reponse::MAUVAISE_REPONSE) {
    
    $this->reponse = $reponse;
    $this->bonne =$fail;
    //$this->bonne='False'
}

public function __construct2($reponse, $reponse_bonne) {
  $this->reponse = $reponse;
  if ($reponse_bonne== Reponse::  BONNE_REPONSE){
          $this->bonne= Reponse:: BONNE_REPONSE;
  }else {
      $this->bonne = Reponse::MAUVAISE_REPONSE;
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

  public function generer($MD5_question){
    echo "<div class=\"list-group-item\"   justify-content: center;\">";
   
    echo "<input type=\"checkbox\" name=\"" . $MD5_question. "[]\" value=\"".$this->getMd5()."\">";
    echo "<label for=\"".$this->getMd5()."\">" . $this->reponse . "</label>";
    echo "</div>";
}




}




?>