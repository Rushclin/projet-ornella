<?php

// Fichier de configuration de certaines valeurs

function getSpecialite()
{
    return array(
        'Biologie Animale',
        'Biologie Vegetale',
        'Informatique',
        'Physique',
        'Mathematiques',
        'Science de la terre',
        'Mecatronique',
        'Chimie'
    );
}

function getNiveau()
{
    return array(
        '1',
        '2',
        '3',
        '5'
    );
}

function getMatiere()
{
    return array(
        'Bio112 => Introduction a la biologie',
        'INF111 => Introduction aux algorithmes',
        'Meca111 => Mecanique applique a la physique',
    );
}

function getStatut()
{
    return array(
        'EN COURS',
        'NON FONDEE',
        'REJETE',
        'TRAITEES'
    );
}
