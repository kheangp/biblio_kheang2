
<div class="container">
<div class="row ">



<?php
	
	
		if(@$_POST['nom']!="" ) /*si le champs nom est non vide*/
		{	
			$id_livre=$_POST['id_livre'];
			$nom =  $_POST['nom'];
			$adresse =  $_POST['adresse'];
			$prenom =  $_POST['prenom'];
			$telephone =  $_POST['telephone'];
			  
	              
			
			//On essaie de se connecter
            try
			{
				/************************************/
				/*   Création du lecteur dans BD    */
				/************************************/
				
				$params=[                                
						':nom' => $nom,
						':adresse' => $adresse,
						':prenom'=>$prenom,
						':telephone' => $telephone];
						
			    $sql = "INSERT INTO lecteur(nom,adresse,prenom,telephone) VALUES(:nom,:adresse,:prenom,:telephone)";
						
				$sth= $dbco->prepare($sql);
						
				$sth->execute($params);
				
				/* récupérer l'id créé automatiquement pour le lecteur ajouté*/
				$id_lecteur=$dbco->lastInsertId();

				
				/*************************************/
				/*   Création de l'emprunt dans BD   */
				/*************************************/
				
				
			$sql = "INSERT INTO emprunter (date_emprunt, id_lecteur, id_livre) VALUES (CURRENT_DATE(),$id_lecteur, $id_livre)";
						
				$sth= $dbco->prepare($sql);
				
				$sth->execute();
				
				$id_emprunt=$dbco->lastInsertId();
				
				// header("location:../admin/starter.php?page=lecteurlist");
				
				
				/*CODE POUR VERIFIER DATE du jour entrée automatiquement lors de l'ajout*/
				
				
				$sql = "SELECT * FROM emprunter WHERE id_emprunter=$id_emprunt";
						
				$sth= $dbco->prepare($sql);
				
				$sth->execute();
				
				$emprunter=$sth->fetch(PDO::FETCH_ASSOC);
			
				echo " Votre emprunt a bien été enregistré le : " .date("d-m-y", strtotime($emprunter['date_emprunt']));
                  
			}
			
			catch(PDOException $e)
			{
              echo "Erreur : " . $e->getMessage();
            }
        
					
	}
?>
</div>
<div class="row"><a href="homepage.php" class="btn btn-primary" >Homepage</a>
</div>
</div>
</div>