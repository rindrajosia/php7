<?php
/***********************************************************
* En utilisant la fonction strlen(),
* écrivez une boucle qui affiche chaque lettre de la
* chaîne "PHP MySQL" sur une ligne différente
*/
$input = "PHP MySQL";
for($i = 0; $i < strlen($input); $i++){
  if($input[$i - 1] == " "){
    echo ("\n");
  }
  echo $input[$i];
}
?>
