<?php

		// $servname = "localhost"; $dbname = "bd_kheang_biblio"; $dbuser = "root"; $dbpass = "";
				
		include "../includes/define.php";
?>
<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet" >
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>

	<body>



        <div class="container">
		<h1>CREATION BIBLIOTHEQUE</h1>
        <form action="<?php echo $route['createbiblio'];?>" method="post">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="adresse">adresse : </label>
                <input type="text" id="adresse" name="adresse">
            </div>
            <div class="c100">
                <label for="telephone">Téléphone : </label>
                <input type="text" id="telephone" name="telephone">
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		
		
		
</div>


</body>
</html>