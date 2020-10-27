<!--<DOCTYPE! html>

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
			<!--
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
						
					</tr>
				</thead>
		<tbody>
		</tbody>
	</table>
	-->

		
        <?php
				
				
           // $servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
            
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                

                /*Sélectionne les valeurs dans la table livre pour chaque entrée de la table qui sont publiés donc publier.supprimer=0*/

                $sth = $dbco->prepare("SELECT livre.*, bibliotheque.nom as bibliotheque_nom, auteur.nom as auteur_name, editeur.nom as editeur_name, publier.date_publication 
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
					
					 echo '<div class="col-4 pt-5 ">';
					 
					 echo'<div class="card livrecard">'; /* div card pour débuter la carte*/
					 
					 echo "<a href=\"#\"><img  class=\"card-img-top\" src='uploads/". $liv['logolivre']."'></img></a>"; /* affiche image sur toute la largeur de la colonne*/
					echo "<div class=\"card-body\">";
					echo "<h5 class=\"card-title text-danger titrecard \">". $liv['titre']."</h5>"; 
					echo "<p class=\"card-text\">".$liv['description']."</p>"; 
					echo "<div class=\"card-text text-primary auteurcard\">". $liv['auteur_name']."</div>"; 
					echo "<div class=\"card-text text-info\">". $liv['editeur_name']."</div>";
					echo "<p class=\"card-text genrecard\"><small class=\"text-muted\">". $liv['genre']."</small></p>"; 
					
					echo '<a class="btn btn-primary" href="?id='.$liv['id_livre'].'&page=livre">DETAILS</a>';	
					echo "</div></div></div>";
					

				}
			

                /*print_r permet un affichage lisible des résultats,

                 *<pre> rend le tout un peu plus lisible*/
             
	   
				
			
			
				
			}
			
            catch(PDOException $e){

                echo "Erreur : " . $e->getMessage();

            }

        ?>
		
<!--		
</div> 
</div>
    </body>

</html>
-->