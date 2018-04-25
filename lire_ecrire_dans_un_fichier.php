<?php

//ouverture et stockage du fichier à traiter
$monfichier = fopen('compteur.txt', 'r+');

// lecture et stockage de la ligne du fichier
//$ligne = fgets($monfichier);

$pagesvues = fgets($monofichier);   // lecture de la 1ère ligne
$pagesvues +=5;                     // on augmente de 1 le nb de fois où la page a été lue

fseek($monfichier, 0);              // réintialisation du curseur au début du fichier

fputs($monfichier, $pagesvues);     // écriture dans "monfichier" du "nb de pages vues"

// fonction de fermeture du fichier
fclose($monfichier);

echo '<p>cette page a été lue '.$pagesvues. 'fois</p>';