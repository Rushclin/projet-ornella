<?php
require 'Controlleurs/AcceuilController.php';
require 'Controlleurs/ErreurController.php';
require 'Controlleurs/LoginController.php';
require 'Controlleurs/RequeteNoteController.php';
require 'Controlleurs/RequeteAutreController.php';
require 'Controlleurs/RequeteAffichageController.php';

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
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'acceuil') {
                    $this->ctrlAcceuil->acceuil();
                } else if ($_GET['action'] == 'login') {
                    $this->ctrlLogin->index();
                } else if ($_GET['action'] == 'login/connexion') {
                    $matricule = $this->getParametre($_POST, 'matricule');
                    $email = $this->getParametre($_POST, 'email');
                    $this->ctrlLogin->login($matricule, $email);
                } else if ($_GET['action'] == 'requete/note/post') {

                    $target = "Assets/images/justifications/" . basename($_FILES['file']['name']);
                    $img = $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $target);

                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $specialite = $this->getParametre($_POST, 'specialite');
                    $niveau = $this->getParametre($_POST, 'niveau');
                    $objet = $this->getParametre($_POST, 'objet');
                    $matiere = $this->getParametre($_POST, 'matiere');
                    $session = $this->getParametre($_POST, 'session');

                    $this->ctrlRequetNote->create($matiere, $session, $img, $nom, $prenom, $specialite, $niveau);
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
