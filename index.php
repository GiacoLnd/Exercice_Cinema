<h1>Exercice Cinema</h1>


<?php

spl_autoload_register(function ($class_name) {
    include 'classe/'.$class_name . '.php';
});



$ritchie=new Realisateur("Ritchie", "Guy", "Masculin", "1968-10-10");
$jordan=new Realisateur("Jordan", "Neil", "Masculin", "1950-02-25");

$pitt = new Acteur("Pitt", "Brad", "Masculin", "1963-12-18");
$cruise = new Acteur("Cruise", "Tom", "Masculin", "1962-07-03");
$statham = new Acteur("Statham", "Jason", "Masculin", "1967-07-26");

$sciFi= new Genre("Science-Fiction");
$action= new Genre("Action");
$horror= new Genre("Horreur");
$comedy= new Genre("Comedie");

$mickey = new Role("Mickey O'neil");
$turkish = new Role("Turkish");

$snatch = new Film("Snatch", "Franky vient de voler un énorme diamant qu'il doit livrer à Avi, un mafieux new-yorkais.<br> En chemin, il fait escale à Londres où il se laisse convaincre par Boris de parier sur un combat de boxe clandestin.", 2000, 120, $comedy, $ritchie);
$entretien = new Film("Entretien avec un vampire", "Le destin de trois vampires se retrouve mêlé pendant des siècles, alternant entre amour et trahison, solitude et soif de vengeance.", 1994, 123, $horror,$jordan);


$pittSnatch = new Casting ($pitt, $snatch, $mickey);
$stathamSnatch = new Casting ($statham, $snatch, $turkish);


echo $jordan -> filmoReal();   // Affiche la filmographie Réalisateur

echo $ritchie -> filmoReal(); // " Idem

echo $pitt->afficherCast(); // Affiche la filmographie Acteur

echo $snatch->afficherCast(); // affiche le casting d'un film (titre du film + role en fonction de l'acteur)

echo $comedy->afficherParGenre(); // affiche les films par genre donné

echo $pitt->getInfos(); // affiche les infos Acteurs + (bonus) affiche l'âge de l'acteur
echo $ritchie->getInfos(); // affiche les infos Réalisateur + (bonus) affiche l'âge du réalisateur

echo $snatch->getInfos(); // Afffiche les Infos du film




?>