<?php

require_once 'Modeles/Modele.php';

class ModeleRequeteNote extends Modele
{
    public function add($id_et, $matiere, $session, $img)
    {
        $result = $this->executerRequete('INSERT INTO requete (id_req, id_et, date_req, matiere_req, img_req, session_req, statut_req) VALUES(NULL, ?, NOW(), ?, ?, ?, ?)', array($id_et, $matiere, $img, $session, 'EN COURS'));
        if ($result)
            return true;
        else
            return false;
    }

    // j'ecris une fois la fi=onction qui doit recuperer toutes les requetes que de passer par les deux controlleurs

    public function getRequeteAll()
    {
        $id_et = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT * FROM requete WHERE id_et = ? ORDER BY id_req ASC', array($id_et));
        if ($result)
            return $result;
    }

    public function getStatutRequete()
    {
        $result = $this->executerRequete('SELECT DISTINCT statut_req FROM requete', array());
        if ($result)
            return $result;
    }
}
