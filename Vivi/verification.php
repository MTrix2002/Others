<?php
session_start();
 include('ConnectDB.php');
 $error=''; //Variable pour stocker le message d'erreur
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['password'])){
	$error = "Username or Password is Invalid";
}
else
{
//Initisialisation du $user and $pass
$user=$_POST['email'];
$pass=$_POST['password'];
//Req SQL pour voir si l'utilisateur existe
$query = mysqli_query($conn, "SELECT * FROM compte WHERE MDP='$pass' AND ADRMAILCPTE='$user'");

$rows = mysqli_num_rows($query);
if($rows == 1){
	$_SESSION['email'] = $user; // Initializing Session
	header("location: index.php"); // Dirige vers index.php 
$tab= $result->fetch_all(MYSQLI_ASSOC);
$_SESSION['TYPECOMPTE'] = $tab=['TYPECOMPTE'];
$_SESSION['NOMCPTE']=$tab['NOMCPTE'];

}
else
{
	$link_address="index.php";
	//Si le login et mdp ne correspondent pas retour vers la page connexion
	//header("refresh: 2 url=connexion.php ");
	echo "<center><h1>Login ou mot de passe incorrect !</h1></center>";
	echo "<center><h2><a href='".$link_address."'>Retour à la page d'acceuil</a></h2></center>";
}
mysqli_close($conn); // ça ferme la connexion
}
}

?>
  