<?php
	include "../includes/database.php";
		if(@$_POST['nom']!="" ) /*si le champs nom est non vide*/
		{
			$nom =  $_POST['nom'];
			$adresse =  $_POST['adresse'];
			$telephone =  $_POST['telephone'];
			  
	   
            // $servername = 'localhost';
			// $dbname = 'bd_kheang_biblio';
            // $username = 'root';
            // $password = '';
				
            
			
			//On essaie de se connecter
            try
			{
				// $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
			    $sql = "INSERT INTO bibliotheque(nom,adresse,telephone) VALUES(:nom,:adresse,:telephone)";
						
				$sth= $dbco->prepare($sql);
						
				$params=[                                
						':nom' => $nom,
						':adresse' => $adresse,
						':telephone' => $telephone];
								
				$sth->execute($params);
				
				//$conn->exec($sql);
				echo 'Entrée ajoutée dans la table';
				header("location:../admin/starter.php?page=bibliolist");
                          			
			}
			
			catch(PDOException $e)
			{
              echo "Erreur : " . $e->getMessage();
            }
        
			if (isset( $_POST['submit']))
			{
							
				$nom =  $_POST['nom']. '<br>';
				$adresse =  $_POST['adresse']. '<br>';
				$telephone =  $_POST['telephone']. '<br>';
	   			
			}
		
	}
?>