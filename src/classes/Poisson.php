<?php 
class Poisson extends Mammifere {

    protected $Nageoire;
    protected $couleurDesEcailles;


    public function __construct($cri, $taille,$sexe, $lieuHabitation, $Nageoire,$couleurDesEcailles) {
        parent::__construct($cri, $taille,$sexe, $lieuHabitation);
        $this->Nageoire = $Nageoire;
        $this->couleurDesEcailles = $couleurDesEcailles;

    }

    public function nager() {
        echo "Le poisson nage.";
    }
}
?>