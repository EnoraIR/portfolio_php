<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");
$user = new Users;
$work = new Works;
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<title>Portfolio</title>
</head>
<body>
	<div class="contenu">
		<h1>Bonjour <?php 
			if(isset($_SESSION["account"]["username"]))
				{echo($_SESSION["account"]["username"]);}
			else
				{echo "NOT CONNECTED";}
			/*echo($user->get_user(1)["username"]);*/
        ?></h1>
		<div class="section">
			<h2 class="onglet">
				A Propos
			</h2>
			<h2 class="onglet">
				Projet 1
			</h2>
			<h2 class="onglet">
				Projet 2
			</h2>
			<h2 class="onglet">
				Projet 3
			</h2>
			<h2 class="onglet">
				<a href="login.php">
					Se Connecter
				</a>
			</h2>
		</div>
		<div class="description">
			<h3>Sous-titre ou image</h3>
			<p><?php
				$allworks = $work->get_works();
				foreach($allworks as $w)
					{echo($w["title"]);
					echo("|");
					echo($w["description"]);}
			?></p>
		</div>
	</div>
</body>
</html>