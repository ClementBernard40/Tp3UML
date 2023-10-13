<?php 
class Mammifere {
    protected $cri;
    protected $taille;
    protected $pattes;
    protected $couleurPelage;
    protected $sexe;
    protected $lieuHabitation;
    protected $placeAlimentaire;

    public function __construct($cri, $taille,  $sexe, $lieuHabitation) {
        $this->cri = $cri;
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->lieuHabitation = $lieuHabitation;
    }

    public function manger() {
        echo "Ce mammifère mange de la nourriture.";
    }

    public function crier() {
        echo "Ce mammifère émet un cri : {$this->cri}";
    }

    public function mordre() {
        echo "Ce mammifère vous mord.";
    }

    public function dormir() {
        echo "Ce mammifère s'est endormit";
    }
}
?>