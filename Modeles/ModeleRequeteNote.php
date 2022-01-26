<?php

require_once 'Modeles/Modele.php';

class ModeleRequeteNote extends Modele
{
    public function add($id_et, $matiere, $session, $img)
    {
        $result = $this->executerRequete('INSERT INTO requete (id_req, id_et, date_req, matiere_req, img_req, session_req) VALUES(NULL, ?, NOW(), ?, ?, ?)', array($id_et, $matiere, $img, $session));
        if ($result)
            return true;
        else
            return false;
    }
}
