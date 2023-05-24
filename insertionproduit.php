<?php

$con=mysqli_connect("localhost","root","","magasin");


$nom =$_POST["nom"];
$type=$_POST["type"];
$qualite=$_POST["qualite"];
$qte =$_POST["qte"];
$pu=$_POST["pu"];
$pt=$_POST["qte"] * $_POST["pu"];
$jour=date('y-m-d H:m');

//...................insert data to the database...............

$req = mysqli_query($con,"INSERT INTO produit(nom,type,qualite,qte,pu,pt,jour) VALUES('$nom','$type','$qualite','$qte','$pu','$pt','$jour')");

if ($req) {

	echo "<script>

          alert('product inserted successfully...!');

          window.location.assign('produit.php');

	</script>";

}else{

	echo "<script>

          alert('wrong inserted...!');

          window.location.assign('insertionproduit.php');

	</script>";
}



?>