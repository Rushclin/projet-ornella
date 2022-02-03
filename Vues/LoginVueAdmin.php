<?php

require_once 'Config/Config.php';

class LoginVueAdmin
{
    private $titre;
    private $fichier;

    public function __construct($action)
    {
        $this->fichier = 'Vues/Admin/' . $action . '/Vue' . $action . '.php';
    }

    public function generer($donnees)
    {
        $contenu = $this->genererFichier($this->fichier, $donnees);
        $vue = $this->genererFichier('Vues/TemplateAdmin/appLogin.php', array('titre' => $this->titre, 'contenu' => $contenu));
        echo $vue;
    }

    public function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            extract($donnees);

            // Debut de la temporisation
            ob_start();

            require $fichier;

            // Fin et retour du contenu
            return ob_get_clean();
        } else {
            throw new Exception("Fichier " . $fichier . " Introuvable");
        }
    }
}
