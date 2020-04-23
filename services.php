<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');

}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Remons creation</title>
    <link rel="stylesheet" type="text/css" href="style3.css?v=<?php echo time();?>">  	
    <h2> How can we help? <?php echo $_SESSION['username']; ?> </h2>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li ><a href="home.php">Home </a></li>
				<li class="active"><a href="services.php">Services </a></li>
				<li><a href="#">Gallery </a></li>
				<li><a href="#">About</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>

			
			
		</div>

		

	</header>

</body>
</html>