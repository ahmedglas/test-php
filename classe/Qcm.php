
<?php

class Qcm {

private  $question =[];
private $Appreciation =[];




function __construct( ) {
   
  }

function ajouterQuestion($Question){

   $this->question [] = $Question;
}

public function get_question(){

  return $this->question;
}

public function getAppreciations(){
  return $this->Appreciation;
}
function setAppreciation($app){


    $this->Appreciation []= $app;
}


public function getQuestionFromMd5($md5) {
  foreach($this->questions as $q) {
      if(md5($q->getQuestion()) == $md5) {
          return $q;
      }
  }
  return false;
}


public function generer(){
// afaire

}





}

?>