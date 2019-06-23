<link rel="stylesheet" type="text/css" href="style.css">
<head>
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="style.css">

<style>
header{
	background:url(abc.jpg);
	background-size :cover;
	background-position: center;
	min-height:100%;
	max-width: 100%;
	}
	.section{
		padding-top: 4vw;
		padding-bottom: 4vw;
	}
@media screen and(max-width:80%){
	header{
		min-height:60%;
	            }
}
</style>
</head>
<body>
<header>

<nav class="nav-wrapper transparent ">
		<div class="container">
		<a href="index.php" class="brand-logo" style="font-family: arial;">Krishna Process</a>
		<a href="#" class="sidenav-trigger" data-target="mobile-links">
		<i class="material-icons">menu</i>
		</a>
		<ul class="right hide-on-med-and-down">
		<li><a href="products.php">Products</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<li><a href="contacts.php">Contact Us</a></li>
		</ul>
		</div>
	</nav>
	<ul class="sidenav" id="mobile-links">
		 <li><a href="index.php">Home</a></li>
		<li><a href="products.php">Products</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="aboutus.php">About US</a></li>
		<li><a href="contacts.php">Contact Us</a></li>
	</ul>
	 <!-- Compiled and minified JavaScript -->

   		 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
	 $(document).ready(function(){
    		$('.sidenav').sidenav();
    		 
 		 });
	</script>
</header>
<body>

	<!--our products-->
	<div class="container">
		<h3 style="text-align: center">Our Products</h3>

		
	</div>
	<!--Card-->
	<div class="container">
		<div class="row">
			<div class="col l4 m4 s12">
				<div class="card sticky-action">
			<div class="card-image">
				<img src="2.jpg" class="Materialboxed">
					<h4 class="card-title">SUN F</h4>
					<a class="btn  btn-floating halfway-fab pulse activator">+</a>
			</div>
				<div class="card-content">
					<h4>PRE Ink Rubber Stamp</h4>
				</div>
					<div class="card-reveal">
						<span class="card-title">SUN F <i class="right">X</i></span>
						<p> Size :- 25.56mm <br> Impraction :- 2,00,000 <br> Price :- 250</p>
					</div>
						<div class="card-action">
							<a href="1.html" class="btn">Create Now...</a>
						</div>
		</div>
			</div>
			<div class="col l4 m4 s12">
				<div class="card sticky-action">
			<div class="card-image">
				<img src="2.jpg" class="Materialboxed">
					<h4 class="card-title">SUN F</h4>
					<a class="btn  btn-floating halfway-fab pulse activator">+</a>
			</div>
				<div class="card-content">
					<h4>PRE Ink Rubber Stamp</h4>
				</div>
					<div class="card-reveal">
						<span class="card-title">SUN F <i class="right">X</i></span>
						<p> Size :- 25.56mm <br> Impraction :- 2,00,000 <br> Price :- 250</p>
					</div>
						<div class="card-action">
							<a href="1.html" class="btn">Create Now...</a>
						</div>
			</div>
			</div>
			<div class="col l4 m4 s12">
				<div class="card sticky-action">
			<div class="card-image">
				<img src="2.jpg" class="Materialboxed">
					<h4 class="card-title">SUN F</h4>
					<a class="btn  btn-floating halfway-fab pulse activator">+</a>
			</div>
				<div class="card-content">
					<h4>PRE Ink Rubber Stamp</h4>
				</div>
					<div class="card-reveal">
						<span class="card-title">SUN F <i class="right">X</i></span>
						<p> Size :- 25.56mm <br> Impraction :- 2,00,000 <br> Price :- 250</p>
					</div>
						<div class="card-action">
							<a href="1.html" class="btn" >Show More</a>
						</div>

			</div>
			

			</div>
			<a href="products.php"  style="float: right;">More...</a>
		</div>
	
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
	 document.addEventListener("DOMContentLoaded",function(){
	 	const gallery=document.querySelectorAll(".materialboxed");
	 	M.Materialbox.init(gallery,{});
	 });
	</script>
	<!--our services-->
	<div class="container">
		<h3 style="text-align: center;">Our Services</h3>
	</div>
	<div class="container services">



		<div class="row">
			<div class="col s12 m6 l3 center-align">
				<div class="card">
					<div class="card-content">
						<i class="material-icons large">aspect_ratio</i>
						<h4>Rubber Stamp</h4>
						<p>Create a perfect size for any rubber stamp. </p>
					</div>
					<div class="card-action"><a href="" class="btn"> Read More...</a></div>
				</div>
			</div>
				<!--card 2-->
			<div class="col s12 m6 l3 center-align">
				<div class="card">
					<div class="card-content">
						<i class="material-icons large">map</i>
						<h4> Pre Ink Stamp</h4>
						<p>Create a perfect size for any rubber stamp. </p>
					</div>
					<div class="card-action"><a href="" class="btn"> Read More...</a></div>
				</div>
			</div>
				<!--card 3-->
			<div class="col s12 m6 l3 center-align">
				<div class="card">
					<div class="card-content">
						<i class="material-icons large">insert_link</i>
						<h4>I-Card</h4>
						<p>Create a perfect size for any rubber stamp. </p>
					</div>
					<div class="card-action"><a href="" class="btn"> Read More...</a></div>
				</div>
			</div>
				<!--card 4-->
			<div class="col s12 m6 l3 center-align">
				<div class="card">
					<div class="card-content">
						<i class="material-icons large">palette</i>
						<h4>Bras Seal</h4>
						<p>Create a perfect size for any rubber stamp. </p>
					</div>
					<div class="card-action"><a href="" class="btn"> Read More...</a></div>
				</div>
			</div>


		</div>



	</div>

	
	<!--contact Us-->
	<div>
		<h4 style="text-align: center;">Contact Us</h4>
</div>

	</div>
	<br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d231.98104449900606!2d70.4627912!3d21.5195964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958018e3e12e13f%3A0xfe33a871ea8e155e!2sMaliwada+Rd%2C+Junagadh%2C+Gujarat+362001!5e0!3m2!1sen!2sin!4v1560492276596!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	<!--form-->
	<section class="section container" id="contact">
		<div class="row">
			<div class="col s12 l5">
				<h2 class="indigo-text text-darken-4">Get In Touch</h2>
				<p> <i class="material-icons prefix">home</i>  Maliwada Road, Junagadh</p>
				<p> <i class="material-icons prefix">phone</i> Mo:- +91 9106814167</p>
				<p> <i class="material-icons prefix">mail</i>  E-mail:- kanu@yahoo.in</p>
			</div>
			<div class="col s12 l5 offset-l2">
				<form method="post">
					<div class="input-field">
						<i class="material-icons prefix">cloud</i>
						<input type="text" id="text">
						<label for="text">Enter Name</label>
					</div>
					<div class="input-field">
						<i class="material-icons prefix">mail</i>
						<input type="email" id="email">
						<label for="email">Enter E-mail</label>
					</div>
					<div class="input-field">
						<i class="material-icons prefix">phone</i>
						<input type="text" id="text">
						<label for="text">Enter Number</label>
					</div>
					<div class="input-field">
						<i class="material-icons prefix">message</i>
						<textarea id="message" class="materialize-textarea" cols="30" rows="10"></textarea>
						<label for="message">Enter Message</label>
					</div>
					<div>
						<a href="#" class="btn">Send</a>
					</div>
				</form>
			</div>
		</div>
		
	</section>

</body>
