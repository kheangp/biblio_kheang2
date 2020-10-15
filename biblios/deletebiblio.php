
        <?php
		include "../includes/database.php";


		/************************************************************************/
		/*    pour nimporte quelle bibliothque envoyéz depuis bibliolist.php     */
		/************************************************************************/
			$servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
			
            $id_bibliotheque=$_GET['id']; /* récupère la valeur par le lien de suppression dans bibliolist.php*/
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM bibliotheque WHERE id_bibliotheque=$id_bibliotheque"; /*utiliser la variable déclarée plus haut dans la requête*/
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				header("location:../admin/starter.php?page=bibliolist"); /*redirige automatiquement vers la page indiqué après supression */
                
				$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
			
        ?>
 