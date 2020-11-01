<?php

	
		
	if(@$_GET['id']!=""){
		@$id_livre=$_GET['id'];
		@$titre=$_GET['title'];
			
			/*$sql = "SELECT livre.titre
				FROM livre, publier, auteur, editeur 
										WHERE livre.id_livre=publier.id_livre 
												AND publier.id_auteur=auteur.id_auteur 
												AND publier.id_editeur=editeur.id_editeur 
												AND livre.id_livre=$id_livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$livre = $sth->fetch(PDO::FETCH_ASSOC);*/
	}



// if(@$_GET['id']!=""){
			// $id_livre=$_GET['id'];
				
			

			 $sql = "select logolivre  FROM livre WHERE id_livre=$id_livre";
			 $sth = $dbco->prepare($sql);

			 $sth->execute();
			 $result = $sth->fetch(PDO::FETCH_ASSOC);

			// $id_bibliotheque=$result['id_bibliotheque'];
			// $titre=$result['titre'];
			// $genre=$result['genre'];
			 $logo=$result['logolivre'];
		
				 // $action=$route['updatelivre'];
				 // $titreForm=" MODIFIER LIVRE ";
		// }
		// else {
			// $action=$route['createlivre'];
			// $titreForm=" AJOUT DU LIVRE ";
			
		// }
			// /*REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES */ 
			// /************************************/
			
			// $sql = "select id_bibliotheque, nom FROM bibliotheque";
			// $sth = $dbco->prepare($sql);
			// $sth->execute();
			// $result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 // foreach ($result as $biblio => $val){
				 // @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
				 // /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 // }


			// /*REQUETE LISTE DE TOUS LES AUTEURS */ 
			// /************************************/
			
			// $sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
			// $sth = $dbco->prepare($sql);
			// $sth->execute();
			// $result = $sth->fetchAll(PDO::FETCH_ASSOC);
			// foreach ($result as $auteur => $val){
				 // @$optiona .="<option value='".$val['id_auteur']."'>".$val['auteur_nom']." ".$val['prenom']."</option>";
				
			 // }
			 
			 
			 // /*REQUETE LISTE DE TOUS LES EDITEURS */ 
			 // /*************************************/
			 
			// $sql = "select id_editeur, nom as editeur_nom FROM editeur";
			// $sth = $dbco->prepare($sql);
			// $sth->execute();
			// $result = $sth->fetchAll(PDO::FETCH_ASSOC);
			// foreach ($result as $auteur => $val){
				 // @$optione .="<option value='".$val['id_editeur']."'>".$val['editeur_nom']."</option>";
				
			 // }
			 


?>



<h1>FORMULAIRE D'EMPRUNT</h1>

        
		<div class="container">
        <form class="formfront" action="?page=emprunter" method="post" enctype="multipart/form-data">
		<!--<form action="template/emprunter.php" method="post" enctype="multipart/form-data">-->
		
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$id_livre;?>">
		 
		<!-- <div class="c100">
			<img  class="card-img-top" src='uploads/".<?php echo $logo?>."'></img>
			  </div>-->
			
		 <div class="c100"><label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo @$titre;?>" readonly>
            </div>	
			
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
			</div>
			
			
			<div class="c100">
                <label for="nom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
			
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse">
            </div>
			
            <div class="c100">
                <label for="telephone">Téléphone : </label>
                <input type="text" id="telephone" name="telephone">
            </div>
			
               

            <div class="c100" id="submit">
                <input type="submit" value="Valider">
            </div>
        </form>
		</div>
