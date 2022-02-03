<?php


/**
 * La classe qui doit gerer les erreurs lors de l'execution du code 
 */
class ErreurController
{
    public function erreur($msg)
    {
        $vue = new Vue('Erreur');
        $vue->generer(array());
    }
}
