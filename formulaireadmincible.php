    <!DOCTYPE html>

		<?PHP
     
		//On récupere les valeurs du formulaire
		$id = $_POST['id'];
		$mp = $_POST['mp'];
		
		//if ($id=="admin" and $mp=="admin")
		//	{include ("administrationcible.php");}
		//else
		//	{include ("administration.php");}
     
		//Test mot de passe et login
		if ($id=="admin" and $mp=="admin")
			{include ("administrationcible.php");}
		else if ($id=="admin" and $mp!="admin")	
			{include ("administration1.php");}
		else if ($id!="admin" and $mp=="admin")	
			{include ("administration3.php");}
		else {include ("administration2.php");}
		?>

