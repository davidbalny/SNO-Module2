<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>Hôtel Arundel</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body id="fond">
		<div id="header">
			<img alt="bandeau" src="images/phare.png" id="arrondie">
		</div>
		<nav>	
			<!-- appel du script menu.php -->
			<?php
			include ("menu.php");
			?>	
		</nav>
		<div id="corps">
			<div id="article">
				<?php
				include ("articles/article1.php");
				?>
			</div>
			<div id="photos">
				<h2>Accueil de l'hôtel</h2>
				<img alt="accueil" src="images/accueil.png">
				<h2>Quelques photos ...</h2>
				<img alt="comptoire" src="images/comptoire.png">
				<img alt="facade" src="images/facade.png">
				<img alt="reception" src="images/reception.png">
			</div>
		</div>
		<div id="pied">
			<p>Copyright Arundel-SIG - Tous droits réservés<br>
			<a href="administration.php">Espace administration</a></p>
		</div>
	</body>
</html>
