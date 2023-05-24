<?php
 require('dbconnection.php');
// start session
 session_start();

if($_SESSION['nom']){

// echo $_SESSION['nom'];
	
}else{

    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>produit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
body ,header,footer{
	background-color: none;
}

/*................begin design for the head part of the page......................*/
.entete{
     width: 86.5%;border: 2px solid #f2f;
     height: 27%;top:0px;
     background-repeat: no-repeat;    
     margin-left: 14%;left: 0%;
     position: absolute; 
     background-color: none;     
}
.logo{
	width: 14%;position: absolute;
	height: 27%;top:0px;left: 1%;
	background-repeat: no-repeat;
	border: 2px solid #f2f;	
    background-color: green;      
}

/*................end design for the head part of the page......................*/
.form{
	float: right;
	position: absolute;left: 1.0%;
	width: 1240px;margin-top: 187px;
	height: 75%;margin-left: 253px;
}

.menu{
	margin-top: 187px;
	float: left;	
	position: absolute;
	width: 17%;
	left: 1%;background-color: grey;
	}


a {	
	width: 125px;padding: 22px;
	display: block;	font-family: 'bad script' , Times New Roman;
	color: white;font-size: 20px;
	text-decoration: none;
}
.liste{
	font-size: 16px;margin-left: -19%;
	list-style: none;border: 1px solid #ffc;
	font-family: 'bad script' , Times New Roman;
	background-color: grey;
	text-align: center;width: 119%;
}
.liste a:hover
{
	width: 100%;text-align: center;
	color: blue;text-decoration: none;
	background-color: #deb;
}
/*................begin design for the foot part of the page......................*/
.footer{
	position: absolute;color: white;
	top:980px;background-color: grey;
	border:1px solid #fff;width: 100%;
	font-size: 15px;height: 40%;bottom: 0px;
	
}
.footer1{
	margin-top: -10%;display: inline-table;
	margin-left: 5%;color: white;
	font-size: 15px;position: absolute;
	font-family: 'bad style', Times new Roman;
}

.footer1 a:hover{

	text-decoration: none;
	color:#54dbfc;
}
.footer2{
	margin-left: 68%;color: white;
	font-size: 15px;
	font-family: 'bad style', verdana;
}
</style>
</head>
<body>	
	<div class="entete">
		<img src="images/download.png" width="100%" height="100%"/>		      
	</div>
	<div class="logo">
			<center><img src="images/lg1.jfif" width="90%" height="100%"/></center>
	</div>	
	<div class="menu">
		<ul>
			<li class="liste"><a href="accueil.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;ACCUEIL</a></li>
			<li class="liste"><a href="client.php"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp;CLIENTS</a></li>
			<li class="liste"><a href="produit.php"><i class="fa fa-glass fa-fw" aria-hidden="true"></i>&nbsp;PRODUCTS</a></li>
			<li class="liste"><a href="depense.php"><i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp;DEPENSES</a></li>
            <li class="liste"><a href="facturation.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;FACTURATION</a></li>            
            <li class="liste"><a href="rapport.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;RAPPORTS</a></li>            
            <li class="liste"><a href="logout.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;LOGOUT</a></li>       

		</ul>		
	</div>	

	<div class="form">	
	<center><br>
		<div class="col-md-12">
	    	<div class="col-md-3 form-group" style="position: absolute;margin-left: 62%;">
	    		<input type="text" name="btnrecherche" class="form-control">		 	      		
	    	</div>
	    	<div class="col-md-2 form-group" style="position: absolute;margin-left: 83%;">
	    		<input type="submit" name="research" value="rechercher" class="btn btn-success btn-flat text-bold">		
	    	</div>
	    	<div class="col-md-2 form-group" style="margin-left: -6%;">

	    		<?php
	    //..........qaffichage du photo de profile se gtrouvant dans la base de donnees...........		
	    	$actif=$_SESSION['nom'];
			$req =mysqli_query($con,"SELECT * FROM utilisateurs WHERE nom='$actif' ORDER BY id desc");
            while ($data=mysqli_fetch_array($req)) {                                         
                                                       
           echo "<img src='images/".$data["profile"]."' width='50' height='50' border='100' style='border-radius: 100%;'  alt='message user image'>";
           }?>
            <h6 style="color:#bb5df3;font-size: 16px;">Profile <a href="#" style="color:#bb5df3;margin-top: -25%;margin-left: 38%;text-decoration: none;"> |&nbsp;Edit</a>
           <a href="admin/login/login.php" style="color:#bb5df3;margin-top: -38.5%;margin-left: 70.5%;text-decoration: none;">| &nbsp;Admin</a> </h6>
        <!--fin code.................-->

            <?php}?>    		
	    			
	    	</div>
	    </div><br><br><br>  
		 	           
	<form action="insertionproduit.php" method="POST">
			<h2 style="color:#b4c;font-family: 'bad script',Times New Roman;">Formulaire d'ajouter un nouveau produit</h2>
	<div class="col-md-12">
		<div class="col-md-6 form-group">
			<label>Nom:</label>
			<input type="text" name="nom" placeholder="tape the product name" required="" class="form-control">
			<label>Type:</label>
			<select name="type" class="form-control">
				<option value="boisson">Boisson</option>
				<option value="Aliment">Aliment</option>
			</select>
			<label>Qualite:</label>
				<select name="qualite" class="form-control">
				<option value="premiere">premiere</option>
				<option value="deuxieme">Deuxieme</option>
				<option value="troixieme">troixieme</option>
			</select>			
		</div>
		<div class="col-md-6 form-group">			
			<label>Quantite:</label>
			<input type="number" name="qte" placeholder="quantity product" required="" class="form-control">	
			<label>Pu:</label>
			<input type="number" name="pu" placeholder="unity price" required="" class="form-control"> 
			<label>Pix Totale(Pt1):</label>
			<input type="number" name="pt" disabled="" placeholder="total price" class="form-control">
			
		</div>	
		<div class="col-ld-3" style="margin-left: -50%;">
			 <button style="" type="submit" name="ajouter" class="btn btn-warning btn-flat text-bold" ><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;Add product</button>
		    <!--...............td for actualiser button..........................-->        
          <a href="client.php" class="btn btn-success btn-flat text-bold"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i>&nbsp;refresh</a>		
		</div>				
     </div>
    </form>
		
	<hr style="width: 70%; color: yellow;"><br><br>

	<?php
	//.................delete button code for product........................
		
		if (isset($_GET['suppr'])){
    $requet= "DELETE From client WHERE id_client = '".$_GET['id_client']."'";   
   $resultat=mysqli_query($con,$requet);
 
     
     echo '
     <script>
     alert("suppression avec succès !");
     window.location.assign("produit.php");
     </script>'
     ;
  } 
  //.................fin codes........................................ 
