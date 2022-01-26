<?php

require_once 'Modeles/Modele.php';

class ModeleRequeteAutre extends Modele
{
    public function add($id_et, $objet, $corps, $session, $img)
    {
        $result = $this->executerRequete('INSERT INTO requete (id_req, id_et, date_req, session_req, objet_req, corps_req, img_req, statut_req) VALUES(NULL,?, NOW(), ?, ?, ?, ?, ?)', array($id_et, $session, $objet, $corps, $img, 'EN COURS'));
        if ($result)
            return true;
        else
            return false;
    }
}
