
        <?php
		

		include"../includes/database.php";
		
		/************************************************************************/
		/*    pour nimporte quel livre envoyé depuis livrelist.php     */
		/************************************************************************/
			//$servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
			
            $id_livre=$_GET['id']; /* récupère la valeur par le lien de suppression dans bibliolist.php*/
            
			try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "UPDATE publier set supprimer=true WHERE id_livre=$id_livre"; /*MAJ BD pour que l'attribut 'supprimer' soit vrai*/
                $sth = $dbco->prepare($sql);
                $sth->execute();
				
				/*$sql = "DELETE FROM livre WHERE id_livre=$id_livre";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                */
                
				header('Location:../admin/starter.php?page=livrelist'); /*redirige automatiquement vers la page indiqué après supression */
                
				$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
			
        ?>
 