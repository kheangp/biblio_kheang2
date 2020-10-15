
        <?php
		
		include "../includes/database.php";
		
		/*******************************************/
		/*  VERSION 1   pour une reference donnée*/
		/*******************************************/
		
            // $servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
			// $id_user=2; /*mettre valeur de l'id recherché dans la variable $id_user*/
            
            // try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // $sql = "DELETE FROM user WHERE id_user=$id_user"; /*utiliser la variable déclarée plus haut dans la requête*/
                // $sth = $dbco->prepare($sql);
                // $sth->execute();
                
                // $count = $sth->rowCount();
                // print('Effacement de ' .$count. ' entrées.');
            // }
                  
            // catch(PDOException $e){
                // echo "Erreur : " . $e->getMessage();
            // }


		/************************************************************************/
		/*  VERSION 2   pour nimporte quel user envoyé depuis userlist3.php     */
		/************************************************************************/
			//$servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
			
            $id_user=$_GET['id']; /* récupère la valeur par le lien de suppression dans userlist3.php*/
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM user WHERE id_user=$id_user"; /*utiliser la variable déclarée plus haut dans la requête*/
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				header("location:../admin/starter.php?page=userlist"); /*redirige automatiquement vers la page indiqué après supression */
                
				$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
			
			
        ?>
 