
<?PHP
 
//Connexion à la base de donnée
$bdd = 'arundel';
$host = "localhost" ;
$user = "root" ;
$mdp = "" ;
$connect = mysql_connect($host, $user, $mdp) ;
if ($connect > 0 )
echo "";	//"connexion réussie" ;
else
echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;
mysql_select_db($bdd) or die("Erreur de connexion à la base de donnée" );
 
 
?>