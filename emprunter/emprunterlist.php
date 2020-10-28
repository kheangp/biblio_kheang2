<DOCTYPE! html>

<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../css/style.css" rel="stylesheet" >
	</head>
        <title>Liste des emprunts</title>

        <meta charset='utf-8'>

    </head>
  
    <body>

     <h1>Récapitulatif des emprunts</h1> 
		
	<div class="container">
		<div class="row col-md-12 col-md-offset-2 ">
			
			<table class="table table-striped custab"> 	
				<thead>
					<tr>
						<th>ID emprunt</th>
						<th>Date d'emprunt</th>
						<th>ID livre</th>
						<th>Titre</th>
						<th>Nom Bibliotheque</th>
						<th>ID Lecteur</th>
						<th>Nom Lecteur</th>
						<th>Prénom Lecteur</th>
						
						<!--<th  colspan="2">Action</th>-->
					</tr>
				</thead>
		<tbody>
		
        <?php
			include"../includes/database.php";
			include"../includes/define.php";
			
           // $servname = "localhost"; $dbname = "bd_kheang_biblio"; $user = "root"; $pass = "";
            
            try{
                // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                

                /*Sélectionne les valeurs dans la table emprunter pour chaque entrée de la table qui sont empruntés donc supprimer=0*/

                $sth = $dbco->prepare("SELECT emprunter.id_emprunter, emprunter.date_emprunt, livre.id_livre, livre.titre, bibliotheque.nom as bibliotheque_nom, lecteur.id_lecteur, lecteur.nom as lecteur_nom, lecteur.prenom as lecteur_prenom
										FROM emprunter, bibliotheque, lecteur, livre
										WHERE emprunter.id_livre=livre.id_livre
												AND emprunter.id_lecteur=lecteur.id_lecteur 
												AND livre.id_bibliotheque=bibliotheque.id_bibliotheque
												AND emprunter.supprimer=false ");
												

                $sth->execute();
		
                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $emprunt = $sth->fetchAll(PDO::FETCH_ASSOC); /* tableau associatif  correspond à tableau avec chaines de caracteres en indice et non plus des nombres */
		  
		  											

                $sth->execute();
				foreach ($emprunt as $row => $emp) 
				{
					
					/*
					 foreach ($biblio as $bi => $val){
						echo "<td>". $val."</td>";  
					 }*/
						echo "<td>".$emp['id_emprunter']."</td>";
						echo "<td>". date("d-m-Y",strtotime($emp['date_emprunt']))."</td>";						
						echo "<td>". $emp['id_livre']."</td>"; 
						echo "<td>". $emp['titre']."</td>"; 
					
						echo "<td>". $emp['bibliotheque_nom']."</td>"; 
						echo "<td>". $emp['id_lecteur']."</td>"; 
						echo "<td>". $emp['lecteur_nom']."</td>"; 
						echo "<td>". $emp['lecteur_prenom']."</td>"; 
						/*
						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formemprunt&id=".$emp['id_emprunter']."'>Modifier</a></td>";
						
						
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deleteemprunt']."?id=".$emp['id_emprunter']."'><span class='glyphicon glyphicon-remove'>Retourner</a></td>";	

						*/		

						
					echo "</tr>";
					

				}
			

                /*print_r permet un affichage lisible des résultats,

                 *<pre> rend le tout un peu plus lisible*/
            }
            catch(PDOException $e){

                echo "Erreur : " . $e->getMessage();

            }

        ?>
		</tbody>
	</table>
</div> 
</div>
    </body>

</html>