<h1>Exercice Cinema</h1>


<?php

spl_autoload_register(function ($class_name) {
    include 'classe/'.$class_name . '.php';
});


// REALISATEURS-------------------------------------
$ritchie=new Realisateur("Ritchie", "Guy", "Masculin", "1968-10-10");
$jordan=new Realisateur("Jordan", "Neil", "Masculin", "1950-02-25");
$veber= new Realisateur("Veber", "Francis", "Masculin", "1937-07-28");


// ACTEURS----------------
$pitt = new Acteur("Pitt", "Brad", "Masculin", "1963-12-18");
$cruise = new Acteur("Cruise", "Tom", "Masculin", "1962-07-03");
$statham = new Acteur("Statham", "Jason", "Masculin", "1967-07-26");
$richard = new Acteur("Richard", "Pierre", "Masculin", "1934-08-16");
$villeret = new Acteur("Villeret", "Jacques", "Masculin", "1951-01-28");
$auteuil = new Acteur("Auteuil", "Daniel", "Masculin", "1950-01-24");



// GENRE-------------
$sciFi= new Genre("Science-Fiction");
$action= new Genre("Action");
$horror= new Genre("Horreur");
$comedy= new Genre("Comedie");



// ROLE---------------
$mickey = new Role("Mickey O'neil");
$turkish = new Role("Turkish");
$pignon = new Role("François Pignon");


// FILMS--------------------
$snatch = new Film("Snatch", "Franky vient de voler un énorme diamant qu'il doit livrer à Avi, un mafieux new-yorkais.<br> En chemin, il fait escale à Londres où il se laisse convaincre par Boris de parier sur un combat de boxe clandestin.", 2000, 120, $comedy, $ritchie);
$entretien = new Film("Entretien avec un vampire", "Le destin de trois vampires se retrouve mêlé pendant des siècles, alternant entre amour et trahison, solitude et soif de vengeance.", 1994, 123, $horror,$jordan);
$comperes = new Film("Les Compères", "Tristan, un jeune homme de 17 ans, fait une fugue avec sa petite amie. Devant la passivité de la police et de son mari Paul ne faisant pas assez d'efforts pour le retrouver, sa mère Christine décide de faire appel à 2 anciens amants avec qui elle a eu une aventure 17 ans plus tôt pour qu'ils recherchent son fils.", 1983, 89, $comedy, $veber);
$diner = new Film("Le Diner De Cons", "Pierre Brochant, célèbre éditeur parisien, organise chaque mercredi avec des amis un « dîner de cons » : chaque organisateur amène avec lui un « con », intarissable sur un sujet précis, qu'il a déniché au hasard.", 1998, 80, $comedy, $veber);
$placard = new Film("Le Placard", "François Pignon, un homme au costume sombre et à l'allure discrète, est comptable dans une usine de caoutchouc, dont le secteur privilégié est le préservatif. Il est sur le point d'être licencié, lorsque sur les conseils de Belon, son voisin d'immeuble, il propage la rumeur selon laquelle il est homosexuel. Suite à ce faux coming out, les cadres de la direction décident de garder Pignon pour des raisons politiquement correctes.", 2001, 84, $comedy, $veber);


// CASTING------------------------------
$pittSnatch = new Casting ($pitt, $snatch, $mickey);
$stathamSnatch = new Casting ($statham, $snatch, $turkish);
$richardPignon = New Casting ($richard, $comperes, $pignon);
$jacquesPignon = New Casting ($villeret, $diner, $pignon);
$danielPignon = New Casting ($auteuil, $placard, $pignon);



// FONCTIONS---------------------------------
echo $jordan -> filmoReal();   // Affiche la filmographie Réalisateur

echo $ritchie -> filmoReal(); // " Idem

echo $pitt->afficherCast(); // Affiche la filmographie Acteur

echo $snatch->afficherCast(); // affiche le casting d'un film (titre du film + role en fonction de l'acteur)

echo $comedy->afficherParGenre(); // affiche les films par genre donné

echo $pitt->getInfos(); // affiche les infos Acteurs + (bonus) affiche l'âge de l'acteur
echo $ritchie->getInfos(); // affiche les infos Réalisateur + (bonus) affiche l'âge du réalisateur

echo $snatch->getInfos(); // Afffiche les Infos du film

echo $pignon->afficherCast();   // Affiche le même rôle incarné par différents acteurs dans différents films 
                                // François Pignon -> Les compères (Pierre Richard) , Le diner de cons (Jacques Villeret) et le placard (Daniel Auteuil)



?>