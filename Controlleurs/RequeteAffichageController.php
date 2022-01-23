<?php

require_once 'Vues/Vue.php';

class RequeteAffichageController
{

    public function index()
    {
        $vue = new Vue('ListeRequeteAll');
        $vue->generer(array());
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
