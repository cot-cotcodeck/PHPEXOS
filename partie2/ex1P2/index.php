<?php
// Je définis une variable âge à 18 ans.
$age = 18;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Ex1p2</title>
  </head>
  <body>
<p>
<?php
/* Ici se trouve les conditions de ma variable. Si l'âge est supérieur à 18,
la fonction echo vous êtes majeur apparaîtra. Si l'âge est inférieur à 18 ans, la fonction echo
le signalera également par un "vousêtes mineur!";*/
if ($age>=18) {
  echo 'vous êtes majeur!';
}
else{
  echo 'vous êtes mineur!';
}
 ?>
</p>
  </body>
</html>
