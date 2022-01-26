<?php

require_once 'Vues/Vue.php';
require_once 'Modeles/ModeleUser.php';
require_once 'Config/Values.php';
require_once 'Modeles/ModeleRequeteNote.php';

class RequeteNoteController
{
    private $user;
    private $modeleRequeteNote;

    public function __construct()
    {
        $this->user = new ModeleUser();
        $this->modeleRequeteNote = new ModeleRequeteNote();
    }

    public function index()
    {
        $vue = new Vue('RequeteNote');
        $vue->generer(array('specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
    }

    public function create($matiere, $session, $img, $nom, $prenom, $specialite, $niveau)
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $ajout = $this->modeleRequeteNote->add($id, $matiere, $session, $img);
        if ($ajout) {
            $msg = "Votre requete a bien ete pris en compte";
            $vue = new Vue('RequeteNote');
            $vue->generer(array('msg' => $msg, 'alert_type' => 'success', 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
        } else {
            $msg = "Echec d'enregistrement de la requete, veuillez recommencer";
            $vue = new Vue('RequeteNote');
            $vue->generer(array('msg' => $msg, 'alert_type' => 'danger', 'nom' => $nom, 'prenom' => $prenom, 'specialit' => $specialite, 'nivea' => $niveau, 'matier' => $matiere, 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
        }
    }
}
