<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
<!-- mise en commentaire pour essayer le code sur une seule et meme page, sinon 
les lignes 13 à 22 fonctionnent avec le fichier "secret.php"

        <p>
            veillez entrer le mot de passe ultra secret qui n'est pas "kangourou"
        </p>-->
<!--        <form action='secret.php' method="post">
            <p>
                <input type="password" name='password' required placeholder="mot de passe"/>
                <input type="submit" value="valider"/>
            </p>
            
        </form>-->
        
<?php 
        if (!isset($_POST['password']) OR ($_POST['password'] != kangourou)){
            echo'try again dude';
            //echo "<br/><a href=\"formulaire.php\">clique ici</a>";    
        ?>
        <form action='formulaire.php' method="post">
            <p>
                <input type="password" name='password' required placeholder="mot de passe"/>
                <input type="submit" value="valider"/>
            </p>
            
        </form>
        <?php    
        }else{

            echo 'vous avez le droit de consulter les infos top secrètes<br/>';
            echo 'mais fais gaffe la nasa te surveille';
}
        
        
        ?>

               
    </body>
</html>


