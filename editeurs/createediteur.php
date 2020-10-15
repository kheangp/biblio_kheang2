<?php
	include "../includes/database.php";
		if(@$_POST['nom']!="" ) /*si le champs nom est non vide*/
		{
			$nom =  $_POST['nom'];
			$adresse =  $_POST['adresse'];
			
	   
			
			//On essaie de se connecter
            try
			{
           
			    $sql = "INSERT INTO editeur(nom,adresse) VALUES(:nom,:adresse)";
						
				$sth= $dbco->prepare($sql);
						
				$params=[                                
						':nom' => $nom,
						':adresse' => $adresse];
								
				$sth->execute($params);
				
				//$conn->exec($sql);
				echo 'Entrée ajoutée dans la table';
				header("location:../admin/starter.php?page=editeurlist");
                          			
			}
			
			catch(PDOException $e)
			{
              echo "Erreur : " . $e->getMessage();
            }
        
			if (isset( $_POST['submit']))
			{
							
				$nom =  $_POST['nom']. '<br>';
				$adresse =  $_POST['adresse']. '<br>';
				
	   			
			}
		
	}
?>