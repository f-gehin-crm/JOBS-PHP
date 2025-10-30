/ Seuil de revenu  
<?php
class Contribuable
{

    //attributs
    private string $nom;
    private float $revenuAnnuel;
    private  const TAUX1= 0.09;
    private  const TAUX2= 0.14;


    //propriétés
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setRevenu(float $_revenu): void
    {
        $this->revenuAnnuel = $_revenu;
    }


    public function __construct( string $_nom,float $_revenuAnnuel)
    {
        $this->nom= $_nom;
        $this->revenuAnnuel=$_revenuAnnuel;
    }

    public function calculImpot():float
    {
        if ($this->revenuAnnuel < 15000) {
            return $this->revenuAnnuel * self::TAUX1;
        } else {
    
            $impotSup = 15000*self::TAUX1 +  ($this->revenuAnnuel - 15000) * self::TAUX2;
            return $impotSup;
        }
    }
}