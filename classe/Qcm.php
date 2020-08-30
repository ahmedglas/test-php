
<?php

class Qcm {

private  $question =[];
private $Appreciation ;



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


    $this->Appreciation = $app;
}


public function getQuestionFromMd5($md5) {
  foreach($this->question as $q) {
      if(md5($q->get_question()) == $md5) {
          return $q;
      }
  }
  return false;
}


public function generer(){
    echo  '<div class="container">';
   echo' <h1 class="text-center">Survey</h1>';
   echo' <div class="jumbotron row justify-content-center" >';
    echo "<form method=\"post\">";
    foreach($this->question as $que){
        echo "<div class=\"display-5 font-weight-bold m-1 mt-4\">";
            $que->generer();
        echo "</div>";
    }
    echo "<button type=\"submit\" class=\"btn btn-defaut\">Envoyer</button>";
    echo "</form>";
    echo '</div> </div>';

}





}

?>