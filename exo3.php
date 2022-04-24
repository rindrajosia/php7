<?php
/***********************************************************
* Lisez les valeurs des variables du script de l’exercice 2 à l’aide du tableau $GLOBALS
*/
$x="PostgreSQL"; // => "PostgreSQL"
$y="MySQL"; // => "MySQL"
$z=&$x; // => "PostgreSQL"
$x="PHP 5"; // => "PHP 5"
$y=&$x; // => "PHP 5"
echo $z; // => "PHP 5"

$x_global = $GLOBALS["x"];
$y_global = $GLOBALS["y"];
$z_global = $GLOBALS["z"];

echo $x_global;
echo $y_global;
echo $z_global;

?>
