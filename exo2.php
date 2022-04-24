<?php
/***********************************************************
* Donnez les valeurs de $x, $y, $z à la fin du script suivant :
*/
$x="PostgreSQL"; // => "PostgreSQL"
$y="MySQL"; // => "MySQL"
$z=&$x; // => "PostgreSQL"
$x="PHP 5"; // => "PHP 5"
$y=&$x; // => "PHP 5"
echo $z; // => "PHP 5"
?>
