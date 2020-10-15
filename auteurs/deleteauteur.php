
        <?php
		include "../includes/database.php";


		/************************************************************************/
		/*    pour nimporte quelle auteur envoyéz depuis auteurlist.php     */
		/************************************************************************/
						
            $id_auteur=$_GET['id']; /* récupère la valeur par le lien de suppression dans auteurlist.php*/
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM auteur WHERE id_auteur=$id_auteur"; /*utiliser la variable déclarée plus haut dans la requête*/
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				header("location:../admin/starter.php?page=auteurlist"); /*redirige automatiquement vers la page indiqué après supression */
                
				$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
			
        ?>
 