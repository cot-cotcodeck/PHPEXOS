<?php
$arrayName = array('Janvier',
'Février',
'Mars',
'Avril',
'Mai',
'Juin',
'Juillet'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Ex3p3</title>
  </head>
  <body>
    <p>
    <?php
    foreach ($arrayName as $element){
      echo $element . ;
    } ?>
    </p>
  </body>
</html>
