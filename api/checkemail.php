<?php

	include "../includes/database.php";
	/*include "../security/secure.php";*/
	
	
	@$email=$_GET["mail"];
 
 // verifier si email existe dans table USER
	$sql = "SELECT email
				FROM user 
				WHERE email='$email'";

	$sth = $dbco->prepare($sql);

	$sth->execute();
	$resultat = $sth->fetch(PDO::FETCH_ASSOC);
	
	if($sth->rowCount()>0)
	{
		echo "KO"; // l'utilisateur existe déjà dans BD
		
		
	}
	else
	{
		echo "OK"; // l'utilisateur n'existe pas 
		
	}
 
