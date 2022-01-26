<?php

require_once 'Modeles/Modele.php';

class ModeleUser extends Modele
{
    public function getUser($matricule, $email)
    {
        $user = $this->executerRequete('SELECT * FROM etudiant WHERE matricule_et = ? AND email_et = ?', array($matricule, $email));
        if ($user->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getInfoPlus()
    {
        $info = $this->executerRequete('SELECT id_et FROM etudiant', array())->fetch();
        return $info;
    }

    public function getAllInfo($mat, $email)
    {
        $info = $this->executerRequete('SELECT * from etudiant WHERE matricule_et = ? AND email_et = ?', array($mat, $email));
        if ($info->rowCount() == 1) {
            return $info->fetch();
        }
    }
}
