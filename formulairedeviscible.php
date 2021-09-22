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
		<?php
		include ("menuadm.php");
		?>
    </nav>
    <div id="corpsadm">
		<div id="article">
		<h3 style='text-align: right'>Les données sont enregistrées</h3></br>
	<?php
		//On récupere les valeurs du formulaire
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$adresse = $_POST['adresse'];
		$cp = $_POST['cp'];
		$ville = $_POST['ville'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$codetarif = $_POST['codetarif'];
		$nbnuits = $_POST['nbnuits'];
		$nbdej = $_POST['nbdej'];
		$carte = $_POST['carte'];
		$date=date("Y-m-d");
		
		//On affecte une valeur à la variable $carte qui correspond au code du type de carte
		if ($carte=="Or") {
			$carte="2";
		} 	elseif ($carte=="Argent") {
			$carte="1";
		}	else {
			$carte="0";
		}
     
		//Connexion à la base de donnée
		//include ('connexion.php');
     
		//On insère les informations du formulaire dans la table
		//$sql="insert into devis (numdevis, datedevis, nomclidevis, prenomclidevis, adclidevis, cpclidevis, villeclidevis, telclidevis, emailclidevis, nbnuits, nbdej, codeTarif, numerocarte) values ('', '$date', '$nom', '$prenom', '$adresse', '$cp', '$ville', '$tel', '$email', '$nbnuits', '$nbdej', '$codetarif', '$carte')" ;
		
		//Sans classe
		//$resultat=mysql_query($sql);
		
		//Avec classe PDO
		//$reponse = $bdd->query($sql);
		
		//On ferme la connexion
		//mysql_close();

		//début de l'Etat du devis
		//structure alternative avec plusieurs cas : switch - pour chaque code tarif un tarif unique
		switch ($codetarif) {
		case 1 :
			$tarif=38;
			break;
		case 2 :
			$tarif=49;
			break;
		case 3 :
			$tarif=53;
			break;
		case 4 :
			$tarif=58;
			break;
		case 5 :
			$tarif=68;
			break;
		}
		
		//montant des petits-déjeuners (nom de la variable $petitdej)
		$petitdej=6*$nbdej;
		
		//calcul du taux de remise avec la structure alternative ElseIf
		if ($carte=="1") {
			$tauxrem=20;
		} 	elseif ($carte=="2") {
			$tauxrem=10;
		}	else {
			$tauxrem=5;
		}
		
		//calcul de la remise
		$remise=(($nbnuits*$tarif) + $petitdej)* $tauxrem/100;
		
		//calcul du montant H.T
		$montantht=(($nbnuits*$tarif) + $petitdej)- $remise;
		
		//calcul de la T.V.A
		$tva=$montantht*20/100;
		$tva=number_format($tva, 2, ',','');
		
		//calcul du montant T.T.C
		$montantttc=$tva+$montantht;
		
echo"
<table>
	</br>
	<caption style='width:300px;'>Simulation de Devis pour M. ou Mme ".$nom."</caption>
    <tr>
       <th style='text-align: center'  colspan='2'></th>
	</tr>
	<tr>
       <td class='cellule'>Tarif de la chambre :</td>
       <td style='width:100px;' class='cellule'>".$tarif." €</td>
	</tr>
	<tr>
       <td class='cellule'>Montant des petits-déjeuners :</td>
       <td class='cellule'>".$petitdej." €</td>
	</tr>   
	<tr>
       <td class='cellule'>Taux de remise accordé :</td>
       <td class='cellule'>".$tauxrem." %</td>
	</tr>
	<tr>
       <td class='cellule'>Calcul de la remise :</td>
       <td class='cellule'>".$remise." €</td>
	</tr>
	<tr>
       <th style='text-align: center' colspan='2'></th>
   </tr>
   <tr>
       <th class='cellule'>Montant total H.T :</th>
       <td class='cellule'>".$montantht." </td>
   </tr>
   <tr>
       <th style='text-align: center'  colspan='2'></th>
   </tr>
   <tr>
       <td class='cellule'>T.V.A à 20% :</td>
       <td class='cellule'>".$tva." €</td>
   </tr>
   <tr>
       <th style='text-align: center'  colspan='2'></th>
   </tr>
   <tr>
       <th class='cellule'>Montant total T.T.C :</th>
       <td class='cellule'>".$montantttc." €</td>
   </tr>
   
</table><br /><br />";
		

	?>
		
		</div>
		<div id="photos">
		<br /><br />
        <img alt="formulaire" src="images/FinFormulaire.png">

		</div>
      
    </div>
    <div id="pied">
      <p>Copyright Arundel-SIG - Tous droits réservés<br>
        <a href="administration.php">Espace administration</a></p>
    </div>
  </body>
</html>
