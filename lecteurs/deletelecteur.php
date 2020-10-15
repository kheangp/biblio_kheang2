
        <?php
		include "../includes/database.php";


		/************************************************************************/
		/*    pour nimporte quelle bibliothque envoyéz depuis bibliolist.php     */
		/************************************************************************/
			
			
            $id_lecteur=$_GET['id']; /* récupère la valeur par le lien de suppression dans bibliolist.php*/
            try
			{
                $sql = "DELETE FROM lecteur WHERE id_lecteur=$id_lecteur"; /*utiliser la variable déclarée plus haut dans la requête*/
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				header("location:../admin/starter.php?page=lecteurlist"); /*redirige automatiquement vers la page indiqué après supression */
                
				$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
			
        ?>
 