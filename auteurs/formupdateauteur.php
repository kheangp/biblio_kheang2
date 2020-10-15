<?php
		include "../includes/database.php";
		include "../includes/define.php";
		
		$id_auteur=$_GET['id'];
		
		$sql = "SELECT * FROM auteur WHERE id_auteur='$id_auteur'";
		$sth = $dbco->prepare($sql);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		$nom=$result['nom'];
		$prenom=$result['prenom'];
		$nationalite=$result['nationalite'];
?>


	<link href="../css/style.css" rel="stylesheet" >
	
    <div class="container">
		<h1>Formulaire Modification Auteur</h1>
        <form action="<?php echo $route['updateauteur'];?>" method="post">
		<input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo $id_auteur;?>">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="prenom">Adresse : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
            <div class="c100">
                <label for="nationalite">Nationalité: </label>
                <input type="text" id="nationalite" name="nationalite" value="<?php echo $nationalite;?>">
            </div>
			
			<div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
	</div>
