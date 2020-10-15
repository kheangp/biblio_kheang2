<?php
		include "../includes/database.php";

  if(@$_POST['id_lecteur']!=""){
	  $id_lecteur = $_POST['id_lecteur'];

			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$adresse=$_POST['adresse'];

			$telephone=$_POST['telephone'];
try{

$sql = "UPDATE lecteur set nom=:nom, prenom=:prenom, adresse=:adresse, telephone=:telephone WHERE id_lecteur=:id_lecteur";

$sth = $dbco->prepare($sql);

$params=array(
                                    ':nom' => $nom,
									':prenom' => $prenom,
                                    ':adresse' => $adresse,
									':telephone' => $telephone,
                                    ':id_lecteur' => $id_lecteur
									);
$sth->execute($params);

  header('Location:../admin/starter.php?page=lecteurlist');      

}
catch(PDOException $e){

echo "Erreur : " . $e->getMessage();

}
  }
 ?>