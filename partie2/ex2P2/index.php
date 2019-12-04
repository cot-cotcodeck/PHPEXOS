<?php
$age= 18;
$gender= 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex2p2</title>
</head>
<body>
  <p>
    <?php
    if($age > 0 && $age < 100){
      if ($age>=18 && $gender='homme') {?>
        Vous êtes un homme et vous êtes majeur.
      <?php  }
      elseif ($age<18 && $gender='homme') {?>
        Vous êtes un homme et vous êtes mineur.;
      <?php  }
      elseif ($age>= 18 && $gender= 'femme'){?>
        Vous êtes une femme et vous êtes majeure.
        <?php}
        elseif ($age< 18 && $gender= 'femme') {?>
          Vous une femme et vous êtes mineure.
          <?php}
        }
        else {?>
          Age non valide !
          <?php}?>
        <?php else {?> Erreur: le genre n'est pas valide ! <?php}?>
        </p>
      </body>
      </html>
