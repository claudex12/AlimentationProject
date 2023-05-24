<?php

$con=mysqli_connect("localhost","root","","magasin");

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$sexe=$_POST["sexe"];
$nationalite=$_POST["nationalite"];
$telephone=$_POST["telephone"];
$addresse=$_POST["addresse"];
$jour=date('d-m-y H:m');


$requete= mysqli_query($con,"INSERT INTO client(nom,prenom,sexe,nationalite,telephone,addresse,jour) VALUES ('$nom','$prenom','$sexe','$nationalite','$telephone','$addresse','$jour')");


if ($requete) {

      echo "

         <p> <script>
           alert('Enregistrement avec success..!!');

           window.location.assign('client.php');
           </script></p>
 ";
}else{
	echo "

         <p> <script>
           alert('erreur d enregistrement du client.....!');

           window.location.assign('insertionclient.php');
           </script></p>
 ";
}


?>