<h1>Exercice Cinema</h1>


<?php

spl_autoload_register(function ($class_name) {
    include 'classe/'.$class_name . '.php';
});



$pitt = new Acteur("Pitt", "Brad", "Masculin", "1963-12-18");
$snatch = new Film("Snatch", "Franky vient de voler un énorme diamant qu'il doit livrer à Avi, un mafieux new-yorkais.<br> En chemin, il fait escale à Londres où il se laisse convaincre par Boris de parier sur un combat de boxe clandestin.", 2000, 120, $pitt);
$entretien = new FIlm("Entretien avec un vampire", "Le destin de trois vampires se retrouve mêlé pendant des siècles, alternant entre amour et trahison, solitude et soif de vengeance.", 1994, 123, $pitt);
echo $pitt -> filmoActeur() 

?>