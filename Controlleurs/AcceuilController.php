<?php

require 'Vues/Vue.php';

class AcceuilController
{
    public function __construct()
    {
    }

    public function acceuil()
    {
        $vue = new Vue('Acceuil');
        $vue->generer(array());
    }
}
