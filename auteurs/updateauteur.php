<?php
		include "../includes/database.php";
		
			if(@$_POST['id_auteur']!="")		
			{
				$id_auteur = $_POST['id_auteur'];
				$nom=$_POST['nom'];
				$prenom=$_POST['prenom'];			
				$nationalite=$_POST['nationalite'];
			
			try
			{
				$sql = "UPDATE auteur set nom=:nom, prenom=:prenom, nationalite=:nationalite WHERE id_auteur=:id_auteur";

				$sth = $dbco->prepare($sql);

				$params=array(          ':nom' => $nom,

										':prenom' => $prenom,

										':nationalite' => $nationalite,

										':id_auteur' => $id_auteur

										);
				$sth->execute($params);
				header('Location:../admin/starter.php?page=auteurlist');      

			}
			catch(PDOException $e)
			{

				echo "Erreur : " . $e->getMessage();

			}
		}
 ?>