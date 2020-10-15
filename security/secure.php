
	
	

<?php


// @session_start();
	// include "../includes/define.php";
	
	
	// /* si l'utiliseur est nul ou si c'est un admninistrateur */
	// if(@$_SESSION["user_firstname"]=="" || @$_SESSION["role"]!="administrateur" )
	// {
		
		// if(file_exists($homepage))
		// {
			
			// header("location:".$homepage);
		  // exit();
		// }
		
	// }
	
	@session_start();

	if(file_exists("../includes/define.php"))

	{

		include "../includes/define.php";

	}

	else {

		include "includes/define.php";

	}

/* si l'utiliseur est nul ou si c'est un admninistrateur */
	if(@$_SESSION["user_firstname"]=="" || @$_SESSION["role"]!="administrateur" ){

		

		if(file_exists($homepage)){

			

			header("location:".$homepage);

		}

		else {

			header("location:".$homepage2);

		}

	   exit();

	}

