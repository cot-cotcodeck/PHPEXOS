<?php
$age= 18.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex4</title>
</head>
<body>
  <p>
    <?php  if ($age>= 18) {
      echo 'Tu es majeur';
    }
    elseif ($age< 18) {
      echo 'Tu n\'es pas majeur';
    } ?>
  </p>
</body>
</html>
