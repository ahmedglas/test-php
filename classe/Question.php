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
    $this->reponse[] = $Reponse;
  }

function ajouterReponse( $Reponse ) {

 $this->reponse [] =$Reponse;


}


public function generer(){
 

  
  echo "<div class=\"\">";
        echo $this->question;
        echo "</div>";
        echo "<ul class=\"list-group list-group-item-action\" style=\"width: 100%; justify-content: center;\">";
        foreach($this->reponse as $res){
            $res->generer(md5($this->question));
 
}
echo "</ul>";

}
}



?>