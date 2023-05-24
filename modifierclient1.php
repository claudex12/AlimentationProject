<!doctype html>
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
	width: 17%;height: 100%;
	left: 1%;background-color: grey;
	}
.content{
	float: right;
	position: absolute;left: 1.0%;
	width: 1240px;margin-top: 187px;
	height: 100%;margin-left: 253px;
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
	top:890px;background-color: grey;
	border:1px solid #fff;width: 100%;
	font-size: 21px;height: 40%;
	
}
.footer1{
	margin-top: -10%;
	margin-left: 5%;color: white;
	font-size: 15px;position: absolute;
	font-family: 'bad style', Times new Roman;
}
.footer2{
	margin-left: 78%;color: white;
	font-size: 18px;
	font-family: 'bad style', Times new Roman;
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
	<div class="content">
		<?php
         include("modifierclient.php");
		?>	
	</div>
	<div class="footer">
	      <center>
	      	<h3>Designed by NDAYIZEYE Jean Claude</h3>
	      	<hr style="width:30%;font-color:blue;">   	
	      	
	      </center>
	      <div class="footer2">	      
	      	<i>
	      		<h2>Contact Us On:</h2>	      	
	      	<h3>Email:jeanclaude@gmail.com</h3>
	       	<h3>Tel:7261528264</h3>
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