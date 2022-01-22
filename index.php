<?php

require_once 'Controlleurs/Routeur.php';

// Le routage pour bien diriger les requetes et parser l'URL correctement
$routeur = new Routeur();
$routeur->routerRequet();
