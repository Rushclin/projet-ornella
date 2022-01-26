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
        if ($nom !== $_SESSION['USER']['ALL']['nom_et'] || $prenom !== $_SESSION['USER']['ALL']['prenom_et']) {
            $vue = new Vue('RequeteNote');
            $vue->generer(array('msg' => 'Le nom ou le prenom ne concorde pas avec le votre, veuillez bien verifer avant de continuer ', 'nom' => $nom, 'prenom' => $prenom, 'specialit' => $specialite, 'nivea' => $niveau, 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
        } else {
            $id = $_SESSION['USER']['ALL']['id_et'];
            $ajout = $this->modeleRequeteNote->add($id, $matiere, $session, $img);
            if ($ajout) {
                $vue = new Vue('Acceuil');
                $vue->generer(array('msg' => 'Votre requete a ete envoye avec succes'));
            } else {
                $vue = new Vue('RequeteNote');
                $vue->generer(array('msg' => 'Mauvaise insertion', 'nom' => $nom, 'prenom' => $prenom, 'specialit' => $specialite, 'nivea' => $niveau, 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
            }
        }
    }
}
