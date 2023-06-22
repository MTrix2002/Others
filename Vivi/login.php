<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    </head>
    <body>
		<div class="logo">
		</div>
        <div id="container">
            <!-- zone de connexion -->
            <form action="verification.php" method="post">
                <h1>Connexion</h1>
				
				<label class="titre">Type de Compte</label></br>
				<input type="radio" id="user" name="compte" value="U" checked>&nbsp;<label for="user">utilisateur</label>&nbsp;&nbsp;&nbsp;
				<input type="radio" id="admin" name="compte" value="G">&nbsp;<label for="admin">gestionnaire</label>
				<br>
                
                <label class="titre">Adresse Mail</label>
                <input type="email" placeholder="Entrer l'adresse mail" name="email" required>

                <label class="titre">Mot de passe</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				&nbsp;
                <input type="submit" id='submit' name="submit" value='Se connecter' >
                <?php
					if(isset($_GET['erreur'])){
						$err = $_GET['erreur'];
						if($err==1 || $err==2)
							echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
					}
                ?>
				<a href="index.html"><input type="button" value="Retour"></a>
			</form>
        </div>
    </body>
</html>