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
        <div class="lines">
        <div class="linun">
            <svg xmlns="http://www.w3.org/2000/svg" width="2386.359" height="1957.369" viewBox="0 0 2386.359 1957.369" class="elelinun">
                <path d="M954.7,617.838c65.693,101.059,432.078-14.383,429.172-67.907-1.752-32.3-136.14-7.85-232.241-110.009-46.3-49.219-41.029-82.453-65.747-137.321-11.938-26.511-23.292-43.8-48.3-77.414-33.424-44.914-74.114-99.606-143.963-137.023-21.92-11.734-73.5-39.875-141.246-39.386-96.142.706-164.851,58.4-187.423,77.414C394.837,269.163,521.307,473.739,377.535,696.61,222.911,936.308-9.317,949.9,1.887,1058.459,19.9,1234.012,687.9,1320.552,707.521,1258.879c13.052-41-265.72-131.359-248.539-220.018,12.739-65.679,180.931-94.282,264.837-97.786,62.474-2.594,107.565,7.47,126.307,12.223,24.963,6.342,91.932,24.053,150.753,73.339,71.3,59.758,57.639,108.271,105.2,154.733,84.829,82.846,245.823,47.059,310.389,32.69,230.884-51.324,368.219-222.965,427.814-297.432,49.681-62.067,196.061-250.183,207.8-521.525,5.025-115.768,15.659-278.337-85.563-354.474-91.919-69.143-229.7-32.962-370.772,4.074-108.149,28.4-182.86,68.219-268.911,114.084-126.8,67.595-202.77,108.094-271.723,192.693C1041.827,367.791,904.044,540,954.7,617.838Z" transform="translate(479.549 -0.021) rotate(22)" />
            </svg>
        </div>
        <div class="lindeux">
            <svg xmlns="http://www.w3.org/2000/svg" width="1155.74" height="1441.829" viewBox="0 0 1155.74 1441.829" class="elelindeux">
                <path d="M594.267,817.445c-92.694,8.385-171.1,6.462-267.694-24.088C269.4,775.246,177.422,746.133,104.478,661.969,82.668,636.822-17.6,519.717,2.7,354.2c5.59-45.6,22.925-186.939,109.052-220.527,141.606-55.229,387.8,212.578,649.465,295.652,28.224,8.958,72.8,20.906,116.322,2.423,46.763-19.864,71.393-65.972,116.322-152.737,35.357-68.283,27.99-71.3,53.952-115.942C1107.271,60.843,1170.15,35.09,1161.07,14.928,1145.318-20.042,934.032,8.32,919.3,80.222c-7.068,34.485,27.812,60.584,139.813,171.9a703.587,703.587,0,0,1,126.759,172.407c28.555,54.526,70.367,135.168,66.4,198.563-3.893,62.321-90.279,74.874-137.325,89.738A2468.766,2468.766,0,0,1,594.267,817.445Z" transform="translate(1153.822 242.147) rotate(107)" />
            </svg>
        </div>
    </div>
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