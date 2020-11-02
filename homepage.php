<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/stylep.css" rel="stylesheet" >
	<link href="css/style.css" rel="stylesheet" >
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


	</head>

	<body>
	
	 <?php
	 
	 
            
            require_once 'template/navigation.php';
			
			
			
			require_once 'includes/functions.php';
			@$page=securisation($_GET["page"]);
			if($page=="" || $page=="content")
			{
			   include 'template/content.php';
			}
			else if($page=="livre"){
			  include 'template/livre.php';
			}
			
			
		    require_once 'template/footer.php';
           
		   
            
     ?>
		

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/icons.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.color-2.1.2.js"></script>
	<!--<script src="../js/owl.carousel.min.js"></script>-->
	
	</body>


</html>
