<?php

	include "../includes/database.php";
	
	$id_editeur=$_GET['id'];
	
	$sql = "SELECT * FROM editeur WHERE id_editeur='$id_editeur'";
	
	$sth = $dbco->prepare($sql);$sth->execute();
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	$nom=$result['nom'];
	$adresse=$result['adresse'];
?>

​	<link href="../css/style.css" rel="stylesheet" >
	
    <div class="container">
		<h1>Formulaire Modification Editeur</h1>
        <form action="<?php echo $route['updateediteur']?>" method="post">
		<input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo $id_editeur;?>">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
            
			<div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
	</div>
