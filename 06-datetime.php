<?php

/** 
 * Fonctions de manipulation de dates simples
 * @param string $date la date au format 'Y-m-d'
 * @return string la date du jour au format 'd/m/Y'
 */
function getToday() : string
{
    $today = new DateTime();
    return $today->format('d/m/Y');
}
// Test de la fonction
echo "Date du jour : " . getToday() . PHP_EOL;  
//-------------------------------------------------------------------------------------------------------------//


/** 
 * Calcule le nombre de jours entre aujourd'hui et une date donnée
 */



//-------------------------------------------------------------------------------------------------------------//



/**---------------------BONUS---------------------------------------------------------------------------- */
/** 

 * Fonctions de manipulation de dates et d'heures
 * @param string $dateStr la chaîne de caractères représentant une date
 * @param string $format le format de la date
 * @param DateTime $date la date à formater
 * @param int $days le nombre de jours à ajouter ou soustraire
 * @return DateTime la date actuelle
 * @return DateTime la date après ajout ou soustraction de jours
 */     
function getCurrentDate() : DateTime
{
    return new DateTime();
}   
// Test de la fonction
$currentDate = getCurrentDate();
echo "Date actuelle : " . $currentDate->format('Y-m-d H:i:s') . PHP_EOL;    
//-------------------------------------------------------------------------------------------------------------//
/**
 * Formate une date selon le format spécifié
 * @param DateTime $date la date à formater
 * @param string $format le format de la date
 * @return string la date formatée
 */
function formatDate(DateTime $date, string $format) : string
{
    return $date->format($format);
}
// Test de la fonction
$formattedDate = formatDate($currentDate, 'd/m/Y');
echo "Date formatée : " . $formattedDate . PHP_EOL;
//-------------------------------------------------------------------------------------------------------------//
/**
 * Ajoute ou soustrait des jours à une date
 * @param DateTime $date la date de départ
 * @param int $days le nombre de jours à ajouter (positif) ou soustraire (négatif)
 * @return DateTime la date après ajout ou soustraction de jours
 */
function modifyDate(DateTime $date, int $days) : DateTime
{
    $interval = new DateInterval('P' . abs($days) . 'D');
    if ($days >= 0) {
        $date->add($interval);
    } else {
        $date->sub($interval);
    }
    return $date;
}
// Test de la fonction
$modifiedDate = modifyDate(clone $currentDate, 10);
echo "Date après ajout de 10 jours : " . $modifiedDate->format('Y-m-d') . PHP_EOL;
$modifiedDate = modifyDate(clone $currentDate, -5);
echo "Date après soustraction de 5 jours : " . $modifiedDate->format('Y-m-d') . PHP_EOL;
//-------------------------------------------------------------------------------------------------------------//
/**
 * Analyse une chaîne de caractères en une date
 * @param string $dateStr la chaîne de caractères représentant une date
 * @param string $format le format de la date
 * @return DateTime|null la date analysée ou null si l'analyse échoue
 */
function parseDate(string $dateStr, string $format) : ?DateTime
{
    $date = DateTime::createFromFormat($format, $dateStr);
    if ($date && $date->format($format) === $dateStr) {
        return $date;
    }
    return null;
}
// Test de la fonction      
$dateStr = '25/12/2024';
$parsedDate = parseDate($dateStr, 'd/m/Y');
if ($parsedDate !== null) {
    echo "Date analysée : " . $parsedDate->format('Y-m-d') . PHP_EOL;
} else {
    echo "Échec de l'analyse de la date." . PHP_EOL;
}






?>