?>

	        <h2 style="color:#b4c;font-family: 'bad script',Times New Roman;">Tableau d'affichage des produits</h2>
			<table class="table table-boldered table-hover table-striped">
			<tr>
				<th>Nr</th>
				<th>Nom</th>
				<th>Type</th>
				<th>Qualite</th>
				<th>Quantite</th>					
				<th>Prix Unitaire</th>
				<th>Prix Total</th>
				<th>Date</th>
				<th colspan="6">Fonctionnalite</th>
			</tr>
			<!--..................Select and display the data from the database to the page.................-->
			<?php 
                $requ=mysqli_query($con,"SELECT * FROM produit ORDER BY id_pro desc");
                while($data=mysqli_fetch_array($requ)){
            ?>

                	<tr>
                	    <td><?php echo $data['id_pro'];?></td>
                	    <td><?php echo $data['nom'];?></td>
                	    <td><?php echo $data['type'];?></td>
                	     <td><?php echo $data['qualite'];?></td>
                	     <td><?php echo $data['qte'];?></td>
                	     <td><?php echo $data['pu'];?></td>
                	     <td><?php echo $data['pt'];?></td>
                	     <td><?php echo $data['jour'];?></td>
                	 <td>  <!--...............td for update button..........................-->        
                  <a onclick="return confirm('Etes-vous sûr de vouloir modifié <?php echo $donn['nom'];?>')"  href="modifierclient1.php? update=ok & id_client=<?php echo $donn['id_client']; ?>" class="btn btn-primary btn-flat text-bold"><i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp; Update</a>
                  </td>


             	    <td><!--...............td for delete button..........................-->         
                    <a onclick="return confirm('Etes-vous s&ucirc;r de vouloir Supprimer?  <?php echo $donn['prenom'];?>')" href="client.php?suppr=ok & id_client=<?php echo $donn['id_client'];?>" class="btn btn-danger btn-flat text-bold"><i class="fa fa-trash-o fa-lg"></i>&nbsp;&nbsp;Delete</a>     
                   </td>
                	</tr>

                	<?php
                      }
                	?>         
		
			
		</table>
	</center>
	   				
	</div>
	<div class="footer">
	      <center>
	      	<h3>Designed by NDAYIZEYE Jean Claude</h3>
	      	<hr style="width:30%;font-color:blue;">   	
	      	
	      </center>
	     <div class="footer2">	<i>      
	        <h2>Contact & Write Us On:</h2>
	      	<i>	      	
	       	<a href="" style="margin-left:10%;text-decoration: none;"><h4>61528264<img src="images/ph.png" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	<a href="Whatsap.com" style="margin-left:30%;margin-top:-125px;text-decoration: none;"><h4>+257&nbsp;67453254<img src="images/wp.png" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	<a href="Gmail.com" style="margin-left: 56%;margin-top: -125px;text-decoration: none;"><h4>jeanclaude@gmail.com<img src="images/gm.jfif" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	
	      	</i>
	  </div>
		  <div class="footer1">
		  	<i>
		    <h2>Follow Us On:</h2>      	
	      	<a href="Facebook.com" style="margin-left: -20%;"><h4>Facebook<img src="images/1.png" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	<a href="YouTube.com" style="margin-left: 30%;margin-top: -120px;"><h4>YouTube<img src="images/14.jpg" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	<a href="Instagram.com" style=" margin-left: 75%;margin-top: -122px; " ><h4>Instagram<img src="images/12.jpg" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
	      	<a href="Twitter.com" style=" margin-left: 125%;margin-top: -122px;"><h4>Twitter<img src="images/13.jpg" width="40px" height="40px" style="border-radius: 100%;"></h4></a>
		  	</i>
	            
	      </div>
	</div>	
	
</body>
</html>