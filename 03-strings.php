<?php 

/**
* A la recherche d'Einstein : Fonctions de manipulation de chaînes de caractères
* @param string $rep la chaîne de caractères de réponse
* @param string $sol le nom à trouver
* @param string $nom le nom de l'utilisateur
* @param string $prenom le prénom de l'utilisateur 


*/

$nom = readline("Entrez votre nom : ");
$prenom = readline("Entrez votre prénom : ");

$sol = "Einstein";
$rep = readline("Qui a développé la théorie de la relativité ? ");

function getMC2( string $rep, string $sol, string $nom, string $prenom) : void
{
    if (strtolower(trim($rep)) === strtolower($sol)) {
        echo "Félicitations $prenom $nom, vous avez trouvé la bonne réponse !".PHP_EOL;
    } else {
        echo "Désolé $prenom $nom, ce n'est pas la bonne réponse. La bonne réponse est $sol.".PHP_EOL;
    }
}

getMC2($rep, $sol, $nom, $prenom);

 exit(0);
?>










/* 
// Fonction pour inverser une chaîne de caractères
function reverseString(string $str) : string
{
    return strrev($str);
}

// Fonction pour convertir une chaîne en majuscules
function toUpperCase(string $str) : string
{
    return strtoupper($str);
}

// Fonction pour convertir une chaîne en minuscules
function toLowerCase(string $str) : string
{
    return strtolower($str);
}

// Fonction pour remplacer une sous-chaîne par une autre
function replaceString(string $str, string $search, string $replace) : string
{
    return str_replace($search, $replace, $str);
}

// Fonction pour vérifier si une chaîne contient une sous-chaîne
function containsString(string $str, string $search) : bool
{
    return strpos($str, $search) !== false;
}

// Fonction pour obtenir la longueur d'une chaîne
function getStringLength(string $str) : int
{
    return strlen($str);
}

// Fonction pour extraire une sous-chaîne
function substring(string $str, int $start, int $length) : string
{
    return substr($str, $start, $length);
}

// Fonction pour supprimer les espaces en début et fin de chaîne
function trimString(string $str) : string
{
    return trim($str);
}

// Fonction pour diviser une chaîne en tableau
function splitString(string $str, string $delimiter) : array
{
    return explode($delimiter, $str);
}

// Fonction pour joindre un tableau en chaîne
function joinStrings(array $strings, string $glue) : string
{
    return implode($glue, $strings);
}

*/
