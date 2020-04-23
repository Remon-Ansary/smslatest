<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8">

	<title>Doctor's Mart</title>


</head>

<body bgcolor="#B0C4DE">

<style>
body {
  background-image: url('21.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


<h3 align="right" style="margin-right: 20px;color: #FFF8DC;"><a href="login.php?v=<?php echo time();?>">Admin Login</a></h3>
<h4 align="left" style="margin-left: 20px;color: #FFF8DC;"><a href="login1.php?v=<?php echo time();?>">Login or Create an account to chat with doctors</a></h4>
<h1 align="center" style="color: #0000FF;">Welcome to Doctors Mart</h1>
<style>
	h1 {
	
	
	background: #f6f6f6;
    padding: 10px; 
    border: 2px solid #1c87c9;
    border-radius: 5px;
    width: 40%;
    left:29.5%;
    position: sticky;
    top: 0;
  
}


</style>


<form method="post" action="index.php">



	<style>
      table, td, th { 
      padding: 10px; 
      border: 2px solid #1c87c9;
      border-radius: 5px;
      background-color: #e5e5e5;
      text-align: center;
      }
  </style>
<table style="width:40%; color: #FF6347;"align="center">






	<tr>
		<td colspan="2" align="center">Search for Doctor</td>

	</tr>


	 <tr>
    	<td align="left">Enter Disease Name</td>
    	<td>
    		<input type="text" name="disease" required>

    	</td>

    </tr>
    
	<tr>
		<td  align="left">Choose City</td>
		<td>
			<select name="city" required>
				<option value="Dhaka">Dhaka</option>
				<option value="Rajshahi">Rajshahi</option>
				<option value="Sylhet">Sylhet</option>
				<option value="Naogaon">Naogaon</option>
				<option value="Dinajpur">Dinajpur</option>
				<option value="Chittagong">Chittagong</option>
				<option value="Bogura">Bogura</option>
				<option value="Rangpur">Rangpur</option>
				<option value="Sirajganj">Sirajganj</option>
				<option value="CoxsBazar">CoxsBazar</option>
				<option value="Khulna">Khulna</option>

				<option value="Pabna">Pabna</option>
				<option value="Faridpur">Faridpur</option>
				<option value="Comilla">Comilla</option>
				<option value="Kushtia">Kushtia</option>
				<option value="Magura">Magura</option>
				<option value="Tangail">Tangail</option>
				<option value="Noakhali">Noakhali</option>
				<option value="Jessore">Jessore</option>

			</select>
			
		</td>
	</tr>
   
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="submit"  value="Show Info"></td>

    	
    </tr>


</table>
</form>

</body>
</html>
<?php

if (isset($_POST['submit']))

{
   
	$city= $_POST['city'];
	$disease=$_POST['disease'];

	include('dbcon.php');
	include('function.php');
	showdetails($city,$disease);
}
?>