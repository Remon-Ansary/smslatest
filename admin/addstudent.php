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
?>


<form method="post" action="addstudent.php" enctype="multipart/form-data">
	
<table align="center" border="1" style="width: 70%; margin-top: 40px;">
	<tr>
		<th>Disease</th>
		<td><input type="text" name="disease" placeholder="Enter Disease" required></td>
	</tr>
	<tr>
		<th>Qualification & Specialist</th>
		<td><input type="text" name="qualification" placeholder="Enter Qualification" required></td>
	</tr>
	<tr>
		<th>Full Name</th>
		<td><input type="text" name="name" placeholder="Enter Name" required></td>
	</tr>
	<tr>
		<th>City</th>
		<td><input type="text" name="city" placeholder="Enter City" required></td>
	</tr>
	<tr>
		<th>Contact No</th>
		<td><input type="text" name="pcont" placeholder="Enter Contact No" required></td>
	</tr>
	<tr>
		<th>hospital</th>
		<td><input type="text" name="hospital" placeholder="Enter Hospital Name" required></td>
	</tr>
	
	<tr>
		<th>Image</th>
		<td><input type="file" name="simg" required></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
	</tr>
	
</table>

</form>
</body>
</html>


<?php

if (isset($_POST['submit']))
{
	include('../dbcon.php');
	$disease=$_POST['disease'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcont'];
	$hospital=$_POST['hospital'];
	$qualification=$_POST['qualification'];
	
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"../dataimg/$imagename");

	$qry="INSERT INTO `student`(`disease`, `name`, `city`, `pcont`, `hospital`,`qualification`,`image`) VALUES('$disease','$name','$city','$pcon','$hospital','$qualification','$imagename') ";
	$run=mysqli_query($con,$qry);
	if($run == true)
	{
		?>
		<script>
			alert('Data Inserted Successfully');
		</script>
		<?php
		
	}
}
 ?>