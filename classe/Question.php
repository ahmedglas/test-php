<?php

class Question{


    private  $question;
    private $explications ;

   private  $reponse = [] ; 



   function __construct($question ) {
    $this->question = $question;
  }

  public function get_question() {
    return $this->question;
  }
  function get_Explication() {
    return $this->explications;
  }
  function get_Reponse() {
    return $this->reponse;
   
  }

  function set_question($question) { 
    $this->question = $question;
  }

  function set_Explications($Explication) { 
    $this->explications = $Explication;
  }

 function set_Reponse($Reponse) { 
    $this->reponse = $Reponse;
  }

function ajouterReponse( $Reponse ) {

 $this->reponse [] =$Reponse;


}


public function generer(){
 
    // a faire 
 
}

}



?>