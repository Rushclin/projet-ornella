<?php

require_once 'Config/Config.php';

class Modele
{
    private $bd;

    public function executerRequete($sql, $params)
    {
        if ($params == null) {
            $resultat = $this->getDB()->query($sql);
        } else {
            $resultat = $this->getDB()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getDB()
    {
        if ($this->bd == null) {
            $this->bd = new PDO('mysql:host=' . config()['HOST'] . ';dbname=' . config()['DATABASE'], config()['USER'], config()['PASSWORD']);
        }
        return $this->bd;
    }
}
