<?php
$age = rand(0, 100);
//initialisation d'un tableau
$genderArray = array('Homme', 'Femme');
//random sur le tableau en fonction des index (0, 1)
$gender = $genderArray[rand(0, 1)];
//creation de le fonction compare
function compare($age, $gender){
  if($gender == 'Homme' && $age >= 18){
    //on stock nos message dans une variable $message car un seul return pour toute une fonction.
    $message = 'Vous êtes un homme et vous êtes majeur.';
  }elseif($gender == 'Homme' && $age < 18){
    $message = 'Vous êtes un homme et vous êtes mineur.';
  }elseif($gender == 'Femme' && $age >= 18){
    $message = 'Vous êtes une femme et vous êtes majeure.';
  }else{
    $message = 'Vous êtes une femme et vous êtes mineure.';
  }
  return $message;
  //on nous retourne le $message correspondant.
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
  <p><?= compare($age, $gender) ?></p>
  <p><?= $age ?></p>
  <p><?= $gender ?></p>
</body>
</html>
