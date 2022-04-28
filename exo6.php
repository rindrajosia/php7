<?php
/***********************************************************
* Créez une fonction de validation d’une adresse HTTP ou FTP
* Le modèle doit répondre à la définition suivante :
1. Commencer par « www »
2. Suivi par des lettres puis éventuellement un point ou un tiret suivis d’un deuxième groupe de lettres
3. Se terminer par un point suivi de l’extension qui peut avoir de 2 à 4 caractères.
* Par exemple, les adresses www.machin.com ou www.machintruc.uk sont valides.

*/


function validhttp($ch){
  $modele = "/^w{3}\.([a-zA-Z0-9]+)(\.|-)?([a-zA-Z0-9]*)\.([a-z]{2,4}$)/";
  if (preg_match($modele, $ch)) {
    echo "$ch est valide <br />";
    return TRUE;
  } else {
    echo "$ch est invalide <br />";
    return FALSE;
  }
}

$url="www.laposte2.info";
$url2="www.pierre-plus-loin.info";
$url3="www.engels.funphp.com";
validhttp($url);
validhttp($url2);
validhttp($url3);



?>
