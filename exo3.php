<?php
/***********************************************************
* Utilisez les fonctions adéquates afin que la chaîne
* <form action="script.php"> soit
* affichée telle quelle et non comme du code HTML.
*/
$x='<form action="script.php">';

echo htmlentities($x);

?>
