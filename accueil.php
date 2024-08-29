<!DOCTYPE html>
<html lang="fr">
<head>
	<title>BOUTIQUE EN LIGNE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- header -->
	<section id="header">
		<div class="logo">
			<img src="images/logo.png">
		</div>
		<div class="nav">
			<ul>
				<li><a href="#">Accueil</a></li>
				<li><a href="#boutique">Boutique</a></li>
				<li><a href="#a propos">A propos</a></li>
				<li><a href="#s'identifier">login</a></li>
				<li><a href="#contact">Contact</a></li>
				<a href="cart.html"><img src="images/cart.png" alt="" style="width: 30px;height: 30px;"></a>
			</ul>
		</div>
	</section>
	<!-- fin header -->
	<!-- Corps -->
	<section id="corps">
		<!-- banniere -->
		<div class="ban">
			<img src="images/ban3.PNG">
		</div>
		<!-- fin banniere -->
		<!-- Boutique -->
		<div class="boutique">
			<h5 id="boutique">Decouvrez nos categories</h5>
			<div class="contain">
				<div class="categories">
					<ul>
						<li><a href="php/immo/immo.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
							<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
						  </svg>Immobilier</a></li>
						<li><a href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
							<path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
						  </svg>Multimedia</a></li>
						<li><a href="#"><i class="fa fa-bicycle" aria-hidden="true"></i>Articles de Sport</a></li>
						<li><a href="#"><i class="fa fa-female" aria-hidden="true"></i>Mode & Beauté</a></li>
						<li><a href="#"><i class="fa fa-medkit" aria-hidden="true"></i>Sante</a></li>
						<li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i>Services</a></li>
						<li><a href="#"><i class="icon ed-cat-food"></i>Agroalimentaire</a></li>
						<li><a href="#"><i class='fas fa-paw'></i>Animaux</a></li>
						<li><a href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hammer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.812 1.952a.5.5 0 0 1-.312.89c-1.671 0-2.852.596-3.616 1.185L4.857 5.073V6.21a.5.5 0 0 1-.146.354L3.425 7.853a.5.5 0 0 1-.708 0L.146 5.274a.5.5 0 0 1 0-.706l1.286-1.29a.5.5 0 0 1 .354-.146H2.84C4.505 1.228 6.216.862 7.557 1.04a5.009 5.009 0 0 1 2.077.782l.178.129z"/>
							<path fill-rule="evenodd" d="M6.012 3.5a.5.5 0 0 1 .359.165l9.146 8.646A.5.5 0 0 1 15.5 13L14 14.5a.5.5 0 0 1-.756-.056L4.598 5.297a.5.5 0 0 1 .048-.65l1-1a.5.5 0 0 1 .366-.147z"/>
						  </svg>Materiaux,Outils & Equipements</a></li>
						<li><a href="#">...Autres categories</a></li>
					</ul>
				</div>
				<div class="details">
					<div class="shop">
					    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img src="images/ban10.png" class="d-block w-100" alt="...">
							  </div>
							  <div class="carousel-item">
								<img src="images/ban11.jpg" class="d-block w-100" alt="...">
							  </div>
							  <div class="carousel-item">
								<img src="images/ban9.png" class="d-block w-100" alt="...">
							  </div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>
					</div>
					<div class="aside1">
						<img src="images/ban9.png" alt="">
					</div>
					<div class="aside2">
						<img src="images/ban8.PNG" alt="">
					</div>
			</div>
		</div>
		<!-- fin boutique -->
		<div class="small-container">
		<h5>PRODUITS POPULAIRES</h5>
			<div class="row">
				<div class="col-4">
				<a href="details.html"><img src="images/category-1.jpg" alt=""></a>
					<h4>Laptop hard Memory</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p>10000fcfa</p>
				</div>
				<div class="col-4">
					<img src="images/category-2.jpg" alt="">
					<h4>Laptop hard Memory</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p>10000fcfa</p>
				</div>
				<div class="col-4">
					<img src="images/category-3.jpg" alt="">
					<h4>Laptop hard Memory</h4>
					<div class="rating">
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-half-o" aria-hidden="true"></i>
					</div>
					<p>10000fcfa</p>
				</div>
			</div>
		</div>
		<!-- A propos -->
		<h5 id="a propos">A propos</h5>
		<div class="about">
			<div class="profil">
				<img src="images/laye.jpg" alt="profil">
				<h1>Abdoulaye FAYE</h1>
				<p style="text-align: center;">Apprenti Developpeur Web</p>
			</div>
			<div class="qsj">
				<h2>Developpeur Freelance<br>Manager des Systèmes d'information</h2>
				<p>Etudiant en licence 3 Management Informatisé des Organisations (MIO) à <abbr title="L'universite Assane SECK de Ziguinchor">UASZ</abbr>.
				Natif de Dakar, Ma passion, le développement web, j’aime tout ce qui touche le web, de près ou de loin :
			 apprendre de nouveaux langages, j'ai un besoin insatiable d'apprendre, et j'adore ça.<br>Je vous invite à jeter un coup d'oeil
			 sur mon profil pour plus d'informations sur mes formations, mes compétences et  même  mes expériences.</p>
			 <button type="button" name="button" class="btn btn-info" style="border-radius:20px;"><a href="FAYA_2.0/perso.html" target="_blank">Plus...</a></button>
			</div>
		</div>
		<!-- fin a propos -->
		<!-- Contact -->
		<h5 id="s'identifier">Connexion</h5>
		<div class="contact">
			<div class="ident">
				<img src="images/logo.PNG" alt="mylogo" srcset="" class="img-thumbnail">
			</div>
			<div class="paraf">
				<h3>Se connecter</h3>
				<p>Vous êtes un nouvel utilisateur?<br>Cliquez <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ICI</button></p>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <h2 class="modal-title" id="exampleModalLabel">Creer un compte</h2>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						  <form>
							<div class="form-group">
							  <input type="text" class="form-control" name="email"  placeholder="Adresse e-mail ou Telephone">
							</div>
							<div class="form-group">							  
								<input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
							</div>
						  </form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  <button type="button" class="btn btn-info">Valider</button>
						</div>
					  </div>
					</div>
				  </div>
			</div>
				<form method="POST" action="">
					<div class="identifier">
						<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Adresse e-mail ou Telephone"  >
							</div>
							<div class="form-group">
								<input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
							</div>
							<div class="bouton">
							<button type="submit" class="btn" name="valider">S'identifier</button>
							</div>
							<p class="ici"><a href="#">Mot de passe oublié?</a> </p>
					</div>
				</form>
		</div>
		<!-- fin contact -->
		<!-- footer -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 footer-info">
						<h3>Diayma.com</h3>
						<p>Diayma.com est un site e-commerce qui a travers vous permet d'acheter ou vendre vos produits en toute simplicite
						Avec diayma, vous pouvez vendre et acheter a tout moment
						Lorsque vous voulez vendre, vous devrez necessairement creer un compte.</p>
					</div>
					<div class="col-lg-2 col-md-6 footer-links">
						<h4 id="contact">LIENS</h4>
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Boutique</a></li>
							<li><a href="#">A propos</a></li>
							<li><a href="#">Vendre</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contactez-nous</h4>
						<p>
							Pavillon E<br>
							UASZ,Ziguinchor<br>
							Senegal<br>
							<i class="fa fa-phone-square" aria-hidden="true"></i> <strong>Phone:</strong> +221 78 467 09 72<br>
							<i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>Email:</strong> faye54093@gmail.com<br>
						</p>
						<div class="social-links">
							<a href="#" class="twitter "><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#" class="facebook "><i class="fa fa-facebook"></i></a>
							<a href="#" class="instagram "><i class="fa fa-instagram"></i></a>
							<a href="#" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 footer-newsletter">
						<h4>Notre Newsletter</h4>
						<p> Inscrivez-vous au Newsletter pour recevoir a jour les nouveautes.!</p>
						<form accept="" method="post">
							<input type="email" name="email">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyright">
				&copy;Copyright <strong>Diayma.com</strong>. Tous droits reserves
			</div>
			<div class="credits">
				Designed by <a href="#">FAYA</a>
			</div>
		</div>
	</footer>
	</section>
	<!-- fin Corps -->
</body>
</html>
