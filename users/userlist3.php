<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet" >
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>
        <title>LISTE DES USERS</title>

        <meta charset='utf-8'>

    </head>

    <body>

        <h1>Liste des users</h1> 
		
		
		
		
<div class="container">
<div class="row col-md-6 col-md-offset-2 ">
<a class='btn btn-success btn-xs' href='?page=formcreateuser'><span class='glyphicon glyphicon-add'>Ajouter</a></td>
<table class="table table-striped custab" border=1> 	

		<thead>
		
		<tr>
		<th>ID</th>
			<th>prenom</th>
			<th>email</th>
			<th>age</th>
			<th>sexe</th>
			<th>pays</th>
			<th>mot de passe</th>
			<th>rôle</th>
			
		</tr>
		</thead>
		<tbody>
		

        <?php
		include "../includes/database.php";
		include "../includes/define.php";

            //$servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
            
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                

                /*Sélectionne les valeurs dans les colonnes prenom et mail de la table

                 *users pour chaque entrée de la table*/

                $sth = $dbco->prepare("SELECT * FROM user");

                $sth->execute();

                

                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $users = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */

                

			 foreach ($users as $row => $user) {

					

					
					/*
					 foreach ($user as $u => $val){
						echo "<td>". $val."</td>";  
					 }*/
						echo "<td>".$user['id_user']."</td>"; 
						echo "<td>". $user['prenom']."</td>"; 
						echo "<td>". $user['email']."</td>"; 
						echo "<td>". $user['age']."</td>"; 
						echo "<td>". $user['sexe']."</td>"; 
						echo "<td>". $user['pays']."</td>"; 
						echo "<td>". $user['password']."</td>"; 
						echo "<td>". $user['role']."</td>"; 
						
						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdateuser&id=".$user['id_user']."'>Modifier</a></td>";
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deleteuser']."?id=".$user['id_user']."'><span class='glyphicon glyphicon-remove'>Supprimer</a></td>";
					echo "</tr>";

				

				}
				
				

				

			echo "</table>";

                /*print_r permet un affichage lisible des résultats,

                 *<pre> rend le tout un peu plus lisible*/

          

            }

                  

            catch(PDOException $e){

                echo "Erreur : " . $e->getMessage();

            }

        ?>
</tbody>
</table>
</div> 
</div>
    