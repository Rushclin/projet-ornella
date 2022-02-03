<?php

require_once 'Vues/Vue.php';
require_once 'Modeles/ModeleRequeteAutre.php';

class RequeteAutreController
{

    private $mdeleRequetAutre;

    public function __construct()
    {
        $this->mdeleRequetAutre = new ModeleRequeteAutre();
    }
    public function index()
    {
        $vue = new Vue('RequeteAutre');
        $vue->generer(array('specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
    }

    public function create($objet, $corps, $session, $img, $nom, $prenom, $specialite, $niveau)
    {
        $id_et = $_SESSION['USER']['ALL']['id_et'];
        $ajout = $this->mdeleRequetAutre->add($id_et, $objet, $corps, $session, $img);
        if ($ajout) {
            $msg = "Requet envoye avec success";
            $vue = new Vue('RequeteAutre');
            $vue->generer(array('msg' => $msg, 'alert_type' => 'success', 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
        } else {
            $msg = "Echec d'enregistrement de la requete, veuillez recommencer";
            $vue = new Vue('RequeteNote');
            $vue->generer(array('msg' => $msg, 'alert_type' => 'danger', 'nom' => $nom, 'prenom' => $prenom, 'specialit' => $specialite, 'nivea' => $niveau, 'specialites' => getSpecialite(), 'niveaux' => getNiveau(), 'matieres' => getMatiere()));
        }
    }
}
