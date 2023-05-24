<?php
/*.......connection de la base de donnees et acces a l'internet...............*/
include("dbconnection.php");

session_start();

$Utilisateur = $_POST['nom'];
$Motdepasse = $_POST['pass'];


$_SESSION['nom'] = $Utilisateur;

$requete = mysqli_query($con,"SELECT * FROM users WHERE nom='$Utilisateur' AND pass='$Motdepasse'");

if (mysqli_num_rows($requete)>0) {
	# code...}

 //if ( $Utilisateur =="claude" and $Motdepasse == "12345") {
 	//echo "Bienvenue cher utilisateur";
 	echo "

         <p> <script>
           alert('Welcome ".$Utilisateur."');

           window.location.assign('Accueil.php');
           </script></p>
 ";
 	
 }else{
 	//echo "Mot de passe incorrect !";
 	echo "
          <p> <script>
           alert('password wrong !');

           window.location.assign('index.php');
           </script>
           </p>

 	";
 }

?>