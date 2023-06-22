<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription - VVA</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="contact">
			<div class="formulaire2">
				<?php
					$compte=$_POST['compte'];
					$name=$_POST['name'];
					$firstname=$_POST['firstname'];
					$email=$_POST['email'];
					$password=$_POST['password'];
		
					if (empty($compte) or empty($name) or empty ($firstname) or empty($email) or empty($password)) 
							{
							$erreur=TRUE;			
						}
					else
						{	
							$db=mysql_connect('localhost' , 'root' , '') or die ('erreur de connexion' .mysql_error());
							mysql_select_db('resa' ,$db) or die ('erreur de selection de BDD '.mysql_error());
							$sql="insert into compte (typecompte, nomcpte, prenomcpte, adrmailcpte, mdp) values ('".$compte."', '".$name."', '".$firstname."', '".$email."', '".$password."')";
							mysql_query($sql) or die ('Erreur SQL ! '.$sql.'<br/>'.mysql_error());
							$erreur=FALSE;
				?>
				<p class="form_success">
					<br>
					<br>
					Le formulaire a bien &eacute;t&eacute; envoy&eacute;.
				</p>
				</br>
				<?php
							mysql_close();
						}
				?>
				<?php
					if ($erreur==FALSE) {
				?>
				<a href="index.html"><input class="contact" type="button" name="retour" value="Retour"></a>
				<br>
				<br>
				<br>
				<?php
					}
				?>
			</div>
		</div>
		
	</body>
</html>