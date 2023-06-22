<?php
$db_host = "localhost";
$db_user = "Os";
$db_pass = "";
$db_name  = "vivi";
// //Connexion à la BDD
$conn = new mysqli($db_host, $db_user, $db_pass , $db_name);
// Problème de connection
if (mysqli_connect_errno()) {
    printf("Connexion échoué : %s\n", mysqli_connect_error());
}


 
?>