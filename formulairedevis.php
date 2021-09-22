<?php
echo '<p>Nous prendrons le meilleur soin à toutes vos demandes<br />
</p>
<form method="post" action="formulairedeviscible.php">
<p>	<label>Nom :</label>			<input type="text" name="nom" style="height:15px;"/><br />
	<label>Prénom :</label>			<input type="text" name="prenom" style="margin-top: 2px; height:15px;"/><br /><br />
	<label>Adresse :</label>		<input type="text" name="adresse" style="width: 250px; height:15px;"/>
	<label>CP / Ville :</label>		<input type="text" name="cp" style="margin-top: 2px; width: 50px; height:15px;"/>
									<input type="text" name="ville" style="margin-top: 2px; width: 200px; height:15px;"/>
	<label>Tél	:</label>			<input type="text" name="tel" style="margin-top: 2px; height:15px;"/><br />
	<label>Email :</label>			<input type="text" name="email" style="margin-top: 2px; width: 250px; height:15px;"/><br /><br />
	<label>Code tarif :</label>		
			<SELECT name="codetarif" size="1">
				<OPTION>1
				<OPTION>2
				<OPTION>3
				<OPTION>4
				<OPTION>5
			</SELECT><br />
	<label>Nb de nuits :</label>			<input type="text" name="nbnuits" style="height:15px; width: 80px;"/><br />
	<label>Nb de petits dej :</label>			<input type="text" name="nbdej" style="height:15px; width: 80px;"/><br />
	<label>Type de carte :</label>		

			<SELECT name="carte" size="1" style="width: 85px;margin-top: 2px;">
				<OPTION>Or
				<OPTION>Argent
				<OPTION>Bronze
			</SELECT>
<br /></br>
<input type="submit" value="Visualiser le devis" />	
</form>';

  
?>