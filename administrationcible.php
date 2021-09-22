<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Hôtel Arundel</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="fond">
    <div id="header">
      <div><img alt="bandeau" src="images/phare.png" id="arrondie"></div>
    </div>
    <nav>
	<?php
	include ("menuadm.php");
	?>
    </nav>
    <div id="corpsadm">
		<div id="article">
		<?php
		include ("articles/article6.php");
		?>
		</div>
		<div id="photos">
			<h3>Le Port Olona<h3>
			<img alt="formulaire" src="images/admin.png">
		</div>
      
    </div>
    <div id="pied">
      <p>Copyright Arundel-SIG - Tous droits réservés<br>
        <a href="administration.php">Espace administration</a></p>
    </div>
  </body>
</html>