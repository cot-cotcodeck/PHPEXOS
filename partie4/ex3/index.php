<?php
// Je définis deux variables $n1 et $n2 qui desservent respectivement les nombres 19 et 27.
$n1 = 19;
$n2 = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Ex3</title>
</head>
<body>
  <p>
    <!-- exo fail :@ -->
  <?php
  function compare($n1, $n2) {
    if ($n1 > $n2){
    $result ='Le premier nombre est plus grand.'}
    elseif ($n1 >$n2)
    $result = 'Le premier nombre est plus petit.'
    else { $result = 'Les deux nombres sont identiques.'}
  }
  echo $result;
  ?>
</p>
</body>
</html>
