<?php

require_once 'Modeles/Modele.php';

class ModeleUser extends Modele
{

    /**
     * Fonction de d'athentification d'un utilisateur
     */
    public function getUser($matricule, $email)
    {
        $user = $this->executerRequete('SELECT * FROM etudiant WHERE matricule_et = ? AND email_et = ?', array($matricule, $email));
        if ($user->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Fonction de recuperation de l'id d'un utilisateur
     */
    public function getInfoPlus()
    {
        $info = $this->executerRequete('SELECT id_et FROM etudiant', array())->fetch();
        return $info;
    }

    /**
     * Fonction de recuperation de toutes les infos sur un utilisateur
     */
    public function getAllInfo($mat, $email)
    {
        $info = $this->executerRequete('SELECT * from etudiant WHERE matricule_et = ? AND email_et = ?', array($mat, $email));
        if ($info->rowCount() == 1) {
            return $info->fetch();
        }
    }

    /**
     * Les fonctions relatives a l'administrateur
     */

    /**
     * Fonction d'authentification d'un administrateur
     */
    public function getAdmin($login, $mdp)
    {
        $admin = $this->executerRequete('SELECT * FROM administrateur WHERE username_admin = ? AND password_admin = ?', array($login, $mdp));
        if ($admin)
            return true;
        else
            return false;
    }

    /**
     * Reuperation des infos sur un administrateur
     */
    public function getAllInfoAdmin($login, $mdp)
    {
        $info = $this->executerRequete('SELECT * FROM administrateur WHERE username_administrateur = ? AND password_admin = ?', array($login, $mdp));
        if ($info->rowCount() == 1) {
            return $info->fetch();
        }
    }
}
