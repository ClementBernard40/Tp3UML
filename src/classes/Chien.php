<?php 
class Chien extends Mammifere {

    protected $nbPattes;
    protected $couleurDuPelage;


    public function __construct($cri, $taille, $sexe, $lieuHabitation,$nbPattes,$couleurDuPelage) {
        parent::__construct($cri, $taille, $sexe, $lieuHabitation);
        $this->nbPattes = $nbPattes;
        $this->couleurDuPelage = $couleurDuPelage;


    }

    public function griffer() {
        echo "Le chat griffe.";
    }
    public function boire() {
        echo "Le chat boit.";
    }
    public function courrir() {
        echo "Le chat est en train de courrir.";
    }
}
?>