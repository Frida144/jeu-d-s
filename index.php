<?php
require_once __DIR__ . '/Attributs/Des.php';
require_once __DIR__ . '/Attributs/Joueur.php';
require_once __DIR__ . '/Attributs/Partie.php';

$joueur1 = new Joueur("Alice", 0, new Des(6, 0));
$joueur2 = new Joueur("Bob", 0, new Des(6, 0));

$partie = new Partie($joueur1, $joueur2, 5, 0, 0);
$partie->lancerPartie();
