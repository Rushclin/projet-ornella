<?php

require_once 'Modeles/Modele.php';

class ModeleRequeteNote extends Modele
{
    /**
     * Fonction de creation d'une requet de note
     */
    public function add($id_et, $matiere, $session, $img)
    {
        $result = $this->executerRequete('INSERT INTO requete (id_req, id_et, date_req, matiere_req, img_req, session_req, statut_req) VALUES(NULL, ?, NOW(), ?, ?, ?, ?)', array($id_et, $matiere, $img, $session, 'EN COURS'));
        // $notifications = $this->executerRequete('INSERT INTO notifications (id_not, id_et, message_not, statut_not, date_not) VALUES(NULL, ?, ?, ?, NOW())', array($id_et, 'Requete envoyee', 'EN COURS'));
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

    public function getAllRequete()
    {
        $result = $this->executerRequete('SELECT * FROM requete WHERE date_traitement_req = "0000-00-00 00:00:00" ORDER BY id_req DESC', array());
        if ($result) {
            return $result;
        }
    }

    public function getOneRequete($id)
    {
        $result = $this->executerRequete('SELECT * FROM requete WHERE id_req = ?', array($id));
        if ($result) {
            return $result->fetch();
        }
    }

    public function updateRequetNoteWhitStatutAndReponse($reponse, $statut, $id, $id_et)
    {
        $result = $this->executerRequete('UPDATE requete SET statut_req = ?, reponse_req = ?, date_traitement_req = NOW() WHERE id_req = ?', array($statut, $reponse, $id));
        // $result = $this->dateBase()->query('UPDATE requete SET statut_req = $statut , reponse_req= $reponse WHERE id_req = $id');
        // $notifications = $this->executerRequete('UPDATE notifications SET message_not = ?, statut_not = ?, date_not = NOW() WHERE id_req = ? AND id_et = ?', array($reponse, $statut, $id, $id_et));
        if ($result) {
            return true;
        } else
            return false;
    }

    public function getRequeteTraite()
    {
        $result = $this->executerRequete('SELECT * FROM requete WHERE date_traitement_req != "0000-00-00 00:00:00"', array());
        if ($result)
            return $result;
    }

    public function getRequeteEnCours()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT * FROM requete WHERE statut_req = ? AND id_et = ?', array('EN COURS', $id));
        if ($result)
            return $result;
    }

    public function getRequeteNonFondee()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT * FROM requete WHERE statut_req = ? AND id_et = ?', array('NON FONDEE', $id));
        if ($result)
            return $result;
    }

    public function getRequeteTraitees()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT * FROM requete WHERE statut_req = ? AND id_et = ?', array('TRAITEES', $id));
        if ($result)
            return $result;
    }

    public function getRequeteRejetee()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT * FROM requete WHERE statut_req = ? AND id_et = ?', array('REJETE', $id));
        if ($result)
            return $result;
    }

    public function getRequetEmis()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT COUNT(*) FROM requete WHERE id_et = ?', array($id));
        if ($result)
            return $result;
    }

    public function getRequeteTraiteNbre()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT COUNT(*) FROM requete WHERE id_et = ? AND statut_req = ?', array($id, 'TRAITEES'));
        if ($result)
            return $result;
    }

    public function getRequeteRejeteNbre()
    {
        $id = $_SESSION['USER']['ALL']['id_et'];
        $result = $this->executerRequete('SELECT COUNT(*) FROM requete WHERE id_et = ? AND statut_req = ?', array($id, 'REJETE'));
        if ($result)
            return $result;
    }
}
