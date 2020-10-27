<?php

	include"../includes/database.php";
	include "../includes/functions.php";  /*inclus le php contenant les fonctions */
	
//$servname = "localhost"; $dbname = "bd_kheang_biblio"; $dbuser = "root"; $dbpass = "";

	

  if(@$_POST['id_livre']!=""){
		$id_livre = $_POST['id_livre'];
		$id_bibliotheque=$_POST['id_bibliotheque'];
		$titre=$_POST['titre'];
		$genre=$_POST['genre'];
		$logo=uploadfile('logo',true);//$_POST['logo'];
		$id_auteur=$_POST['id_auteur'];
		$id_editeur=$_POST['id_editeur'];
		$date_publication=$_POST['date_publication'];
		$description=$_POST['description'];
		$nb_pages=$_POST['nb_pages'];
		$prix = $_POST['prix'];
		
try{

		// $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);

		// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre, logolivre=:logo, description=:description, nb_pages=:nb_pages, prix=:prix WHERE id_livre=$id_livre";

		$params=array(':id_bibliotheque' => $id_bibliotheque,
						':titre' => $titre,
						':genre' => $genre,
						':logo' => $logo ,
						':prix'=>$prix,
						':description'=>$description,
						':nb_pages'=>$nb_pages						

						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);

		$params=array(':id_auteur'=>$id_auteur,
							':id_editeur'=>$id_editeur,
							':date_publication'=>$date_publication         

											);
		$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_publication=:date_publication WHERE id_livre=$id_livre";

		$sth = $dbco->prepare($sql);

		$sth->execute($params);
		header('Location:../admin/starter.php?page=livrelist');      

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>