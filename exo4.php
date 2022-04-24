<?php
/***********************************************************
* Déterminez :
* le numéro de version de PHP,
* le nom du système d’exploitation de votre serveur
* la langue du navigateur du poste client.
*/
$os= PHP_OS;
$php_version= PHP_VERSION;
$langue= $_SERVER["HTTP_ACCEPT_LANGUAGE"];

echo $os;
echo $php_version;
echo $langue;

?>
