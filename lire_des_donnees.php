<?php

// on se connecte à mysql et on localise la table test_OCR
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test_OCR;charset=utf8', 'root', '');
}

// en cas d'erreur, on localise l'erreur et on innterromp le chargement pour eviter une visualisation
// et une "utilisation frauduleuse"
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video');

?>

