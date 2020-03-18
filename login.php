<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header('Location: /');
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    {
        $user->connect($_POST["uname"], $_POST["psw"]);
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
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <title>Page de Connexion</title>
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
        <div class="section">
            <h2 class="onglet">
                <a href="index.php">
                    Accueil
                </a>
            </h2>
        </div>
        <form action="login.php" method="post">
        <div class="container">
            <div class="pseudo">
                <label for="uname"><b>Nom d'Utilisateur</b></label>
                <input type="text" placeholder="Utilisateur" name="uname" required>
            </div>
            <div class="mdp">
                <label for="psw"><b>Mot de Passe</b></label>
                <input type="password" placeholder="Mot de Passe" name="psw" required>
            </div>
            <div class="entree">
                <button type="submit" name="submit" value="OK">Se connecter</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>