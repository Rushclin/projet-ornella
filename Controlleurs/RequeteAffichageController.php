<?php

require_once 'Vues/Vue.php';
require_once 'Modeles/ModeleRequeteNote.php';

class RequeteAffichageController
{

    private $mdeleRequet;

    public function __construct()
    {
        $this->modeleRequet = new ModeleRequeteNote();
    }

    public function index()
    {
        $requetes = $this->modeleRequet->getRequeteAll();
        $statuts = $this->modeleRequet->getStatutRequete();
        $vue = new Vue('ListeRequeteAll');
        $vue->generer(array('requetes' => $requetes, 'statuts' => $statuts));
    }

    public function requeteEnCours()
    {
        $vue = new Vue('ListeRequeteEnCours');
        $vue->generer(array());
    }

    public function requeteNonFondee()
    {
        $vue = new Vue('ListeRequeteNonFondees');
        $vue->generer(array());
    }

    public function requeteTraitee()
    {
        $vue = new Vue('ListeRequeteTraitees');
        $vue->generer(array());
    }

    public function requeteRejetee()
    {
        $vue = new Vue('ListeRequeteRejetees');
        $vue->generer(array());
    }
}
