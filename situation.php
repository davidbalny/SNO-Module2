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
		include ("articles/article5.php");
		?>
		</div>
		<div id="photos">
		<h3>La chaume</h3>
		<img alt="Chambre" src="Images/Plan.png">	
		</div>
	</div>
    <div id="pied">
      <p>Copyright Arundel-SIG - Tous droits réservés<br>
        <a href="administration.php">Espace administration</a></p>
    </div>
  </body>
</html>
