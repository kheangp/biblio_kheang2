<?php
	include "../includes/database.php";
		if(@$_POST['nom']!="" ) /*si le champs nom est non vide*/
		{
			$nom =  $_POST['nom'];
			$prenom =  $_POST['prenom'];
			$nationalite =  $_POST['nationalite'];
			  
	              
			
			//On essaie de se connecter
            try
			{
				           
			    $sql = "INSERT INTO auteur(nom,prenom,nationalite) VALUES(:nom,:prenom,:nationalite)";
						
				$sth= $dbco->prepare($sql);
						
				$params=[                                
						':nom' => $nom,
						':prenom' => $prenom,
						':nationalite' => $nationalite];
								
				$sth->execute($params);
				
				//$conn->exec($sql);
				echo 'Entrée ajoutée dans la table';
				header("location:../admin/starter.php?page=auteurlist");
                          			
			}
			
			catch(PDOException $e)
			{
              echo "Erreur : " . $e->getMessage();
            }
        
			if (isset( $_POST['submit']))
			{
							
				$nom =  $_POST['nom']. '<br>';
				$prenom =  $_POST['prenom']. '<br>';
				$nationalite =  $_POST['nationalite']. '<br>';
	   			
			}
		
	}
?>