<?php

session_start();
header('location:login1.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'new');

$name=$_POST['user'];
$pass=$_POST['password'];
$pass=md5($pass);
$email=$_POST['mail'];

$s = "select * from usertable where name ='$name' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Username Already taken";
}
else
{
	
	$reg =" insert into usertable(name,password,email) values ('$name','$pass','$email')";

	mysqli_query($con,$reg);
	echo "Registration Successfull";
}

?>