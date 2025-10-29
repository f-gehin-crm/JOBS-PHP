<?php






define("TAUX1", 0.09); // Taux pour les revenus inférieurs à 15 000 euros
define("TAUX2", 0.14); // Taux pour les revenus supérieurs à 15 000 euros
define("SEUIL", 15000); // Seuil de revenu  
class Contribuable {
    private $nom;
    private $revenuAnnuel;

    public function __construct($nom, $revenuAnnuel) {
        $this->nom = $nom;
        $this->revenuAnnuel = $revenuAnnuel;
    }

    public function calculImpot() {
        if ($this->revenuAnnuel <= SEUIL) {
            return $this->revenuAnnuel * TAUX1;
        } else {
            $impotSeuil = SEUIL * TAUX1;
            $impotSup = ($this->revenuAnnuel - SEUIL) * TAUX2;
            return $impotSeuil + $impotSup;
        }
    }

    public function getNom() {
        return $this->nom;
    }
}
// Exemple d'utilisation

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

?>