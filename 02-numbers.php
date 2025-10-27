
<?php
/**
* Retourne la somme de deux entiers
* @param int $a le premier entier
* @param int $b le deuxième entier
* @return int la somme des deux entiers
* @param int $a le premier entier
* @param float $c le premier float
* @param float $d le deuxième float
* @return float le produit des deux floats
* @return float la division des deux floats
*/


// Addition et soustraction

$a = readline("Entrez un entier : ");
$b = readline("Entrez un entier : ");


function getSum(int $a, int $b) : int
{
    return $a + $b;
}

function getSub(int $a, int $b) : int
{
    return $a - $b;
}

// test de la fonction
echo "La somme de " . $a . " et de " . $b . " est de: " . getSum($a, $b) . PHP_EOL;
echo "La soustraction de " . $a . " et de " . $b . " est de: " . getSub($a, $b) . PHP_EOL;

// Multiplication et division
$c = readline("Entrez un nombre à virgule : ");
$d = readline("Entrez un nombre à virgule : ");
function getMul(float $c, float $d) : float
{
    return $c * $d;
}
function getDiv(float $c, float $d) : float

{
    if ($d == 0.0) {
        echo "Erreur : Division par zéro.".PHP_EOL;
        exit(1);
    }
    return $c / $d;
}
// test de la fonction
echo "Le produit de " . $c . " et de " . $d . " est de: " . getMul($c, $d) . PHP_EOL;
echo "La division de " . $c . " et de " . $d . " est de: " . getDiv($c, $d) . PHP_EOL;

?>