<DOCTYPE! html>

<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../css/style.css" rel="stylesheet" >
	</head>
        <title>Liste des livres</title>

        <meta charset='utf-8'>

    </head>
  
    <body>

     <h1>Liste des livres publiés</h1> 
		
	<div class="container">
		<div class="row col-md-12 col-md-offset-2 ">
			<a class='btn btn-success btn-xs' href='?page=formlivre'><span class='glyphicon glyphicon-add'>Ajouter</a></td>
			<table class="table table-striped custab"> 	
				<thead>
					<tr>
						<th>ID livre</th>
						<th>Nom Bibliotheque</th>
						<th>Titre</th>
						<th>Genre</th>
						<th>Logo</th>
						<th>Auteur</th>
						<th>Editeur</th>
						<th>Date de publication</th>
						<th  colspan="2">Action</th>
					</tr>
				</thead>
		<tbody>
		
        <?php
			include"../includes/database.php";
			include"../includes/define.php";
			
           // $servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
            
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                

                /*Sélectionne les valeurs dans la table livre pour chaque entrée de la table qui sont publiés donc publier.supprimer=0*/

                $sth = $dbco->prepare("SELECT livre.titre, bibliotheque.nom as bibliotheque_nom, livre.id_livre, livre.genre, livre.logolivre, auteur.nom as auteur_name, editeur.nom as editeur_name, publier.date_publication 
										FROM livre, publier, auteur, editeur, bibliotheque 
										WHERE livre.id_livre=publier.id_livre 
												AND publier.id_auteur=auteur.id_auteur 
												AND publier.id_editeur=editeur.id_editeur 
												AND publier.supprimer=false     
												AND livre.id_bibliotheque=bibliotheque.id_bibliotheque");
												

                $sth->execute();
		
                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $livre = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */
		  
		  											

                $sth->execute();
				foreach ($livre as $row => $liv) 
				{
					
					/*
					 foreach ($biblio as $bi => $val){
						echo "<td>". $val."</td>";  
					 }*/
						echo "<td>".$liv['id_livre']."</td>";
						echo "<td>".$liv['bibliotheque_nom']."</td>";						
						echo "<td>". $liv['titre']."</td>"; 
						echo "<td>". $liv['genre']."</td>"; 
					
						echo "<td > <img src='../uploads/". $liv['logolivre']."' class='tabimg'></img></td>";
						echo "<td>". $liv['auteur_name']."</td>"; 
						echo "<td>". $liv['editeur_name']."</td>"; 
						echo "<td>". date("d-m-Y",strtotime($liv['date_publication']))."</td>"; /*You can first use the PHP strtotime() function to convert any textual datetime into Unix timestamp, then simply use the PHP date() function to convert this timestamp into desired date format*/
						
						
						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formlivre&id=".$liv['id_livre']."'>Modifier</a></td>";
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deletelivre']."?id=".$liv['id_livre']."'><span class='glyphicon glyphicon-remove'>Supprimer</a></td>";
					echo "</tr>";
					

				}
			

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