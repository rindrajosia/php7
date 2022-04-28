<?php
/***********************************************************
* Créez une expression régulière pour valider un âge inférieur à 100 ans
*/


function valideAge($age){
  $modele = "/(^[0-9]?)([0-9]?)$/";
  if(preg_match($modele, $age)){
    echo "$age est valide ";
  }else{
    echo "$age est invalide";
  }
}

$age1 = 100;
$age2 = 10;
$age3 = 1;

valideAge($age1);
valideAge($age2);
valideAge($age3);


?>
