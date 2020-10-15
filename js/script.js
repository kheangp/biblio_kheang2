$(document).ready(function()
{
	

// $('#formlogin').onsubmit(function(){
							// if( $('#login')==""||$('#password'))
							// {
								// alert ("Saisir les 2 champs");
								// $(document).html=load;
							// }
							
								
							
// });


	var chargement=$('.chargement'),

			design=$('#design'),
			
			development=$('#development');
		
	
	design.click(function() {
		chargement.load("page1.php");
		
		
    }); 
	
    development.click(function() 
	{
		chargement.load("page2.php");
      
    });
	
	/**** fonction compteur animé*/
	/*VERSION 1*/
	/*function update_users_count() 
	{
		$('.compteur b').animate({
				counter: 3568 }, {
									duration: 6000,
									easing: 'swing',
									step: function(now) {
										$(this).text(Math.ceil(now)+"+");
									},
									complete: update_users_count
			});
	};

	update_users_count();
*/


	/*VERSION 2*/
	var counter = 3568;

	function compteur_anim() 
	{
		$('.compteur b').animate(
			{ counter: counter}, {
								duration: 1000,
								easing: 'swing',
								step: function(now) 
										{
											$(this).text(Math.ceil(now)+"+");
										}, 
								complete: compteur_anim
			});
	};

	compteur_anim() ;

				
	$(".zone9").mouseenter(function(){
				
        $("#affiche").animate({paddingRight: "10%"},1000),				
		
		$(".childpic").animate({paddingLeft:"10%"},1000);

                 
    });


			/************************/
			/* ACENSCEUR            */
			/************************/
			
			$("#ascenseur").click(function(){
  // $("div").scrollTop();
  //$(window).scrollTop(0);
  $(windows).scrollBy(0, top);
});
	
			
			
			
	});

