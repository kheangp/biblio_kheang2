<?php
		include "../includes/database.php";
// $servname = "localhost"; $dbname = "bd_kheang_biblio"; $dbuser = "root"; $dbpass = "";

  if(@$_POST['id_bibliotheque']!=""){
	  $id_bibliotheque = $_POST['id_bibliotheque'];

			$nom=$_POST['nom'];

			$adresse=$_POST['adresse'];

			$telephone=$_POST['telephone'];
try{

	

// $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);

// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE bibliotheque set nom=:nom, adresse=:adresse, telephone=:telephone WHERE id_bibliotheque=:id_bibliotheque";

$sth = $dbco->prepare($sql);

$params=array(

                                

                                    ':nom' => $nom,

                                    ':adresse' => $adresse,

									':telephone' => $telephone,

                                    ':id_bibliotheque' => $id_bibliotheque

									);
$sth->execute($params);

  header('Location: ../admin/starter.php?page=bibliolist');      

}
catch(PDOException $e){

echo "Erreur : " . $e->getMessage();

}
  }
 ?>