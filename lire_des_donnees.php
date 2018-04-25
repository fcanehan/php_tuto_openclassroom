<?php


// REQUETES 



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

// FORMAT query

// demande "1" de connexion dans mysql pour retourner toutes (*) les infos dans  la requete
//$reponse = $bdd->query('SELECT * FROM jeux_video');


//nuvelle demande "2"  avec filtres supplementaires : nom + console dont  le possesseur = 'michel'
//$reponse = $bdd->query('SELECT nom , console FROM jeux_video WHERE  console=\'NES\' AND possesseur= \'Michel\' LIMIT 0,1'); 


// derniere requete "3" melange des filtes
//$reponse = $bdd->query('SELECT nom, possesseur, console, prix FROM jeux_video WHERE console=\'Xbox\' OR console=\'PS2\' ORDER BY prix DESC LIMIT 0,10');


// FORMAT prepare + execute

// requete "4" 
$req = $bdd->prepare('SELECT nom, possesseur FROM jeux_video WHERE console= ?');
$req ->execute(array($_GET['console']));


// AFFICHAGE

// on boucle dans $response pour isoler chaque entree
// boucle while car la taille du tableau est inconnue
// lorsque repnse a transmis toutes ses donnees a "donnees", la condition devient fausse et la boucle s arrete


while ($donnees = $req ->fetch()){

    
    
    
//traitement des données 
    
    
?>
<!--  requete "1"
<p> jeu : <?php echo $donnees['nom']?> pour <?php echo $donnees ['console']?> vendu par <?php echo $donnees['possesseur']?> à <?php echo $donnees['prix']?> euros</p>
    -->

<!--requete "2" 
    presentation de la 2eme requete 
<p> <?php echo $donnees['nom']?> pour <?php echo $donnees['console']?> <!--de <?php echo $donnees['possesseur']?> </p> -->

    
<!--requete "3"
    presentation de la 3eme requete
    <p> <?php echo $donnees['nom']?> <?php echo $donnees['possesseur']?> <!--<?php echo $donnees['console']?> <?php echo $donnees['prix']?></p>-->

<!-- requete "4" -->
<p> <?php echo $donnees['nom']?> <?php echo $donnees['possesseur']?> <!--<?php echo $donnees['console']?> <?php echo $donnees['prix']?></p>

<?php
}



// FERMETURE



// fermeture de la requete
$reponse ->closeCursor(); 
?>

