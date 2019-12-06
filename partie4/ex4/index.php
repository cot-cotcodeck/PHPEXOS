<?php
$lastname = 'Aloïs';
$firstname = ' Scott';
$age = 24;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Ex 2</title>
</head>
<body>
    <?php
    function caracter($lastname , $firstname, $age){
      return $lastname . $firstname . $age;
    }?>
    <p> Bonjour <?= $lastname , $firstname ?>, tu as <?= $age ?> ans.</p>
</body>
</html>
