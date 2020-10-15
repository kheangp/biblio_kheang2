<?php

	session_start();   // Démarrage ou restauration de la session
  
	session_destroy();   // Destruction de la session
	
	header("location:../homepage.php");