
<?php
	include"../includes/database.php";
	include "../includes/functions.php";
	
   	if(@$_POST['titre']!="" ) /*si le champs titre est non vide*/
	{
		$titre = $_POST['titre'];
		$genre = $_POST['genre'];
		//$logo =  $_POST['logo'];
		$id_bibliotheque =  $_POST['id_bibliotheque'];		
		$id_auteur = $_POST['id_auteur'];
		$id_editeur=$_POST['id_editeur'];
		$date_publication=$_POST['date_publication'];
		$logo=uploadfile('logo',true);		
		
		// $servername = 'localhost';
		// $dbname='bd_kheang_biblio';
		// $username = 'root';
		// $password = '';
			
		
		//On essaie de se connecter
		try
		{
			//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  	$params=[   ':id_bibliotheque' =>$id_bibliotheque,                            
						':titre' => $titre,
						':genre' => $genre,
						':logo'=>$logo];
						
						
			$sql = "INSERT INTO livre(id_bibliotheque, titre,genre,logolivre)
					VALUES(:id_bibliotheque,:titre,:genre,:logo)";
			
			 $dbco->prepare($sql)->execute($params);
			
		
			
			//$sth->execute($params);
		     $params=[ ':date_publication'=>$date_publication];
             $id_livre=$dbco->lastInsertId();/* recupérer l'id_livre généré automatiquement et le met dans variable id_livre*/
						
			$sql = "INSERT INTO publier(id_livre, id_auteur, id_editeur, date_publication)
					VALUES($id_livre,$id_auteur,$id_editeur,:date_publication)";
			
			$dbco->prepare($sql)->execute($params);			
			
			header("location:../admin/starter.php?page=livrelist");
			//$conn->exec($sql);
			
			echo 'Entrée ajoutée dans la table';
			//header("location:livrelist.php");

		}
	
		catch(PDOException $e)
		{
			echo "Erreur : " . $e->getMessage();
		}
        
		
	}	
		
?>