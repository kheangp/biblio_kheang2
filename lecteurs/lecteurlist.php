<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../css/style.css" rel="stylesheet" >
	</head>
        <title>Liste des lecteurs</title>

        <meta charset='utf-8'>

    </head>

    <body>

        <h1>Liste des lecteurs</h1> 
		
		<div class="container">
			<div class="row col-md-12 col-md-offset-2 ">
				<a class='btn btn-success btn-xs' href='?page=formcreatelecteur'><span class='glyphicon glyphicon-add'>Ajouter</a></td>
					<table class="table table-striped custab"> 	
							<thead>
								<tr>
									<th>ID</th>
									<th>nom</th>
									<th>prénom</th>
									<th>adresse</th>
									<th>telephone</th>
									<th colspan="2">Action</th>			
								</tr>
							</thead>
							<tbody>
			

        <?php
			include "../includes/database.php";
			include "../includes/define.php";
            
			
            try
			{                

                /*Sélectionne les valeurs dans la table lecteur pour chaque entrée de la table*/

                $sth = $dbco->prepare("SELECT * FROM lecteur");
                $sth->execute();


                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $lecteurs = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */

				foreach ($lecteurs as $row => $lecteur) 
				{
					
					 foreach ($lecteur as $lect => $val)
					 {
						echo "<td>". $val."</td>";  
					 }						
						
						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdatelecteur&id=".$lecteur['id_lecteur']."'>Modifier</a></td>";
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deletelecteur']."?id=".$lecteur['id_lecteur']."'><span class='glyphicon glyphicon-remove'>Supprimer</a></td>";
					echo "</tr>";

				}				

				echo "</table>";
            }

            catch(PDOException $e)
			{

                echo "Erreur : " . $e->getMessage();
            }

        ?>
		</tbody>
	</table>
	</div> 
</div>
</body>

</html>