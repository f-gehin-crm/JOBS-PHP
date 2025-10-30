<?php

// Exemple d'utilisation

require "model/Contribuable.php";

$item1 = readline("Entrez votre nom : ");
$item2 = (float)readline("Entrez votre revenu annuel en euros : ");

$contribuable = new Contribuable($item1, $item2);
$impot = $contribuable->calculImpot();
echo "Mr " . $contribuable->getNom() . ", votre impôt est
    de " . number_format($impot, 2) . " euros." . PHP_EOL;

//-------------------------------------------------------------------------------------------------------------//


/**
* @param string $dateStr la chaîne de caractères représentant une date
 * @param string $format le format de la date
 * @param DateTime $date la date à formater
 * @param int $days le nombre de jours à ajouter ou soustraire
 * @return DateTime la date actuelle
 * @return DateTime la date après ajout ou soustraction de jours
 */
