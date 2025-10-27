<?php
/**
 * Vérifie si une personne est majeure
 * @param int $age L'âge de la personne
 * @param int $agelegal L'âge légal de la majorité
 * @param int $ageMickel
 * @param string $pays Le pays de la personne
 * @return bool true si majeur, false sinon
 */

$pays = readline("Entrez votre pays : ");
$agelegal = readline("Entrez l'âge légal de la majorité dans votre pays : ");

function isMajor(int $age, int $agelegal  ) : bool
{
    if ($age >= $agelegal) {
        return true;
    } else {
        return false;
    }
    // Alternativement, on peut écrire simplement :
    // return $age >= $agelegal;
}      

// Test de la fonction
$age = readline("Entrez votre âge : ");
if (isMajor($age, $agelegal)) {
    echo "Vous êtes majeur.".PHP_EOL;
} else {
    echo "Vous êtes mineur.".PHP_EOL;
}

//fonction pour vérifier si la personne et plus âgée que Mickel
$ageMickel = 30;
function isOlderThanMickel(int $age, int $ageMickel) : bool
{
    return $age > $ageMickel;
}       
// Test de la fonction
if (isOlderThanMickel($age, $ageMickel)) {
    echo "Vous êtes plus âgé que Mickel.".PHP_EOL;
} else {
    echo "Vous êtes moins âgé que Mickel. La retraite est encore loin...".PHP_EOL;
}           
      

// demander si l'utilisateur veut quitter le programme
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");    
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}

//-------------------------------------------------------------------------------------------------------------//

/**
 * Calcule les années restantes avant la retraite ou les années depuis la retraite
 * @param int $age L'âge de la personne
 * @return string Le message indiquant les années restantes ou dépassées avant la retraite
 * @param int $ageRetraite L'âge de la retraite
 */

$ageRetraite = readline("Entrez l'âge de la retraite : ");

function getRetired(int $age, int $ageRetraite) : string
{
   
    if ($age < $ageRetraite) {
        $anneesRestantes = $ageRetraite - $age;
        return "Il vous reste $anneesRestantes années avant la retraite.";
    } else {
        $anneesDepassees = $age - $ageRetraite;
        return "Vous êtes en retraite depuis $anneesDepassees années.";
    }
}

// Test de la fonction
echo getRetired($age, $ageRetraite).PHP_EOL;      

// demander si l'utilisateur veut quitter le programme
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");    
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}


//-------------------------------------------------------------------------------------------------------------//

/**
 * Trouve le maximum entre trois nombres à virgule
 * @param float $num1 Le premier nombre à virgule
 * @param float $num2 Le deuxième nombre à virgule
 * @param float $num3 Le troisième nombre à virgule
 * @return float Le maximum arrondi à trois décimales, ou 0.0 si deux nombres ou plus sont égaux
 */

//fonction pour trouver le maximum entre trois nombres à virgule

function getMax(float $num1, float $num2, float $num3) : float
{
    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        return 0.0;
    }
    
    $max = max($num1, $num2, $num3);
    return round($max, 3);
}       
// Test de la fonction
$num1 = readline("Entrez le premier nombre à virgule : ");
$num2 = readline("Entrez le deuxième nombre à virgule : ");
$num3 = readline("Entrez le troisième nombre à virgule : ");

echo getMax($num1, $num2, $num3).PHP_EOL;


// demander si l'utilisateur veut quitter le programme
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");    
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}

//-------------------------------------------------------------------------------------------------------------//

/**
 * Retourne la capitale d'un pays donné
 * @param string $pays2 Le nom du pays
 * @return string Le nom de la capitale ou "Capitale inconnue" si le pays n'est pas dans la liste
 */
//fonction pour retourner la capitale d'un pays donné

$pays2 = readline("Entrez le nom d'un pays (France, Allemagne, Italie, Maroc, Espagne, Portugal, Angleterre) : ");

function capitalCity(string $pays2) : string
{
    switch (strtolower($pays2)) {
        case 'france':
            return 'Paris';
            break;
        case 'allemagne':
            return 'Berlin';
            break;
        case 'italie':
            return 'Rome';
            break;
        case 'maroc':
            return 'Rabat';
            break;
        case 'espagne':
            return 'Madrid';
            break;
        case 'portugal':
            return 'Lisbonne';
            break;
        case 'angleterre':
            return 'Londres';
            break;
        default:
            return 'Capitale inconnue';
    }
}           
// Test de la fonction
echo "La capitale de $pays2 est : " . capitalCity($pays2) . PHP_EOL;

continueProgram($quit);
//-------------------------------------------------------------------------------------------------------------//
/**
 * Vérifie si une année est bissextile
 * @param int $year L'année à vérifier
 * @return bool true si bissextile, false sinon
 */ 
$year = readline("Entrez une année : ");        
function isLeapYear(int $year) : bool
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}
// Test de la fonction
if (isLeapYear($year)) {
    echo "$year est une année bissextile.".PHP_EOL;
} else {
    echo "$year n'est pas une année bissextile.".PHP_EOL;
}

// demander si l'utilisateur veut quitter le programme
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");    
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}
//-------------------------------------------------------------------------------------------------------------//

/**
 * Gère la continuation ou la fin du programme en fonction de l'entrée utilisateur
 * @param string $quit La réponse de l'utilisateur (oui/non)
 * @return void
 */
function  continueProgram($quit) : void
{   
    if (strtolower($quit) === 'oui') {
        echo "Au revoir !".PHP_EOL;
        exit(0);
    } else
{
    echo "Continuons...".PHP_EOL;
}}
// Test de la fonction  
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}
?>