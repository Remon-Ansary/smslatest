<?php


include('../dbcon.php');

	$disease=$_POST['disease'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcont'];
	$hospital=$_POST['hospital'];
	$id=$_POST['sid'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"../dataimg/$imagename");

	$qry="UPDATE `student` SET  `disease` = '$disease', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `hospital` = '$hospital' , `image` = '$imagename' WHERE `id` = $id;";
	$run=mysqli_query($con,$qry);

	if($run == true)
	{
		?>

		<script>
			alert('Data Updated Successfully.');
			window.open('updateform.php?sid=<?php echo $id;?>','_self');
			
		</script>
		<?php
		
	}


?>