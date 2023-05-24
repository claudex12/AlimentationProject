<?php

$con=mysqli_connect("localhost","root","","magasin");


$profile = $_FILES["profile"]["name"];  
$target = "images/".basename($profile);
$profile=$_POST["profile"];

$nom=$_POST["nom"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$sexe=$_POST["sexe"];
$nation=$_POST["nation"];
$status=$_POST["status"];
$pass=$_POST["pass"];
$addresse=$_POST["addresse"];

$montant=$_POST["montant"];
$datee=date('d-m-y');

$query=mysqli_query($con,"INSERT INTO utilisateurs(nom,email,tel,sexe,nation,status,pass,addresse,profile,montant,jour) VALUES('$nom','$email','$tel','$sexe','$nation','$status','$pass','$addresse','$profile','$montant','$datee')");

if ($query==1) {
	
	echo" <p>
	     <script>
	           alert('user added successfully....!');
	           window.location.assign('utilisateurs.php');

	     </script>
          </p>


	";
}else{
     echo" <p>
	     <script>
	           alert('user added successfully....!');
	           window.location.assign('insertionutulisateur.php');

	     </script>
          </p>
";
}

?>