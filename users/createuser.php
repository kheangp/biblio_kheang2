<?php

include "../includes/database.php";


		if(@$_POST['prenom']!="" && @$_POST['password2']!="" && @$_POST['mail']!="" )
		{
			$prenom =  $_POST['prenom'];
			$mail =  $_POST['mail'];
			$age =  $_POST['age'];
			$sexe = $_POST['sexe'];
			$pays = $_POST['pays'];
			$password2 = $_POST['password2'];
	   
	   
            // $servername = 'localhost';
            // $username = 'root';
            // $password = '';
				
            
			
			//On essaie de se connecter
            try{
            // $conn = new PDO("mysql:host=$servername;dbname=bd_kheang_biblio", $username, $password);
			// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
			
			     $sql = "INSERT INTO user(prenom,email,age,sexe,pays,password,role)
                        VALUES(:prenom,:mail,:age,:sexe,:pays,:password2,:administrateur)";
						
						$sth= $dbco->prepare($sql);
						
						$params=[
                                 
                                    ':prenom' => $prenom,
                                    ':mail' => $mail,
                                    ':age' => $age,
									':sexe' => $sexe,
                                    ':pays' => $pays,
									':password2' => $password2,
                                    ':administrateur' => "administrateur"];
						
						// $params=array(
                                 
                                    // ':prenom' => $prenom,
                                    // ':mail' => $mail,
                                    // ':age' => $age,
									// ':sexe' => $sexe,
                                    // ':pays' => $pays,
									// ':password2' => $password2,
                                    // ':administrateur' => "administrateur");
				$sth->execute($params);
				
						
						//$conn->exec($sql);
						echo 'Entrée ajoutée dans la table';
                
                header("location:../admin/starter.php?page=userlist");
			
			}
			
			catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
		
		/*if (isset( $_POST['submit'])){
			
			
		$prenom =  $_POST['prenom']. '<br>';
		$mail =  $_POST['mail']. '<br>';
		$age =  $_POST['age']. '<br>';
		$sexe = $_POST['sexe']. '<br>';
		$pays = $_POST['pays']. '<br>';
		
		$password = $_POST['password']. '<br>';
	   
 
	   
	   echo 'prenom'.'mail'.'age'.'sexe'.'pays'.'login'.'password';
		}*/
		
		}
?>