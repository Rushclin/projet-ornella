<?php

class ErreurController
{
    public function __construct()
    {
    }

    public function erreur($msg)
    {
        $vue = new Vue('Erreur');
        $vue->generer(array());
    }
}
