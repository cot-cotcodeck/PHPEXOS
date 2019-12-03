<?php
$gender='homme';
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
  <p>
    <?php
    if ($gender='homme') {
      echo 'c \'est un développeur';
    }
    elseif ($gender= 'femme') {
      echo 'c\'est une développeuse';
    }
    ?>
  </p>
</body>
</html>
