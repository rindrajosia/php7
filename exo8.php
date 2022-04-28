<?php
/***********************************************************
* Dans la chaîne PHP \n est meilleur \n que ASP \n et JSP \n réunis, remplacez les
* caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une
* expression régulière)
*/


function remplacez($str){
  $search = "/\n/";
  $replace = "<br />";
  echo preg_replace($search, $replace, $str);
}


$str = "PHP \n est meilleur \n que ASP \n et JSP \n réunis";

remplacez($str);

$search = "\n";
$replace = "<br />";

echo str_ireplace ($search, $replace, $str);


?>
