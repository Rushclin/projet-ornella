<?php

require 'Controlleurs/AcceuilController.php';
require 'Controlleurs/ErreurController.php';
require 'Controlleurs/LoginController.php';
require 'Controlleurs/RequeteNoteController.php';
require 'Controlleurs/RequeteAutreController.php';
require 'Controlleurs/RequeteAffichageController.php';

/**
 * 
 * La classe Routeur a pour but de router, parser les requet qui pqasse par l'URL du navigateur
 * 
 */

class Routeur
{
    private $ctrlAcceuil;
    private $ctrlErreur;
    private $ctrlLogin;
    private $ctrlRequetNote;
    private $ctrlRequetAutre;
    private $ctrlAffController;

    public function __construct()
    {
        $this->ctrlAcceuil = new AcceuilController();
        $this->ctrlErreur = new ErreurController();
        $this->ctrlLogin = new LoginController();
        $this->ctrlRequetNote = new RequeteNoteController();
        $this->ctrlRequetAutre = new RequeteAutreController();
        $this->ctrlAffController = new RequeteAffichageController();
    }

    public function routerRequet()
    {

        // La variable $_GET['action'] permet de recuperer l'URL et de la parser

        try {
            if (isset($_GET['action'])) {

                // Lorsque le parametre de la requete c'est acceuil
                if ($_GET['action'] == 'acceuil') {
                    $this->ctrlAcceuil->acceuil();

                    // Lorsque l'action c'est login, en fait c'est le login de l'utilisateur
                } else if ($_GET['action'] == 'login') {
                    $this->ctrlLogin->index();

                    // Lorsque l'actionc'est login/connexion, on suppose qu'il q deja remplis le formulaire
                } else if ($_GET['action'] == 'login/connexion') {

                    // On recupere donc ses identifiants de connexion
                    $matricule = $this->getParametre($_POST, 'matricule');
                    $email = $this->getParametre($_POST, 'email');
                    $this->ctrlLogin->login($matricule, $email);

                    // Lorsque l'action c'est de poster une requete de note => ajouter une requete
                } else if ($_GET['action'] == 'requete/note/post') {

                    // On recupere les champs necessaires et on appele la methode create du controlleur RequeteNote
                    $target = "Assets/images/justifications/" . basename($_FILES['file']['name']);
                    $img = $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $target);

                    // Recuperation des donnees necessaires
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $specialite = $this->getParametre($_POST, 'specialite');
                    $niveau = $this->getParametre($_POST, 'niveau');
                    $matiere = $this->getParametre($_POST, 'matiere');
                    $session = $this->getParametre($_POST, 'session');
                    $statuts = $this->getParametre($_POST, 'statut');

                    // Appel du controlleur
                    $this->ctrlRequetNote->create($matiere, $session, $img, $nom, $prenom, $specialite, $niveau, $statuts);

                    // Lorsque l'action est de poster une requete autre, Requete Autre, on suit le meme canevas qu'en haut
                } else if ($_GET['action'] == 'requete/autre/post') {

                    $target = "Assets/images/justifications/" . basename($_FILES['file']['name']);
                    $img = $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $target);

                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $specialite = $this->getParametre($_POST, 'specialite');
                    $niveau = $this->getParametre($_POST, 'niveau');
                    $objet = $_POST['objet'];
                    $corps = $_POST['corps'];
                    $session = $_POST['session'];

                    $this->ctrlRequetAutre->create($objet, $corps, $session, $img, $nom, $prenom, $specialite, $niveau);
                }

                // On commence a gerer le traitement de l'administrateur ici

                // Lorsque l'action de l'URL c'est admin, on affiche d'abord le formulaire
                else if ($_GET['action'] == 'admin') {
                    $this->ctrlLogin->indexAdmin();

                    // Ici il a rempli le formulaire et veux s'authentifier, on appele la fonction de son login
                } else if ($_GET['action'] == 'admin/login') {

                    $login = $this->getParametre($_POST, 'login');
                    $mdp = $this->getParametre($_POST, 'password');

                    $this->ctrlLogin->loginAdmin($login, $mdp);

                    // Ici il veut la liste des requete, on affiche la liste
                } else if ($_GET['action'] == 'admin/requete/note/all') {
                    $this->ctrlRequetNote->showAdminRequeteNote();

                    // Lorqu'il veut traiter une requete, on affiche d'abord la reque en elle meme sur une page 
                } else if ($_GET['action'] == 'admin/requete/note/traitement') {
                    $id = $_GET['id'];
                    $this->ctrlRequetNote->showOneRequete($id);

                    //Lorsque l'administrateur a deja remplie le formulaire pour traiter la requete et il soumet, on appele la fonction de mise a jour
                } else if ($_GET['action'] == 'admin/requete/note/traitement/post') {
                    $reponse = $this->getParametre($_POST, 'reponse');
                    $statut = $this->getParametre($_POST, 'statut');
                    $id = $this->getParametre($_GET, 'id');
                    $id_et = 1;
                    $this->ctrlRequetNote->updateRequete($reponse, $statut, $id, $id_et);
                } else if ($_GET['action'] == 'admin/requete/liste') {
                    $this->ctrlRequetNote->showRequeteTraite();
                } else if ($_GET['action'] == 'requete/note') {
                    $this->ctrlRequetNote->index();
                } else if ($_GET['action'] == 'requete/autre') {
                    $this->ctrlRequetAutre->index();
                } else if ($_GET['action'] == 'requete/liste/all') {
                    $this->ctrlAffController->index();
                } else if ($_GET['action'] == 'requete/liste/encours') {
                    $this->ctrlAffController->requeteEnCours();
                } else if ($_GET['action'] == 'requete/liste/nonfondees') {
                    $this->ctrlAffController->requeteNonFondee();
                } else if ($_GET['action'] == 'requete/liste/traitees') {
                    $this->ctrlAffController->requeteTraitee();
                } else if ($_GET['action'] == 'requete/liste/rejetees') {
                    $this->ctrlAffController->requeteRejetee();
                } else {
                    $this->ctrlErreur->erreur('Action non reconnue');
                }
            } else {
                $this->ctrlLogin->index();
            }

            // Lorsque l'URL est mal entre, on leve une exception et on affiche la page 404

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
