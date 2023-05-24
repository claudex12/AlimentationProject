
<!DOCTYPE html>
<html>
<head>
	<title>login</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
       
	<div class="login-box">
		<center>
		 <img src="images/6.jfif" class="avatar"><br><br><br><br>
		<h3>ALIMENTATION IGIRANEZA</h3>
		

		<div class="content">
			<form action="traitement.php" method="POST">
				<h4 style="font-family: 'bad script',SketchFlow Print;">please start to fill the username and password fields !<br></h4><br>
				<div class="center">
					<label>UserName</label><br><br>
                    <input type="text" name="nom" id="username" placeholder="Write your username" required="">
                    <br>

					<label>PassWord</label><br><br>
					<input type="PassWord" name="pass" id="PassWord" placeholder="Write your PassWord" required="">
					<br><br>
					<input type="submit" name="" value="Connection">
				</div>
				<br>
				<?php
                   $jour=date('d-m-y');     

		        ?>
		        <p><?php echo $jour;?></p>
				<a href="#" class="pass"><h4 style="font-size:20px;font-family: 'bad script',SketchFlow Print;">password forgotten !</h4></a>
		</div>
			</form>	
	</div>
       </center>
</div>

</body>
</html>