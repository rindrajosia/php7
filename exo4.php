<?php
/***********************************************************
* À partir de deux chaînes quelconques contenues dans des variables,
* effectuez une comparaison entre elles pour pouvoir les afficher
* en ordre alphabétique naturel.
*/
$ch1="alpha";
$ch2="Azéma";
if(strtolower($ch1)<strtolower($ch2)) echo $ch1 ," est avant ",
$ch2;
else echo $ch2 ," est avant ", $ch1;


?>
