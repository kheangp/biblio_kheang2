<?php
	include "../includes/database.php";
		if(@$_POST['nom']!="" ) /*si le champs nom est non vide*/
		{
			$nom =  $_POST['nom'];
			$adresse =  $_POST['adresse'];
			$prenom =  $_POST['prenom'];
			$telephone =  $_POST['telephone'];
			  
	              
			
			//On essaie de se connecter
            try
			{
				
			    $sql = "INSERT INTO lecteur(nom,adresse,prenom,telephone) VALUES(:nom,:adresse,:prenom,:telephone)";
						
				$sth= $dbco->prepare($sql);
						
				$params=[                                
						':nom' => $nom,
						':adresse' => $adresse,
						':prenom'=>$prenom,
						':telephone' => $telephone];
								
				$sth->execute($params);
				
				//$conn->exec($sql);
				echo 'Entrée ajoutée dans la table';
				header("location:../admin/starter.php?page=lecteurlist");
                          			
			}
			
			catch(PDOException $e)
			{
              echo "Erreur : " . $e->getMessage();
            }
        
			if (isset( $_POST['submit']))
			{
							
				$nom =  $_POST['nom']. '<br>';
				$adresse =  $_POST['adresse']. '<br>';
				$prenom =  $_POST['prenom'];
				$telephone =  $_POST['telephone']. '<br>';
	   			
			}
		
	}
?>