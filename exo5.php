<?php
/***********************************************************
* Effectuez une censure sur des textes en n’affichant pas ceux qui contiennent le mot zut.
*/

$modele = "/zut/";
$ch="Zut je me suis trompé";
if (preg_match($modele, strtolower($ch))) {
  echo $ch;
}

?>
