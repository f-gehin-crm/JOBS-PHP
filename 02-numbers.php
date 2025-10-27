
<?php
/**
* Retourne la somme de deux entiers
* @param int $a le premier entier
* @param int $b le deuxième entier
* @return int la somme des deux entiers
*/

$a = readline("Entrez un entier : ");
$b = readline("Entrez un entier : ");


function getSum(int $a, int $b) : int
{
    return $a + $b;
}
// test de la fonction
echo "La somme de " . $a . "et de" . $b . "est de: ".getSum($a, $b).PHP_EOL;  


?>