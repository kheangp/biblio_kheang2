<?php

	
		
	if(@$_GET['id']!=""){
		@$id_livre=$_GET['id'];
		@$titre=$_GET['title'];
				

			 $sql = "SELECT logolivre  FROM livre WHERE id_livre='$id_livre'";
			 $sth = $dbco->prepare($sql);

			 $sth->execute();
			 $result = $sth->fetch(PDO::FETCH_ASSOC);

			 $logo=$result['logolivre'];
	}
?>



<h1>FORMULAIRE D'EMPRUNT</h1>

        
		<div class="container">
        <form class="formfront" action="?page=emprunter" method="post" enctype="multipart/form-data">
		<!--<form action="template/emprunter.php" method="post" enctype="multipart/form-data">-->
		
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$id_livre;?>">
		 
		 <div class="c100">
			<img  class="card-img-top" src='uploads/<?php echo $logo?>'></img>
			  </div>
			
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
