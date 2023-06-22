<?php 

include('verification.php'); 

?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>VVA - Accueil</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="dist/style.css">
        <link rel="icon" type="image/x-icon" href="images\logo-blanc-1.png">
	</head>
	<body>
		<header>
			<div class="logo">
				<a href="index.html"><img src="images\logo-blanc-2.png" height="auto" width=""></a>
			</div>
			<div class="deroulant">
				<ul id="menu-demo2">
                    
				<li><a href="#">H&eacute;bergements</a>
						<ul>
							<li><a href="hebergement.html" class="menu">Consulter</a></li>
						</ul>
					</li>
					<li><a href="#">Compte</a>
						<ul>
                        <?php if(isset($_SESSION['email']) == true){
                        
                         
                        ?>
                        <p style="background-color: brown;">Bonjour <?php echo $_SESSION['email']; ?></p>
                            <li><a href="logout.php">Déconnexion</a>
                           <?php } else{?>
							<li><a href="login.php" class="menu">Connexion</a></li>
                            <?php } ?>
							<li><a href="inscription.html" class="menu">Inscription</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>
		<br>
		<div class="accueil">
			<div class="bienvenue">
				<a href="inscription.html"><input class="se_connecter" type="button" value="Nous Rejoindre"></a> 
			</div>
		</div>
		<div class="partenaire">
			<div class="diviseur"></div>
			<a href="https://www.airbnb.fr"><img src="images\airbnb1.png" height="50" width="150"></a> &nbsp; &nbsp; &nbsp;
			<a href="https://www.trivago.fr"><img src="images\trivago1.png" height="35" width="120"></a>
			<div class="diviseur"></div>
		</div>
		<footer>
			<table>
				<tr>
					<td>
						<div>
							<u><h1 style="font-size: 25px;">LOCALISATION<h1></u></br>
							<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177604.98612143646!2d6.788667090124407!3d45.92974266100569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47894c062dfe2ee7%3A0x408ab2ae4baa380!2sChamonix-Mont-Blanc!5e0!3m2!1sfr!2sfr!4v1637922707206!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="fast"></iframe></center>
						</div>
					</td>
					<td>
						<div>
							<center>
							<u><h1 style="font-size: 25px;">&Agrave; PROPOS</h1></u>
							<p>
								<i class="fa fa-map-marker" style="font-size:23px;color:white;"></i>&nbsp;
								VVA - Village Vacances Alpes</br>
								 </br>
								2 Bouvelard de l'Europe, </br>
								91000 Evry-Courcouronnes </br>
							</p>
							<u><h1 style="font-size: 25x;">CONTACT</h1></u>
							<p>
								<i class="fa fa-phone" style="font-size:23px;color:white;"></i>&nbsp;<a class="telephone" style="text-decoration:none;"href="tel:+334 50 53 11 13">04 50 53 11 13</a></br></br>
								<i class="fa fa-envelope" style="font-size:23px;color:white;text-decoration:none;"></i>&nbsp;<a class="mail" style="text-decoration:none;"href="mailto:vva_chamonix@hotmail.com">vva_chamonix@hotmail.com</a></br></br>
								<i class="fa fa-facebook" style="font-size:23px;color:white;text-decoration:none;"></i>&nbsp;<a class="facebook" style="text-decoration:none;"href="https://www.facebook.com">VVA_fb</a></br></br>
								<i class="fa fa-instagram" style="font-size:24px;color:white;text-decoration:none;" href></i>&nbsp;<a class="res" style="text-decoration:none;"href="https://www.instagram.com">VVA_in</a></br></br>
								<i class="fa fa-twitter" style="font-size:24px;color:white;text-decoration:none;"></i>&nbsp;<a class="res" style="text-decoration:none;"href="https://www.twitter.com">VVA_tw</a></br>
						</div>
						</div>
					</td>
				</tr>
			</table>
		</center>
			<div class="footer-bas"></br>
				<p class="copyright">Copyright &copy; 2021, VVA</p>
			</table>
		</footer>
	</body>
	<style>
		a{
			color:white;
		}
		.facebook:hover,.mail:hover,.telephone:hover,.res:hover{
		  color: yellow;
		}
		</style>
</html>


<!--
<nav id="navigation">
  <a href="#" class="logo">Studio<span>+<span></a>
  <ul class="links">
    <li><a href="#">About</a></li>
    <li class="dropdown"><a href="#" class="trigger-drop">Work<i class="arrow"></i></a>
      <ul class="drop">
        <li><a href="#">Art</a></li>
        <li><a href="#">Photography</a></li>
        <li><a href="#">Audio</a></li>
        <li><a href="#">Films</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="#" class="trigger-drop">Contact<i class="arrow"></i></a>
      <ul class="drop">
        <li><a href="#">Email</a></li>
        <li><a href="#">Phone</a></li>
      </ul>
    </li>
  </ul>
</nav>



jimbo pour un logo
-->


