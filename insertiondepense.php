<?php

$con=mysqli_connect("localhost","root","","magasin");

$qte=$_POST["qte"];
$montant=$_POST["montant"];
$totale=$_POST["qte"] * $_POST["montant"];
$descript=$_POST["descript"];
$date=date('d-m-y H:S' );

$inserer =mysqli_query($con,"INSERT INTO depense(qte,montant,totale,descript,datee) VALUES('$qte','$montant','$totale','$descript','$date')");
if ($inserer==1) {

           echo("

               <script>

                   alert('depense ajouter avec success...!');
                   window.location.assign('depense.php');
               </script>
           
           	");

	}else{
            echo("

               <script>

                   alert('depense ajouter avec success...!');
                   window.location.assign('insertiondepense.php');
               </script>
           
           	");

	}

?>