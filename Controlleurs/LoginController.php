<?php

require_once 'Modeles/ModeleUser.php';
require_once 'Vues/LoginVue.php';
require_once 'Vues/VueAdmin.php';
require_once 'Vues/LoginVueAdmin.php';

class LoginController
{

    private $modeleUser;

    /**
     * Le constructeur de la classe, a pour role d'initialiser ou d'instancier la classe ModeleUser
     */
    public function __construct()
    {
        $this->modeleUser = new ModeleUser();
    }

    /**
     * Fonction d'index, a pour role de generer la vue login, donc la vue de connexion 
     */
    public function index()
    {
        $vue = new LoginVue('Login');
        $vue->generer(array());
    }

    /**
     * La fonction login a pour role de connecter un utilisateur
     */
    public function login($login, $mdp)
    {
        if ($login == null || $mdp == null) {
            $msg = "Erreur !! les identifiants sont nulls ";
            $vue = new LoginVue('Login');
            $vue->generer(array('msg' => $msg, 'login' => $login));
        }

        $resultat = $this->modeleUser->getUser($login, $mdp);

        if ($resultat) {
            $_SESSION['USER']['ALL'] = $this->modeleUser->getAllInfo($login, $mdp);
            $vue = new Vue('Acceuil');
            $vue->generer(array());
        } else {
            $msg = "Erreur !! verifiez matricule ou le email ";
            $vue = new LoginVue('Login');
            $vue->generer(array('msg' => $msg, 'login' => $login, 'email' => $mdp));
        }
    }


    /**
     * Les differentes fonctions pour l'administrateur
     */


    /**
     *  Fonction de la page index de l'administrateur
     */
    public function indexAdmin()
    {
        $vue = new LoginVueAdmin('Login');
        $vue->generer(array());
    }

    /**
     * Fonction de connexion d'un administrateur
     */
    public function loginAdmin($login, $mdp)
    {
        if ($login == null || $mdp == null) {
            $msg = "Erreur !! les identifiants sont nulls ";
            $vue = new LoginVueAdmin('Login');
            $vue->generer(array('msg' => $msg, 'login' => $login));
        }

        $resultat = $this->modeleUser->getAdmin($login, $mdp);

        if ($resultat) {
            $vue = new VueAdmin('Acceuil');
            $vue->generer(array());
        } else {
            $vue = new VueAdmin('Login');
            $vue->generer(array('msg' => $msg, 'login' => $login));
        }
    }
}
