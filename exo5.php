<?php
/***********************************************************
* Donnez la valeur de chacune des variables pendant et à la fin du script suivant, et
* vérifiez l’évolution du type de ces variables :
*/

$x = "PHP7"; // => "PHP7"
$a[] = &$x; // => $a[0] = "PHP7"
$y = " 7e version de PHP"; // => " 7e version de PHP"
$z = $y*10; // => 70
$x .= $y; // => "PHP7 7e version de PHP"
$y *= $z; // => 490
$a[0]="MySQL"; // => $a[0] = "MySQL"

?>
