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
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<title>Portfolio</title>
</head>
<body>
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
		<h1>Bonjour <?php 
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
		<div class="description">
			<?php
				$allworks = $work->get_works();
				foreach($allworks as $w)
					{
						echo '<h3>'.($w["titre"]).'</h3>'; 
						if(isset($_SESSION["account"]["username"]))
							{echo "<div class='lien'><a href='modifwork.php?id=".($w["id"])."'>Modifier le projet</a></div>";}
						echo '<p class="descproj"></br>'.($w["description"]).'</p>';
					}
			?>
		</div>
	</div>
</body>
</html>