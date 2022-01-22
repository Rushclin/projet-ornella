<?php

require_once 'Vues/Vue.php';

class RequeteNoteController
{
    public function index()
    {
        $vue = new Vue('RequeteNote');
        $vue->generer(array());
    }

    public function create()
    {
    }
}
