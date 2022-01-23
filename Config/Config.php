<?php

// Fonction de configuration genereal de l'application
/**
 * HOST     = Adresse du serveur sur lequel la base de donnees est heberge, par defaut localhost ou 127.0.0.1
 * USER     = nom d'utilisateur de la base de donnees, par defaur root
 * PASSWORD = not de passe pour acceder a la base de donnees
 * DATABASE = nom de la base de donnee est question
 * AUTHOR   = nom de la personne qui a developpe l'application
 * SCHOOL   = nom de l'institut ou de l'univesite. 
 * NB       = Ces parametres sont obligatoires pour que le site puisse fonctionner
 */

function config()
{
    return array(
        'HOST' => '127.0.0.1',
        'USER' => 'root',
        'PASSWORD' => '',
        'DATABASE' => 'projet-ornella',
        'AUTHOR' => 'ORNELLA DJEMO',
        'SCHOOL' => 'Institut Universitaire de la Cote (Douala)',
        'EMAIL' => 'ornelladj@gmail.com',
        'TITLE' => 'Gestion Scolaire',
    );
}
