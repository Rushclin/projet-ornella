<?php
require 'Controlleurs/AcceuilController.php';
require 'Controlleurs/ErreurController.php';

class Routeur
{
    private $ctrlAcceuil;
    private $ctrlErreur;

    public function __construct()
    {
        $this->ctrlAcceuil = new AcceuilController();
        $this->ctrlErreur = new ErreurController();
    }

    public function routerRequet()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'acceuil') {
                    $this->ctrlAcceuil->acceuil();
                } else {
                    $this->ctrlErreur->erreur('Action non trouve');
                }
            }
        } catch (Exception $e) {
            $this->ctrlErreur->erreur($e->getMessage());
        }
    }
}
