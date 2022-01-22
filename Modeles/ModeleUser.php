<?php

require_once 'Modeles/Modele.php';

class ModeleUser extends Modele
{
    public function getUser($login, $mdp)
    {
        $user = $this->executerRequete('SELECT * FROM user WHERE login_user = ? AND mdp_user = ?', array($login, $mdp));
        if ($user->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
