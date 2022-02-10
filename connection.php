<?php

$servername = 'BDDProjet';
$username = 'root';
$password = 'root';

try
{
	$db = new PDO('mysql:host=localhost;dbname=BDDProjet;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//On établit la connexion
$conn = new mysqli($servername, $username, $password);

//On vérifie la connexion
if($conn->connect_error){
die('Erreur : ' .$conn->connect_error);
}
echo 'Connexion réussie';

?>

