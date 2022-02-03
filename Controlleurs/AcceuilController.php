<?php

require 'Vues/Vue.php';
require_once 'Modeles/ModeleRequeteNote.php';

class AcceuilController
{
    private $modeleRequeteNote;

    public function __construct()
    {
        $this->modeleRequeteNote = new ModeleRequeteNote();
    }

    public function acceuil()
    {
        $nbreEmis = $this->modeleRequeteNote->getRequetEmis();
        $nbreTaite = $this->modeleRequeteNote->getRequeteTraiteNbre();
        $nbreRejete = $this->modeleRequeteNote->getRequeteRejeteNbre();
        $vue = new Vue('Acceuil');
        $vue->generer(array('nbreEmis' => $nbreEmis, 'nbreTraite' => $nbreTaite, 'nbreRejete' => $nbreRejete));
    }
}
