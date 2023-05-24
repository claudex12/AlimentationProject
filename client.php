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
	<title>accueil</title>
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

.menu{
	margin-top: 187px;
	float: left;	
	position: absolute;
	width: 16%;
	left: 1%;background-color: grey;
	}
.form{
	float: right;
	position: absolute;left: 1.0%;
	width: 1240px;margin-top: 187px;
	height: 75%;margin-left: 253px;
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
	         <div class="col-md-2 form-group" style="margin-left: -1.4%;">

	    		<?php
	    //..........affichage du photo de profile qui se trouvent dans la base de donnees...........		
	    	$actif=$_SESSION['nom'];
			$req =mysqli_query($con,"SELECT * FROM utilisateurs WHERE nom='$actif' ORDER BY id desc");
            while ($data=mysqli_fetch_array($req)) {                                         
                                                       
           echo "<img src='images/".$data["profile"]."' width='50' height='50' border='100' style='border-radius: 100%;'  alt='message user image'>";
           }?>
            <h6 style="color:#bb5df3;font-size: 16px;">Profile <a href="#" style="color:#bb5df3;margin-top: -25%;margin-left: 15%;text-decoration: none;"> |&nbsp;Edit</a>
           <a href="admin/login/login.php" style="color:#bb5df3;margin-top: -38.5%;margin-left: 40.5%;text-decoration: none;">|&nbsp;Admin</a> </h6>
        <!--fin code.................-->

            <?php}?>    		
	    			
	    	</div>	
		 <center><br>		
	<form  action="insertionclient.php" method="POST">
			   <h2 style="color:#b4c;font-family: 'bad script',Times New Roman;">formulaire d'ajouter un client</h2>
	<div class="col-md-12">
    <div class="col-md-6 form-group">
				<label>Nom:</label>
				<input type="text" name="nom" placeholder="taper votre nom" required="" class="form-control">
				<label>Prenom:</label>
				<input type="text" name="prenom" placeholder="taper votre prenom" required="" class="form-control">
				<label>Sexe:</label>
				<select name="sexe" class="form-control">
					<option value="M">Masculin</option>
					<option value="F">Feminin</option>					
				</select>	
	</div>
	<div class="col-md-6 form-group">						
				<label>Nationalite:</label>
				<select name="nationalite" class="form-control">
					<option value="Burundi">Burundi</option>
					<option value="Rwanda">Rwanda</option>	
					<option value="Kenya">Kenya</option>
					<option value="Ouganda">Ouganda</option>
					<option value="Tanzanie">Tanzanie</option>
					<option value="Congo">Congo</option>				
				</select>
				<label>Telephone:</label>
			<input type="number" name="telephone" placeholder="taper votre telephone" required="" class="form-control">	
			<label>Address:</label>
			<textarea cols="4" rows="2" <input type="text" name="addresse" placeholder="taper votre addresse" required="" class="form-control"></textarea>
	</div>
	
	<div class="col-md-4 form-group">		  
		  <button style="width: 50%;" type="submit" name="ajouter" class="btn btn-warning btn-lg text-bold" ><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;Add client</button>
		    <!--...............td for actualiser button..........................-->        
          <a href="client.php" class="btn btn-success btn-lg text-bold"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i>&nbsp;refresh</a>
	</div>
	</div>
	<center>
    	<h2 style="color:#b4c;font-family: 'bad script',Times New Roman;">Tableau d'affichage pour les clients</h2>
    </center>  			
    </form>        
	</center>
		

   
   
   <?php
   //...................... debut des codes de suppression...............

  if (isset($_GET['suppr'])){
    $requet= "DELETE From client WHERE id_client = '".$_GET['id_client']."'";   
   $resultat=mysqli_query($con,$requet);
 
     
     echo '
     <script>
     alert("suppression avec succès !");
     window.location.assign("client.php");
     </script>'
     ;
  } 
  //.................fin codes........................................ 
  //.................debut bouton search.........................
?>

                 <?php
 //.........declaration de la fonction filterTable...................
                  function filterTable($query) {  
                         require('dbconnection.php');
	                      $filter_Result = mysqli_query($con,$query) ;
	                      Return $filter_Result;
	 
                   }
//..end declare filterTable. for research button............
                  ?>    
          <div class="col-md-4" style="margin-left: 70%;margin-top: 5%;font-size: 18px;">
	  	     <form method="post" Action=""  >
                <input  type="text"  name="valueToSearch" style="background-color:#fff; color:#000;width:150px; border:1px solid orange;border-radius:5px; " placeholder="Do research here" size="25" required="required">
      
                 <button   type="submit"  name="search"  value="Chercher" class="btn btn-primary btn-lg"><i class="fa fa-search">search</i></button>
               </form> 
	        </div> 

	            
   <table class="table table-bordered table-hover table-striped" style="margin-top: 10%;">  
    	
                 <tr>
				<th>No</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Sexe</th>
				<th>Nationnalite</th>
				<th>Telephone</th>
				<th>Addresse</th>
				<th>Date</th>				
				<th colspan="6">Fonctionalite</th>
			</tr>
     <?php
                      //....................bouton recherche.....................
if (isset($_POST['search']))
{
       $valueToSearch= $_POST['valueToSearch'];
	   $query="SELECT * FROM `client` WHERE  CONCAT  (`id_client`,`nom`,`prenom`,`telephone`)  LIKE '%".$valueToSearch."%'  order by id_client desc Limit 0,10";   //comment
	   $search_result= filterTable($query);
	   
}else{

     $query="SELECT * FROM `client`   order by id_client desc Limit 0,5";
	 $search_result= filterTable($query);
	 
	
	 //.........................fin code bouton recherche......................
}while ($donn = mysqli_fetch_array($search_result)):?>
        <tr>
            		<td><?php echo $donn['id_client'];?></td>
            	    <td><?php echo $donn['nom'];?></td>
            	    <td><?php echo $donn['prenom'];?></td>
            	    <td><?php echo $donn['sexe'];?></td>
            	    <td><?php echo $donn['nationalite'];?></td>
            	    <td><?php echo $donn['telephone'];?></td>
            	    <td><?php echo $donn['addresse'];?></td>
            	    <td><?php echo $donn['jour'];?></td>             	                	    
             	
             	  <td>  <!--...............td for update button..........................-->        
                  <a onclick="return confirm('Etes-vous sûr de vouloir modifié <?php echo $donn['nom'];?>')"  href="modifierclient1.php? update=ok & id_client=<?php echo $donn['id_client']; ?>" class="btn btn-info btn-lg text-bold"><i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp; Update</a>
                  </td>


             	    <td><!--...............td for delete button..........................-->         
                    <a onclick="return confirm('Etes-vous s&ucirc;r de vouloir Supprimer?  <?php echo $donn['prenom'];?>')" href="client.php?suppr=ok & id_client=<?php echo $donn['id_client'];?>" class="btn btn-danger btn-lg text-bold"><i class="fa fa-trash-o fa-lg"></i>&nbsp;&nbsp;Delete</a>     
                   </td>

            	    <!--<td><input type="submit" name="delete" value="Delete" class="btn btn-danger btn-flat text-bold"></td>-->

            	</tr>
<?php endwhile; ?>


</table>					
	</div>

	<div class="footer">
	      <center>
	      	<h3>Designed by NDAYIZEYE Jean Claude</h3>
	      	<hr style="width:28%;font-color:blue;">   	
	      	
	      </center>
	    <div class="footer2">	      	
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