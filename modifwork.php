<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$newproj = new Works;

if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['titre'] != NULL && $_POST['description'] != NULL)
    {   
        $newproj->update($_POST["titre"], $_POST["description"], $_GET["id"]);
        header('Location: /');
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title>Modifier un Projet</title>
</head>
<body>
    <div class="background">
        <div class="background">
        <div class="ptgris" id="ptvun"></div>
        <div class="ptgris" id="ptvdeux"></div>
        <div class="ptgris" id="ptvtrois"></div>
        <div class="ptgris" id="ptvcinq"></div>
        <div class="ptgris" id="ptvsix"></div>
        <div class="ptgris" id="ptvsept"></div>
        <div class="ptgris" id="ptvhuit"></div>
    </div>
    <div class="contenu">
        <h1><?php
            if(isset($_SESSION["account"]["username"]))
                {echo($_SESSION["account"]["username"]);}
            else
                {echo "inconnu";}
            /*echo($user->get_user(1)["username"]);*/
        ?></h1>
        <div class="section">
            <h2 class="onglet">
                <a href="index.php">
                    Accueil
                </a>
            <h2 class="onglet">
                <a href="login.php">
                    Se Connecter
                </a>
            </h2>
            <h2 class="onglet">
                <a href="logout.php">
                    Se Déconnecter
                </a>
            </h2>
            <h2 class="onglet">
                <?php 
                    if(isset($_SESSION["account"]["username"]))
                        {echo "<a href='createproject.php'>Ajouter un projet</a>";}
                    else {
                        echo " ";
                    }
                ?>
            </h2>
            <h2 class="onglet">
                <a href=''>A Propos</a>
            </h2>
        </div>
        <div class="container">
            <form action="modifwork.php" method="post">
                <div class="pseudo">    
                    <?php 
                        echo '<label for="titre"><b>Titre du Projet n°'.$_GET["id"].'</b></label>'
                    ;?>
                    <p></br></p>
                    <input type="text" value="<?php
                        $titre = $newproj->get_titre_by_id($_GET['id']);
                        echo $titre;
                        ?>" name="titre" required>
                </div>
                <div class="mdp">
                    <label for="description"><b>Description du Projet</b></label>
                    <p></br></p>
                    <textarea rows="5" cols="40" name="description" required><?php
                            $description = $newproj->get_desc_by_id($_GET["id"]);
                            echo $description;
                        ?></textarea>
                </div>
                <div class="entree">
                    <button type="submit" name="submit" value="OK">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</body>