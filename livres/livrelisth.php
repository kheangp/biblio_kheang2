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



	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



	<form action ="search" method="get" class="form-in-line">
		<div class="input-group">
			<input type="text" class="form-control" id="search_livre " placeholder="Titre du livre" name="search">
			
			<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">Rechercher</button>
			</div>
		</div>
		</form>
		
        <?php
				/**** LISTE DES LIVRES SUR HOMEPAGE **/
				/*************************************/
				
				
           // $servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
            
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


				$sth = $dbco->prepare("SELECT distinct genre 
										FROM livre,publier 
										WHERE livre.id_livre=publier.id_livre");
                $sth->execute();
				$listeGenres= $sth->fetchAll(PDO::FETCH_ASSOC);

			foreach ($listeGenres as $grow => $genre) 
			{

				
				echo "<div class='container text-success'>".$genre["genre"]."<div class='row'>";

					

                /*Sélectionne les valeurs dans la table livre pour chaque entrée de la table qui sont publiés donc publier.supprimer=0*/

                $sth = $dbco->prepare("SELECT livre.*, bibliotheque.nom as bibliotheque_nom, auteur.nom as auteur_name, editeur.nom as editeur_name, publier.date_publication 
										FROM livre, publier, auteur, editeur, bibliotheque 
										WHERE livre.id_livre=publier.id_livre 
												AND publier.id_auteur=auteur.id_auteur 
												AND publier.id_editeur=editeur.id_editeur 
												AND livre.genre=:genre
												AND publier.supprimer=false     
												AND livre.id_bibliotheque=bibliotheque.id_bibliotheque");
												
				$params=array("genre"=>$genre["genre"]);
                $sth->execute($params);
		
                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $livre = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */
		  
		  											

                $sth->execute();
				foreach ($livre as $row => $liv) 
				{
					
					 echo '<div class="col-4 pt-5 ">';
					 
					 echo'<div class="card livrecard">'; /* div card pour débuter la carte*/
					 
					 echo "<img  class=\"card-img-top\" src='uploads/". $liv['logolivre']."'></img>"; /* affiche image sur toute la largeur de la colonne*/
					echo "<div class=\"card-body\">";
					echo "<h5 class=\"card-title text-danger titrecard \">". $liv['titre']."</h5>"; 
					echo "<p class=\"card-text text-dark \">".$liv['description']."</p>"; 
					echo "<div class=\"card-text text-primary auteurcard\">". $liv['auteur_name']."</div>"; 
					echo "<div class=\"card-text text-info\">". $liv['editeur_name']."</div>";
					echo "<p class=\"card-text genrecard\"><small class=\"text-muted\">". $liv['genre']."</small></p>"; 
					
					echo '<a class="btn btn-primary" href="?id='.$liv['id_livre'].'&page=livre">DETAILS</a>';	
					echo "</div></div></div>";
					

				}
			}
					echo "</div></div>";

                /*print_r permet un affichage lisible des résultats,

                 *<pre> rend le tout un peu plus lisible*/
             
	   
				
			
			
				
			}
			
            catch(PDOException $e){

                echo "Erreur : " . $e->getMessage();

            }

        ?>
		
	<script>



$( document ).ready(function() {


$("#search_livre").on('input',function(){
alert('ok');})

	$("#search_livre").autocomplete({
			source: "livres/livreapi.php",
			select: function( event, ui ) {
					event.preventDefault();
					$("#search_livre").val(ui.item.value);
			},

	});
});


</script>
		
<!--		
</div> 
</div>
    </body>

</html>
-->