<?php

require_once 'Vues/Vue.php';
class RequeteAutreController
{
    public function index()
    {
        $vue = new Vue('RequeteAutre');
        $vue->generer(array());
    }
}
