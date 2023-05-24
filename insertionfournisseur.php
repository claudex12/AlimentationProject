<?php

include("dbconnection.php");

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$sexe=$_POST["sexe"];
$tel=$_POST["tel"];

$addresse=$_POST["addresse"];
$photo=$_POST["photo"];
$typro=$_POST["typro"];
$qte=$_POST["qte"];
$pu=$_POST["pu"];
$pt=$_POST["pu"] * $_POST["qte"] ;
$datee=date('d-m-y');

$query=mysqli_query($con,"INSERT INTO fournisseurs(nom,prenom,email,sexe,tel,addresse,photo,typro,qte,pu,pt,datee) VALUES('$nom','$prenom','$email','$sexe','$tel','$addresse','$photo','$typro','$qte','$pu','$pt','$datee')");

if ($query) {
           echo "

             <script>
                   alert('supply inserted successfully...!');
                   window.location.assign('fournisseurs.php');

             </script>

           ";

	}else{
            echo "

             <script>
                   alert('supply inserted successfully...!');
                   window.location.assign('insertionfournisseur.php');

             </script>

           ";

	}






?>