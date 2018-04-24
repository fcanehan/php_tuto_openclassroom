<?php

/*
 * je crée une variable si dessous car je pensais que l on pouvait comparer
 * le mot de passe entré en input dans "formulaire.php" avec cette variable
 * or il semble que la vérification puisse se faire plus simplement dans la condition 
 */
//$mot_De_Passe = "kangourou"


if (isset($_POST['password']) AND ($_POST['password'] == kangourou)){
    echo 'vous avez le droit de consulter les infos top secrètes<br/>';
    echo 'mais fais gaffe la nasa te surveille';
}else{
    echo'try again dude';
    echo "<br/><a href=\"formulaire.php\">clique ici</a>";
}


// modification du TP sur une seule page !!!

//<?php
//
//
?>
