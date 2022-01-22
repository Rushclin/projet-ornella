<?php
require 'Controlleurs/AcceuilController.php';
require 'Controlleurs/ErreurController.php';
require 'Controlleurs/LoginController.php';

class Routeur
{
    private $ctrlAcceuil;
    private $ctrlErreur;
    private $ctrlLogin;

    public function __construct()
    {
        $this->ctrlAcceuil = new AcceuilController();
        $this->ctrlErreur = new ErreurController();
        $this->ctrlLogin = new LoginController();
    }

    public function routerRequet()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'acceuil') {
                    $this->ctrlAcceuil->acceuil();
                } else if ($_GET['action'] == 'login') {
                    $this->ctrlLogin->index();
                } else if ($_GET['action'] == 'login/connexion') {
                    $login = $this->getParametre($_POST, 'login');
                    $mdp = $this->getParametre($_POST, 'password');
                    $this->ctrlLogin->login($login, $mdp);
                } else {
                    $this->ctrlErreur->erreur('Action non reconnue');
                }
            } else {
                $this->ctrlLogin->index();
            }
        } catch (Exception $e) {
            $this->ctrlErreur->erreur($e->getMessage());
        }
    }

    private function getParametre($tableau, $nom)
    {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        } else {
            throw new Exception("Parametre " . $nom . " est absent ");
        }
    }
}
