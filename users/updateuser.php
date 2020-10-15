<?php

 include "../includes/database.php";
 
//$servname = "localhost"; $dbname = "bd_kheang_biblio"; $dbuser = "root"; $dbpass = "";

if(@$_POST['id_user']!="")
{
	$id_user = $_POST['id_user'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];
	$age=$_POST['age'];
	$sexe=$_POST['sexe'];
	$pays=$_POST['pays'];
	try
	{
		// $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);

		// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE user set prenom=:prenom,email=:mail,age=:age,pays=:pays,sexe=:sexe WHERE id_user=:id_user";

		$sth = $dbco->prepare($sql);

		$params=array(     ':prenom' => $prenom,

							':mail' => $mail,

							':age' => $age,

							':sexe' => $sexe,

							':pays' => $pays,

							':id_user' => $id_user,

							);
		
		$sth->execute($params);
		header('Location:../admin/starter.php?page=userlist');      

	}
	catch(PDOException $e)
	{
		echo "Erreur : " . $e->getMessage();

	}
  }
?>