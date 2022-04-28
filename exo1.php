<?php
/***********************************************************
* Transformez une chaîne écrite dans des casses différentes
* afin que chaque mot ait une initiale en majuscule.
*/

$input = "Transformez une chAîne écrite dans des casses différentes afin que chaque mot ait une initiale en majuscule";

$output = ucwords(strtolower($input));
echo $output;
?>
