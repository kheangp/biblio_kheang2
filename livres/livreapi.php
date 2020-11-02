<?php
	 
	 
	//include "../includes/database.php";
	//include "../includes/functions.php";
 
 /*
	$titre = securisation(@$_GET['term']);
	$sql = "SELECT * FROM livre WHERE titre LIKE '%".$titre."%'";
    $sth = $dbco->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
    $livreList=array();
	
  /*pour version PHP >7.3 car sinon json_encode marche pas
    foreach ($result as $row => $livre) 
	{
		$livreList[]=$livre;
    }
	$data=json_encode($result);
    print_r($data
	
	*/
	/*
	$json="[";
    $i=0;
    foreach ($result as $row => $livre) {
      if($i>0)$json .=",";
       $json .="{";
        $livreList[]=$livre;
        $json .='"id_livre":"'.$livre['id_livre'].'"';
        $json .=',"titre":"'.$livre['titre'].'"';
       $json .="}";
      $i++;
     }
     $json .="]";
  echo $json;
  */
  ?>
  <?php
//phpinfo();
include "../includes/database.php";
 include "../includes/functions.php";
  $titre = securisation(@$_GET['term']);
 $sql = "SELECT * FROM livre WHERE titre LIKE '%".$titre."%'";

    $sth = $dbco->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $livreList=array();
    $json="[";
    $i=0;
    foreach ($result as $row => $livre) {
      if($i>0)$json .=",";
       $json .="{";
        $livreList[]=$livre;
        $json .='"id":"'.$livre['id_livre'].'"';
        $json .=',"value":"'.$livre['titre'].'"';
       $json .="}";
      $i++;
     }
     $json .="]";


  echo $json;

?>
