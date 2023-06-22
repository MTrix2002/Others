<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <?php
    include('Personne.php');

    if (isset($_POST['submit'])) {
        if ($_POST['nom'] and $_POST['prenom'] != null) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $personne = new Personne($nom, $prenom);
            $personne->insert();
            if ($personne) {
                echo "Votre inscription s'est  deroulée correctement ";
            } else {
                echo "L'inscription a echoué, veillez reessayer ulterieurement";
            }
        }
    }

    ?>

    <form action='' method='post'>
        * champs obligatoires <br>
        nom:* <input type='text' name='nom' value="<? if (isset($_POST['submit'])) {
                                                        echo $nom;
                                                    } ?>" required> <br>

        Prenom:* <input type='text' name='prenom' value="<? if (isset($_POST['submit'])) {
                                                                echo $prenom;
                                                            } ?>" required><br>

        <input type='submit' name='submit' value='inscription'><br />

    </form>

</body>

</html>