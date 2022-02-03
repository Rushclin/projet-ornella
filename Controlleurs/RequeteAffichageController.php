<?php

require_once 'Vues/Vue.php';
require_once 'Modeles/ModeleRequeteNote.php';

class RequeteAffichageController
{

    private $modeleRequet;

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
        $requetes = $this->modeleRequet->getRequeteEnCours();
        $vue = new Vue('ListeRequeteEnCours');
        $vue->generer(array('requetes' => $requetes));
    }

    public function requeteNonFondee()
    {
        $requetes = $this->modeleRequet->getRequeteNonFondee();
        $vue = new Vue('ListeRequeteNonFondees');
        $vue->generer(array('requetes' => $requetes));
    }

    public function requeteTraitee()
    {
        $requetes = $this->modeleRequet->getRequeteTraitees();
        $vue = new Vue('ListeRequeteTraitees');
        $vue->generer(array('requetes' => $requetes));
    }

    public function requeteRejetee()
    {
        $requetes = $this->modeleRequet->getRequeteRejetee();
        $vue = new Vue('ListeRequeteRejetees');
        $vue->generer(array('requetes' => $requetes));
    }
}
