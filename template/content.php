<?php
   include "includes/database.php";
   include "includes/define.php";
?>

<main>

<div class="container-fluid">
	<section class="zone0">
		<div class="row pt-5 ">
			<div class="col"></div>
			<div class="col-6 text-center">
				<div class="col-12 p-3"><h1>The smartest and the most flexible Bootstrap template</h1></div>
				<div class="col-12 text-secondaryp-3 "><h4>Create exactly what you need with our powerful Bootstrap toolkit.</h4></div>
				<div class="col-12 p-3">
					<a href="home"  class="btn btn-success text-light mx-2 p-3" >Buy Intense Now</a>
					<a href="home"  class="btn text-light p-3" id="journey">Start a journey</a>
				</div>
			</div>
			<div class="col"></div>
		</div>
	</section>



	<section class="zone1">
		<div class="row mt-5 pt-5">
			<div class="col-5 align-self-center">
				<div class="col-12 text-success py-3"><h5>Novi Builder</h5></div>
				<div class="col-12 py-3"><h1>	Start building visually	</h1></div>
				<div class="col-12 text-secondary py-3">Easily change any element of Intense with the best visual drag and drop builder.</div>
			</div>
			<div class="col-7"><img src="images/image-33.gif">
			</div>
		</div>
	</section>	


	<section class="zone2">
		<div class="container ">
			<div class="row">	
				<div class="col-6">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="col carousel-inner">
							<div class="carousel-item active">
								<img src="images/image-34.png" class="d-block w-100" alt="sliders image">
							</div>
							<div class=" carousel-item">
								<img src="images/image-35.png" class="d-block w-100" alt="Content Blocks image">
							</div>
							<div class=" carousel-item">
							  <img src="images/image-36.png" class="d-block w-100" alt="Websites image">
							</div>
						</div >
					</div>
  
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="col-6">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators ">
							<button type="button" data-target="#carouselExampleControls" data-slide-to="0" class="btn btn-light text-dark "><h1>Sliders</h1></button>
							<button type="button" data-target="#carouselExampleControls" data-slide-to="1" class="btn btn-light text-dark"><h1>Content Blocks</h1></button>
							<button type="button" data-target="#carouselExampleControls" data-slide-to="2" class="btn btn-light text-dark"><h1>Websites</h1></button>
					  </ol>
					<!--<div class="col carousel-inner">  -->
						<!-- <div class="carousel-item ">
							<img src="images/y.png" class="d-block w-100" alt="...">
					  	</div>
						<div class=" carousel-item">
							<img src="images/image-35.png" class="d-block w-100" alt="...">
						</div>
						<div class=" carousel-item">
							<img src="images/image-36.png" class="d-block w-100" alt="...">
						</div>
					</div >-->
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="zone3">
			<div class="row justify-content-center"><h1> Check out other themes based on Intense</h1></div>
			<div class="row">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active ">
						<a class="nav-link" href="#.listehome">Homepages <div class="mborders"></div></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#.listeskin">Skins<div class="mborders"></div></a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="container text-center justify-content-center ">
					<div class="row">
					<?php
							include 'livres/livrelisth.php';
					?>
					</div>
				</div>
			</div>
		</div>
	</section> 
		
	<section> 
		<div class="row zone4"></div>
	</section> 
	
	<section> 
	<div class="zone5 ">
		<div class="row justify-content-center">
			<img class="image38 " src="images/image-38.png"	/>
		</div>
		<div class="row justify-content-center">
			<h4><table>
				  <tbody>
					<tr>
					  <td><h1>Trusted by</h1></td>
					  <td class="compteur"><h1><b counter="0">0</h1></b></td>
					  <td><h1>users</h1></td>
					  
					</tr>
				  </tbody>
				</table></h4>
			<br>
		</div>
		<span class="text-secondary text-center "><h5>Read the most popular reviews submitted by our customers.</h5></span>
		
		<div class="row justify-content-center ">
			<a href="#"  class="btn btn-dark text-light mt-3 p-3" role="button" >More Testimonials</a>
		</div>
	</div>
	</section> 
	
	
	<section> 
		<div class="row zone6 justify-content-between m-5">
			<div class="row  listetem">
				<div class="col">
					<div class="row"><img src="images/etoile.png"/>"Intense is full of great details and very useful tools. The template code is clear and easy-to-edit. Moreover, it is well-documented and supported."
					<img class="temoin" src="images/person1.jpg"/>Kevin Davis<br>client</div>
				</div>
				<div class="col">
					<div class="row"><img src="images/etoile.png"/>"It is a great template with everything my website needed. It took me a few hours to figure all out but it was worth the investment.","
					<img class="temoin" src="images/person2.jpg"/>Paul Sanders<br>client</div>
				</div>
				<div class="col">
					<div class="row"><img src="images/etoile.png"/>This template has lots of preconfigured child themes, effects, and components. It is a great choice if you need a customizable website."
					<img class="temoin" src="images/person3.jpg"/>Helen Wright<br>client</div>
				</div>
			</div>
		</div>
	</section> 
		
		
		
	<section> 
		<div class="row zone7">
			<div class="col-6 align-self-center pl-5 ">
				<h2>Intense is exactly what you need </h2>Check out an incredible set of features provided by Intense
			</div>
			<div class="col"></div>
			<div class="col-3 align-self-center">
				<a href="#"  class="btn text-light justify-content-end p-3" id="intense" >Buy Intense Now</a>
			</div>
		</div>
	</section>
	
	
	
	<section id="features">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="row ">
					<div class="col-5 menu ">
						<div class="col-12 text-dark"><h1>Even more features available</h1></div>
						<div class="col-12 text-secondary"><h5>Take a look at an extensive list of features
									that our template has to offer.</h5></div>
					</div>
					<div class="col-7 ">
						<div class="container" id="nav">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="#features" id="design"><h4>Design</h4> <div class="mborders"></div></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#features" id="development" ><h4>Development</h4><div class="mborders"></div></a>
								</li>
							</ul>
						</div>
						<div class=" chargement"></div>
					</div>
				</div>
			</div>
		</nav>
	</section>
	
	
		

	<section>
	<div class="container-fluid zone9 bg-light">
		<div class="row" id="affiche" >
			<div class="col-7 childpic"><img src="images/image-37-690x730.png" alt="image child theme" />
			</div>
			<div class="col-5">
				<div class="row justify-content-center"><h5>
					<div class="col-12 text-success">Child themes
					</div>
					<div class="col-12 text-dark"><h1>A wide variety of child themes for your website</h1>
					</div>
					<div class="col-12 text-secondary">Choose from a variety of Child themes and use any of them for your website.
					</h5></div>
				</div>
			</div>
		</div>
	</div>
		</section>
		
		
		
		<section id="bas">
		
		<div class="container pt-5 ">
			<div class="row mx-auto ">
				<div class="col"> <!-- partage les 6 colonnes restantes en parties égales ici col-3 -->
				</div>
				<div class="col-6">
					<!-- <div class="row z3title2  ">  -->
						<div><h2>Discover the latest trends in web design and development</h2></div>
						<br>
						<div>Trying to stay on top of it all? Get the best tools, resources and inspiration sent to your inbox weekly.</div>
						<br>
						<div class="row justify-content-center">
						<form ><input id="email" type="text" value="Enter your email address" /><button class="btn btn-success m-2 p-2" type="submit">Subscribe</button></form></div>
					<!-- </div> -->
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	
	
	
			<div class="container pt-5">
						<div class="row" >
							<div class="col-6">	Pages
								<ul class="titreliste pl-3" id="listepage">	
									<li><a href="#">404 page</a></li>
									<li><a href="#">503 page</a></li>
									<li><a href="#">About us 2</a></li>
									<li><a href="#">About me</a></li>
									<li><a href="#">About me 2</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Our team 2</a></li>
									<li><a href="#">Team member</a></li>
									<li><a href="#">Team member 2</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">FAQ 2</a></li>
									<li><a href="#">FAQ 3</a></li>
									<li><a href="#">FAQ 4</a></li>
									<li><a href="#">Contact me</a></li>
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Contact us 2</a></li>
									<li><a href="#">Contact us 3</a></li>
									<li><a href="#">Get in touch</a></li>
									<li><a href="#">Subscribe</a></li>
									<li><a href="#">Sitemap</a></li>
									<li><a href="#">Coming soon</a></li>
									<li><a href="#">Search results</a></li>
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Appointment</a></li>
									<li><a href="#">Appointment 2</a></li>
									<li><a href="#">Maintenance</a></li>
									<li><a href="#">Clients</a></li>
									<li><a href="#">Under construction</a></li>
									<li><a href="#">Privacy policy</a></li>
								</ul>
						
							</div>
							<div class="col-6">	Components		
								<ul class="titreliste pl-3" id="listecomp">
									<li><a href="#">Accordions</a></li>
									<li><a href="#">Alerts</a></li>
									<li><a href="#">Animations</a></li>
									<li><a href="#">Breadcrumbs</a></li>
									<li><a href="#">Buttons</a></li>
									<li><a href="#">Calls to action</a></li>
									<li><a href="#">Comments</a></li>
									<li><a href="#">Offer boxes</a></li>
									<li><a href="#">Counters</a></li>
									<li><a href="#">Dividers</a></li>
									<li><a href="#">Widgets</a></li>
									<li><a href="#">Form elements</a></li>
									<li><a href="#">Grid system</a></li>
									<li><a href="#">Blurbs</a></li>
									<li><a href="#">Icons</a></li>
									<li><a href="#">Infographics</a></li>
									<li><a href="#">Badges</a></li>
									<li><a href="#">Lists</a></li>
									<li><a href="#">Maps</a></li>
									<li><a href="#">Media elements</a></li>
									<li><a href="#">Persons</a></li>
									<li><a href="#">Pagination</a></li>
									<li><a href="#">Posts</a></li>
									<li><a href="#">Pricing and plans</a></li>
									<li><a href="#">Tables</a></li>
									<li><a href="#">Tabs</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Text rotator</a></li>
									<li><a href="#">Thumbnails</a></li>
									<li><a href="#">Countdowns</a></li>
									<li><a href="#">Typography</a></li>
								</ul>
							</div>
						</div>
		
					</div>
				
			
		</section>
		
		
</div>
</main>