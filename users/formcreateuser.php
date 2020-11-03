
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	
	
	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<title>FORMULAIRE</title>
	</head>
	
	<body>
	
	<div class="container  ">
	<h1>Formulaire Ajout USER</h1>
	<div class="row">
		<div class="col-2"></div>
		
		<div class="col border border-secondary">
		
         <form id="formulaire" method="POST" action="<?php echo $route['createuser']?>">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
			
			<div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
			
			
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" class="form-control"id="mail" name="mail">
				<span id='error_mail' style="color:red"> </span>
				<small id="" class="form-text text-muted">Saisir un email non utilisé.</small>
            </div>
			
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
			
            <div class="c100">
                <input type="radio"  id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio"  id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio"  id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
			
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
			 	
			<div class="c100">
                <label for="password">Mot de passe : </label>
                <input type="text" id="password" name="password">
				<span id='error_password' style="color:red"> </span>
					<small id="passwordHelp" class="form-text text-muted">Plus de 8 caractères.</small>
			</div>		
					
			 <div class="c100">
                <label for="repassword">Re Mot de passe : </label>
                <input type="text" id="repassword" name="repassword">
					<span id='error_repassword' style="color:red"> </span>
            </div>
			
            <div class="c100" id="submit">

                <input  type="submit" value="Envoyer">
            </div>
			
        </form>
		
		</div>
		<div class="col-2"></div>
	</div>
</div>

		





<script>

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

$(document).ready(function(){
	
	/***********************************************/
	 /* TRAITEMENT Email						   */
	 /**********************************************/
	 

	$("#mail").on("blur",function(){
	 
	 var $mail= $("#mail").val();
	 
		if(validateEmail($mail))
		{
			
			$.ajax(	{

					 url : '../api/checkemail.php',
					   type : 'GET',
					   data:'mail='+$("#mail").val(),
					   
					   dataType : 'text',
					   success : function(resultat, statut){
						
							if(resultat=="OK"){
								//Mettre la bordure+ texte en vert
								$("#mail").css({color :'green', borderColor :'green'});
								$('#error_mail').html("");
							}
							else if(resultat=="KO"){
								//Mettre la bordure + texte en rouge
									$("#mail").css({color :'red', borderColor :'red'});
									$('#error_mail').html("Email already exist");
							}
					   }, 
					   
					   error : function(resultat, statut, erreur){
							alert(resultat);
						},

						complete : function(resultat, statut){

						}


				});
		}
		else 
		{
			$('#mail').focus(); /*cadre colore*/
			$('#error_mail').html("Email non Valide");
		}
	 
	});

 
 	 
	 /***********************************************/
	 /* TRAITEMENT password							*/
	 /***********************************************/
	
	

	$("#password").on("input",function()
	{
	 
		var $password= $("#password").val();
		 
	
			$.ajax(	{ 

						 url : '../api/validatepassword.php',
						   type : 'GET',
						   data:'password='+$("#password").val(),

						   
						   dataType : 'text',
						   success : function(resultat, statut){
								
								if(resultat=="valid"){
									//Mettre la bordure+ texte en vert
									$("#password").css({color :'green', borderColor :'green'});
									$('#error_password').html(" ");
								}
								else if(resultat=="unvalid")
								{
									//Mettre la bordure + texte en rouge
										$("#password").css({color :'red', borderColor :'red'});
										$('#error_password').html("password trop court");
								}
								
								
						   }, 
						   
						   error : function(resultat, statut, erreur){
								alert(resultat);
							},

							complete : function(resultat, statut){

							}
							
							
		 

					});
		
			
				
	});
			
			
			
			$("#repassword").on("input",function(){
				var $password= $("#password").val();
				var $repassword= $("#repassword").val();

									
				if($password==$repassword)
				{
					$("#repassword").css({color :'green', borderColor :'green'});
					$('#error_repassword').html("");
				}
				 
				 else
				 {
						$("#repassword").css({color :'red', borderColor :'red'});
						$('#error_repassword').html("password non identiques");
				}
								
								
		});
		
	});


</script>