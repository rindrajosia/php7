# Les chaînes de caractères

Cette branche, traite de la création et de la manipulation des chaînes de caractères. Il
décrit les différentes techniques d’affichage, simple ou formaté, des chaînes et
présente l’écriture d’expressions régulières

## Memo des fonctions:
*  string addslashes (string $str) :
#### Ajoute des antislashs dans une chaine.


*  string stripslashes (string $str) :
#### Supprime les antislashs dans une chaine et retourne la chaine nettoyée.   


*  string quotemeta (string $str) :
#### Echappe les caractères ., \, +, *, ?, [, ], (, ), $ et ^.


*  string html_entity_decode (string $ch, int CTE[, string charset]) :
#### Convertit toutes les entités HTML en caractères normaux.


*  string htmlentities (string string, int quote_style, string charset) :
#### Convertit tous les caractères en entités HTML.


*  string htmlspecialchars (string string, int quote_style, string charset) :
#### Convertit les caractères spéciaux en entités HTML.


*  string strip_tags (string $ch [, string $liste]) :
#### Supprime les balises HTML et PHP d'une chaine, sauf celles qui sont contenues dans la chaine $liste.


*  string nl2br (string $ch) :
#### Remplace les sauts de ligne \n par l'élément HTML <br />.


*  string crypt (string $ch [, string $sel]) :
#### Crypte la chaîne $ch à l'aide de $sel.


*  string str_pad (string $input, int $pad_length, string $pad_string, int $pad_type) :
#### Complète une chaine jusqu'à une taille donnée.


*  string chunk_split (string $ch, int N, string $fin) :
#### Scinde une chaine en introduisant la chaine $fin tous les N caractères.


*  string str_split (string $sh [, int N]) :
#### Convertit une chaine de caractère en tableau dont chaque élément a N caractères (1 par defaut).


*  array explode (string $sep, string $ch [, int N]) :
#### Transforme une chaine en tableau indicé d'au maximum N éléments en utilisant le caractère $sep comme critère de coupure.


*  string implode (string $sep, array $tab) :
#### Réunit tous les éléments d'un tableau dans une chaîne en les sépeant par le caractère $sep.


*  int ord (string $ch) :
#### Retourne le code ASCII du caractère $ch.


*  string chr (int $code) :
#### Retourne le caractère à partie du $code.


*  string trim (string $ch [, string $liste]) :
#### Supprime tous les caractères d'espace en debut et en fin de chaine ou seulement ceux qui sont listés dans $liste.


*  string rtrim (string $ch [, string $liste]) :
#### Supprime tous les caractères d'espace en debut de chaine ou seulement ceux qui sont listés dans $liste.


*  string ltrim (string $ch [, string $liste]) :
#### Supprime tous les caractères d'espace en fin de chaine ou seulement ceux qui sont listés dans $liste.


*  int similar_text (string $ch1, string $ch2 [, $pourcent]) :
#### Calcule la similatrité de deux chaînes en nombre de caractères ou en pourcentage retourné dans la variable $pourcent.


*  string str_ireplace (mixed $search, mixed $replace, mixed $subject, int $count) :
#### Remplace toutes les occurences de $search par $replace dans une chaine $subject. Le nombre de remplacement est contenue dans $count (insesible à la casse).


*  string str_replace (mixed $search, mixed $replace, mixed $subject, int $count) :
#### Remplace toutes les occurences de $search par $replace dans une chaine $subject. Le nombre de remplacement est contenue dans $count (sesible à la casse).


* string strtr(string $ch, string $liste1 , string liste2)
### Remplace les caractères de $liste1 par ceux de $liste2 dans une chaîne $ch.


*  string str_repeat (string $input, int $multiplier) :
#### Répète une chaine.


*  string str_shuffle (string $input) :
#### Mélange aléatoirement les caractères d'une chaine de $input.


* int strspn(string $ch, string $ch2, int start , int length)
### Trouve le premier segment d’une chaîne.


*  string strpos (string $string, string $input [, int N]) :
#### Retourne la position du premier caractère de la première occurence d'une sous-chaine $input dans $string ou FALSE si $input ne figure pas dans $string.


*  string stripos (string $string, string $input [, int N]) :
#### Versinon insesible à la casse de strpos.


* string strstr(string $ch, string $ch2)
#### Recherche la première occurrence dans une chaîne $ch2 dans $ch et retourne tous les caractères de $ch2 compris à la fin de la chaîne $ch.


* string stristr(string $ch, string $ch2)
#### Version insensible a la casse de strstr.


* string strrchr(string $ch, char needle)
### Trouve la dernière occurrence d’un caractère dans une chaîne.


* int strlen(string $ch)
#### Retourne la taille d’une chaîne.


* int substr_count(string $ch, string $ch)
#### Retourne le nombre d’occurrences de $ch2 dans la chaîne $ch.


* string substr(string $ch, int ind , int N)
#### Retourne la chaîne contenant N caractères de $ch extraits à partir de l’indice ind. Si le paramètre N est omis, retourne la sous-chaîne comprise entre l’indice ind et la fin de $ch.


* string wordwrap(string $ch [, int N [, string car [, boolean coupe]]])
### Réalise la césure de $ch tous les N caractères. car contient la chaîne à insérer dans $ch tous les N caractères. Le paramètre booléen coupe, s’il vaut TRUE, permet d’effectuer une césure des mots dont la longueur dépasse N caractères.


* string strrev(string $ch)
### Inverse une chaîne.
