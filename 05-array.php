<?php

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];

/**
 * Retourne le premier élément d'un tableau de chaînes de caractères
 * @param array $names Le tableau de chaînes de caractères
 * @return string|null Le premier élément du tableau ou null si le tableau est vide
 */

function firstItem(array $names) : ?string
{
    if (empty($names)) {
        return null;
    }
    return $names[0];
}
// Test de la fonction
$result = firstItem($names);
if ($result !== null) {
    echo "Le premier élément est : $result".PHP_EOL;
} else {
    echo "Le tableau est vide.".PHP_EOL;
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
 * Retourne le dernier élément d'un tableau de chaînes de caractères
 * @param array $names Le tableau de chaînes de caractères
 * @return string|null Le dernier élément du tableau ou null si le tableau est vide
 */
function lastItem(array $names) : ?string
{
    if (empty($names)) {
        return null;
    }
    return $names[count($names) - 1];
}
// Test de la fonction
$result = lastItem($names);
if ($result !== null) {
    echo "Le dernier élément est : $result".PHP_EOL;
} else {
    echo "Le tableau est vide.".PHP_EOL;
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
 * Retourne une chaîne de caractères contenant les éléments du tableau triés et séparés par des virgules
 * @param array $names Le tableau de chaînes de caractères
 * @return string La chaîne de caractères des éléments triés ou "Nothing to display" si le tableau est vide
 */
function stringItems(array $names) : string
{
    if (empty($names)) {
        return "Nothing to display";
    }
    sort($names, SORT_STRING);
    return implode(", ", $names);
}
// Test de la fonction
$result = stringItems($names);
echo "Les éléments triés sont : $result".PHP_EOL;

// demander si l'utilisateur veut quitter le programme
$quit = readline("Voulez-vous quitter le programme ? (oui/non) : ");    
if (strtolower($quit) === 'oui') {
    echo "Au revoir !".PHP_EOL;
    exit(0);
} else {
    echo "Continuons...".PHP_EOL;
}


//-------------------------------------------------------------------------------------------------------------//