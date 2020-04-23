<?php

session_start();

		if(isset($_SESSION['uid']))
		{
			echo "";

		}
		else
		{
			header('location:../login.php');
		}
?>

<?php
 include('header.php');
 include('titlehead.php');
 include('../dbcon.php');

 $sid=$_GET['sid'];

 $sql="SELECT * FROM `student` WHERE `id`='$sid'";
 $run=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	
<table align="center" border="1" style="width: 70%; margin-top: 40px;">
	<tr>
		<th>Disease</th>
		<td><input type="text" name="disease" value=<?php echo $data['disease'];?> required></td>
	</tr>
	<tr>
		<th>Full Name</th>
		<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
	</tr>
	<tr>
		<th>City</th>
		<td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
	</tr>
	<tr>
		<th>Contact No</th>
		<td><input type="text" name="pcont" value=<?php echo $data['pcont'];?> required></td>
	</tr>
	<tr>
		<th>Hospital</th>
		<td><input type="text" name="hospital" value=<?php echo $data['hospital'];?> required></td>
	</tr>
	<tr>
		<th>Image</th>
		<td><input type="file" name="simg" required></td>
	</tr>

	<tr>



		<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />

			<input type="submit" name="submit" value="Submit">


		</td>
	</tr>
	
</table>

</form>
</body>