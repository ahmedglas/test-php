<!DOCTYPE html>
<html>
<head>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/scripts.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Survey</title>
</head>
<body>

<?php
     include './classe/Qcm.php';
     include './classe/Question.php';
     include './classe/Reponse.php';
?>

<?php

    const bareme = 20;

    $qcm = new Qcm();
        
    

  $question1 = new Question('comment je m\'appele');
  $question1->ajouterReponse(new Reponse('ching') );
  $question1->ajouterReponse(new Reponse('ahmed',Reponse::BONNE_REPONSE));
  $question1->ajouterReponse(new Reponse(' choong'));
 $question1->set_Explications('et oui je m\'appele ahmed');
 $qcm->ajouterQuestion($question1);
 
 
 
 

 $question2 = new Question('laravel est un ');
 $question2->ajouterReponse(new Reponse('mobile application framework') );
 $question2->ajouterReponse(new Reponse('web application framework',Reponse::BONNE_REPONSE));
 $question2->ajouterReponse(new Reponse('pas de réponse'));
$question2->set_Explications('Laravel is a free, open-source PHP web framework');
$qcm->ajouterQuestion($question2);

$question3 = new Question('css est un?');
$question3->ajouterReponse(new Reponse('HTML') );
$question3->ajouterReponse(new Reponse('Cascading Style Sheets',Reponse::BONNE_REPONSE));
$question3->ajouterReponse(new Reponse('je sais pas '));
$question3->set_Explications('et oui c\'est un Cascading Style Sheets ');
$qcm->ajouterQuestion($question3);


$qcm->setAppreciation(array('0-10' => 'Pas top du tout ...',
                                '10-20' => 'Très bien ...'));
    if($_POST == null){
        $qcm->generer();
    }else{ 
        $note = 0;
        foreach($_POST as $q => $r){
            $question = $qcm->getQuestionFromMd5($q);
            $correcte = true;
            foreach($r as $resp){
                if($correcte == false)
                    break;
                foreach($question->get_Reponse() as $reponse){
                    if($resp == $reponse->getMd5() && $reponse->get_bonne() == Reponse::MAUVAISE_REPONSE){
                        $correcte = false;
                        break;
                    }
                }
            }
            if($correcte == true)
                $note += bareme / count($_POST); 

        }
        if($note < 0)
            $note = 0;
            echo  '<div class="container">';
            echo' <h1 class="text-center">Survey</h1>';
            echo' <div class="jumbotron text-center" >';
            echo '<br>';
        echo "Note: " . $note . "<br><br>";
        foreach($qcm->getAppreciations() as $app => $com){
            $range = explode ("-", $app); 
            if(intval($range[0]) <= $note && $note <= intval($range[1]) ){
                echo '<b>';
                echo $com ;
                echo '</b>';
                
                break;
            }
        }
        echo '<br><br>';
        foreach($qcm->get_question() as $q){
            
            echo "<div class=\"form-explication\">";
            echo $q->get_question() . "<br> Explications: " . $q->get_Explication(); 
            echo "</div>";
            echo'<hr>';
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
      
        
        
        
    }
?>
</body>
</html>