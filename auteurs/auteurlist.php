<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet" >
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>
        <title>Liste des auteurs</title>

        <meta charset='utf-8'>

    </head>

    <body>

        <h1>Liste des auteurs</h1> 
		
		
		
		
		
<div class="container">

<div class="row col-md-12 col-md-offset-2 ">
<a class='btn btn-success btn-xs' href='?page=formcreateauteur'><span class='glyphicon glyphicon-add'>Ajouter</a></td>
<table class="table table-striped custab"> 	

		<thead>
		
		<tr>
		<th>ID</th>
			<th>nom</th>
			<th>prénom</th>
			<th>nationalité</th>
			<th  colspan="2">Action</th>
			
			
		</tr>
		</thead>
		<tbody>
		

        <?php
			include "../includes/database.php";
			include "../includes/define.php";
            
			
            
            try{
                
                

                /*Sélectionne les valeurs dans la table auteur pour chaque entrée de la table*/

                $sth = $dbco->prepare("SELECT * FROM auteur");

                $sth->execute();

                

                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $auteurs = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */

                

			 foreach ($auteurs as $row => $auteur) {

					foreach ($auteur as $aut => $val){
						echo "<td>". $val."</td>";  
					 }
						// echo "<td>".$auteur['id_auteur']."</td>"; 
						// echo "<td>".$auteur['nom']."</td>"; 
						// echo "<td>".$auteur['prenom']."</td>"; 
						// echo "<td>".$auteur['nationalite']."</td>"; 
						
						
						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdateauteur&id=".$auteur['id_auteur']."'>Modifier</a></td>";
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deleteauteur']."?id=".$auteur['id_auteur']."'><span class='glyphicon glyphicon-remove'>Supprimer</a></td>";
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
    </body>

</html>