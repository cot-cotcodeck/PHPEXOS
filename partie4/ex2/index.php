<?php
// Je défénis deux variables boubou et bibou qui desservent respectivement les chaînes 'pilou' et 'tout doux'.
$boubou = 'Pilou';
$bibou = ' tout doux';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
  <p>
    <!-- Déclaration d'une fonction chouchou qui comprend les varaiables boubou et bibou et qui va renvoyer les chaînes de ces deux variables. -->
    <?php
    function chouchou($boubou , $bibou){
      return $boubou . $bibou;
    }
    // J'appelle la fonction chouchou grâce à la fonction echo.
    echo chouchou($boubou , $bibou);
    ?>
  </p>
</body>
</html>
