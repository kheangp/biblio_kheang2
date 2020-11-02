<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



<form action ="search" method="get" class="form-in-line">
		<div class="input-group">
			<input type="text" class="form-control" id="search_livre" placeholder="Titre du livre" name="search">
			
			<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">Rechercher</button>
			</div>
		</div>
		</form>

<script>

/**********************************************************************************************/
/* recherche semi-auto : propose les noms des livres de la BD contenant les caractères saisis */
/**********************************************************************************************/

$(document).ready(function(){
	
$("#search_livre").on('input',function(){ /*test quand on saisie un caractère dans la barre*/
})

	$("#search_livre").autocomplete({
			source: "livres/livreapi.php",   /* emplacement fichier qui traite l'affichage semi auto*/
			select: function( event, ui ) {
					event.preventDefault();
					$("#search_livre").val(ui.item.value); /* item et value nom des champs json dans livreapi.php */
			}

	});
});


</script>

		