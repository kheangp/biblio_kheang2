<?php
include "../includes/database.php";

$id_lecteur=$_GET['id'];

$sql = "SELECT * FROM lecteur WHERE id_lecteur='$id_lecteur'";

$sth = $dbco->prepare($sql);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);


		$nom=$result['nom'];
		$prenom=$result['prenom'];

		$adresse=$result['adresse'];

		$telephone=$result['telephone'];

?>	     


	<link href="../css/style.css" rel="stylesheet" >
	

	
    <div class="container">
		<h1>Formulaire Modification Lecteur</h1>
        <form action="<?php echo $route['updatelecteur'] ?>" method="post">
		<input type="hidden" id="id_lecteur" name="id_lecteur" value="<?php echo $id_lecteur;?>">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
			<div class="c100">
                <label for="nom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
            <div class="c100">
                <label for="telephone">Téléphone: </label>
                <input type="number" id="telephone" name="telephone" value="<?php echo $telephone;?>">
            </div>
			
			<div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
	</div>
