# Variables, constantes et types

Dans cette branche, on définit les différents types de données manipulables avec PHP et
montre comment les utiliser en créant des variables ou des constantes.

## Memo des fonctions:
### divers constant (string $nom ) : 
#### Retourne la valeur de la constante dont le nom est contenu dans $nom.  

### boolean define(string nom_cte, valeur [,bool casse]) : 
#### Créer la constante "nom_cte" et lui attribut une valeur. Le parametre "casse" indique que le nom de la constante est:
#### insensible à la casse (TRUE) OU non (FALSE).

### boolean defined(string nom_cte) :
#### Retourne TRUE si la constante nom_cte existe ET False dans le cas contraire. 

### string gettype($nom_var) :
#### Retourne le type de la variable $nom_var.

### boolean empty(expression) :
#### Retourne TRUE si l'expression "n'est pas affectée ou a une des valeurs NULL, O et '0' " ET FALSE dans le cas contraire.

### boolean isset($nom_var) :
#### Retourne  TRUE si la variable $nom_var EXISTE et est DEFINIE avec une valeur différente de NULL.

### array get_defined_constants() :
#### Retourne un tableau contenant toutes les constantes prédéfinies et celles qui ont été créees dans le script. 

### array get_defined_constants() :
#### Retourne un tableau contenant toutes les constantes prédéfinies et celles qui ont été créees dans le script.

### boolean settype($var, string type) :  Effectue un transtypage de $var dans le type précisé.
#### Retourne TRUE si l'opération est réussie et False dans le cas contraire.

### boolean is_array($var) :
### boolean is_bool($var) :
### boolean is_double($var) : 
### boolean is_integer($var) :
### boolean is_null($var) : Retournent TRUE si la variable est du type testé ET FALSE dans le cas contraire.
### boolean is_object($var) :
### boolean is_resource($var) :
### boolean is_string($var) :
