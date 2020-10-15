<?php
	include "includes/database.php";
	
	
	
	
	
	if(@$_GET['id']!=""){
		@$id_livre=$_GET['id'];
				
			

			$sql = "SELECT livre.titre, livre.genre, livre.description, livre.logolivre as logo, auteur.nom as auteur_name, editeur.nom as editeur_name, publier.date_publication  as date_publication
										FROM livre, publier, auteur, editeur 
										WHERE livre.id_livre=publier.id_livre 
												AND publier.id_auteur=auteur.id_auteur 
												AND publier.id_editeur=editeur.id_editeur 
												AND livre.id_livre=$id_livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$livre = $sth->fetch(PDO::FETCH_ASSOC);

			
			
		
			// $action=$route['updatelivre'];
			// $titreForm=" MODIFIER LIVRE ";
		}
	?>

<!--

<div class="container">
<div class="row">
	
					<div class="col-6">
						<img src="uploads/or.jpg"/>	
					</div>
					<div class="col-6">
						
						<div class="col-12"><?php echo $livre['titre']?></div>
						<div class="col-12">description</div>
					
					</div>
				</div>
				<div class="row">
				<a href="#" class="btn btn-primary">BOUTON</a> 
			</div>
		
			

</div>	
</div>	
-->
<div class="container">
	
		<div class="card livrecard align-center">
			<div class="card-header titrecard"><?php echo $livre['titre']?></div>
			<div class="row">
			<div class="col-6">
				<div class="card">
					<div class="card-body ">
						<div class="card-image-top"><img src="uploads/<?php echo $livre['logolivre']?> \"/></div>
					</div>
				</div>
			</div>
			<div class="col-6">	
				<div class="card">
					<div class="card-body ">
						<div class="card-text auteurcard ">De : <?php echo $livre['auteur_name']?></div>
						<p class="card-text">Résumé : <?php echo $livre['description']?></p>
						<div class="card-text ">EDITEUR : <?php echo $livre['editeur_name']?></div>
						<p class="card-text genrecard">Genre : <?php echo $livre['genre']?></p>
						<div class="card-text">Publié le : <?php echo date("d-m-Y",strtotime($livre['date_publication']))?></div>
					</div>
				</div>
			</div>
			</div>
	
		
	<div class="card-footer"><a href="?page=emprunter" class="btn btn-primary">EMPRUNTER</a> </div>
			
		</div>
</div>	
	
		

