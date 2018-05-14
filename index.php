<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo php 2</title>
  </head>
  <body>
    <?php
//exercise 1
$age = 22;
if ($age >= 18){
echo "vous etes majeur";
}else echo "vous etes mineur";
echo "<br>";

//exercise 2
$age = 12;
$genre = "homme";
if ($age >= 18){
  echo ($genre == "femme") ? "Vous etes une femme majeure" : "vous etes un homme majeur";
}else{
  echo ($genre == "femme") ? "Vous etes une femme mineur" : "vous etes un homme mineur";
}
echo "<br>";

 //exercise 3
 $maVariable = "Homme";
if ($maVariable = "Homme") {
  echo "C'est un développeur !!!";
}else{
  echo "C'est une développeuse !!!";
}
echo "<br>";

//exercise 4
$monAge = 17;
if ($monAge >= 18){
  echo "T'es majeur";
}else{
  echo "T'es mineur";
    }
echo "<br>";

//exercise 5
$maVariable = false;
if ($maVariable = false){
  echo "c'est ok";
}else{
  echo "c'est pas bon";
}
echo "<br>";

//exercise 6
$maVariable = true;
if($maVariable){
  echo "ok";
}else{
  echo "pas bon";
     }
?>
