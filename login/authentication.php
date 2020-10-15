<?php
	
	session_start();    // Démarrage ou restauration de la session
 
	
	include"../includes/database.php";
	include"../includes/functions.php";
	
	$email=securisation($_POST['login']);
	$password=securisation($_POST['password']);
	
	if($email!="" && $password!="")
	{
		try
		{
			
			
			$sql=" SELECT prenom, email, role, password FROM user WHERE email='$email' "; /*mettre ' ' pour que le @ ne pose pas d'erreur*/
			$sth=$dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			
			if($sth->rowCount()>0)
			{
				
				$dbpassword=$result['password'];
				$prenom=$result['prenom'];
				$role=$result['role'];
					
					if($dbpassword==$password)
						
					{
						
						$_SESSION["user_firstname"]=$prenom;
						$_SESSION["user_email"]=$email;
						$_SESSION["role"]=$role;
						echo " authentification réussie ".$prenom;
						header('Location:../admin/starter.php');
							exit();
						
						
							//header('Location:homepage.php');
					}
					else
					{
						 $_SESSION["error_message"]="Password doesn't match";  
						echo "mot de passe incorrect";
						
					}
			}
			else
			{
				 $_SESSION["error_message"]="User not found";      
        //echo "user not found";
			}
		}		
	
                 
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
				
            }
						
	}			
	
	
		else
			{
				 
        $_SESSION["error_message"]="Enter your email";       
        //echo "user not found";
				
			}
			
			header('Location:login.php');