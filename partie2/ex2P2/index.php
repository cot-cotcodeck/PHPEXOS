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
    if ($age>= 18 and $gender= 'femme';) {
    echo 'Vous êtes une femme et vous êtes majeur.';
    }
    elseif ($age< 18) {
    echo 'Vous une femme et vous êtes mineur!';
    }
    ?>
  </p>
</body>
</html>
