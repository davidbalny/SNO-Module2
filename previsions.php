<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Hôtel Arundel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="fond">
    <div id="header">
      <div><img alt="bandeau" src="images/phare.png" class="arrondie"></div>
	</div>
    <nav>
	<?php
	include ("menuadm.php");
	?>
    </nav>
	<div id="corps">
		<div id="article">
		<?php
		include ("articles/simulation.php");
		?>
		</div>
		<div id="photos">
		<h1><h1>
		</br></br>
        <img alt="formulaire" src="images/prevision.png">
		</div>
	</div>
    <div id="pied">
      <p>Copyright Arundel-SIG - Tous droits réservés<br>
        <a href="administration.php">Espace administration</a></p>
    </div>
  </body>
</html>