<?php
echo '<p>Veuillez saisir votre identifiant ainsi que votre mot de passe :<br />
</p>
<form method="post" action="formulaireadmincible.php">

	<p>	<label class="admin">Identifiant :</label>		<input type="text" name="id" style="height:15px;"/><br />
		<label class="admin">Mot de passe :</label>			<input type="text" name="mp" style="margin-top: 2px; height:15px;"/><br /><br />

		<input type="submit" value="Envoyer" />
	</p>
</form>';
?>