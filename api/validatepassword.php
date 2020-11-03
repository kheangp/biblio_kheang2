<?php

include "../includes/database.php";

	$password=$_GET["password"];


	if(strlen($password)>8)
	{
		echo "valid"; // mot de passe superieur à 8 caractères
				
	}
	else
	{
		echo "unvalid"; 
		
	}
	

	
	

 
 /* verifier si email existe dans table USER
	$sql = "SELECT  password
				FROM user 
				WHERE password='$password'";

	$sth = $dbco->prepare($sql);

	$sth->execute();
	$resultat = $sth->fetch(PDO::FETCH_ASSOC);
	
	if($sth->rowCount()>0)
	{
		echo "valid"; //
		
	}
	else
	{
		echo "unvalid"; 
		
	}
*/




