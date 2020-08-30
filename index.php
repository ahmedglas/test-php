<?php

 include 'Qcm.php';
 include 'Question.php';
 include 'Reponse.php';





 $qcm = new Qcm();
print_r(qcm);
 $question1 = new Question('did you?');
 $question1->ajouterReponse(new Reponse('yes') );
 $question1->ajouterReponse(new Reponse('not yet',Reponse::BONNE_REPONSE));
 $question1->ajouterReponse(new Reponse(' no'));
$question1->set_Explications('explication test ');
$qcm->ajouterQuestion($question1);


echo $question1;





 /*
$question1 = new Question();
$question1-&gt;ajouterReponse(new Reponse(&#39;Des mielpops&#39;));
$question1-&gt;ajouterReponse(new Reponse(&#39;Des chocapics&#39;, Reponse::BONNE_REPONSE));
$question1-&gt;ajouterReponse(new Reponse(&#39;Des actimels&#39;));
$question1-&gt;setExplications(&#39;Et oui, la célèbre citation est « Et paf, ça fait des chocapics !
»&#39;);
$qcm-&gt;ajouterQuestion($question1);
 
$question2 = new Question(&#39;POO signifie&#39;);
$question2-&gt;ajouterReponse(new Reponse(&#39;Php Orienté Objet&#39;));
$question2-&gt;ajouterReponse(new Reponse(&#39;ProgrammatiOn Orientée&#39;));
$question2-&gt;ajouterReponse(new Reponse(&#39;Programmation Orientée Objet&#39;, Reponse::BONNE_REPONSE));
$question2-&gt;setExplications(&#39;Sans commentaires si vous avez eu faux :-°&#39;);
$qcm-&gt;ajouterQuestion($question2);
 
$qcm-&gt;setAppreciation(array(&#39;0-10&#39; =&gt; &#39;Pas top du tout ...&#39;,
                            &#39;10-20&#39; =&gt; &#39;Très bien ...&#39;));
$qcm-&gt;generer();

*/







?>
