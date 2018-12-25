<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a'){
	$uid=$_SESSION["uid"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$college=$_POST["college"];
$insert="INSERT INTO genreg (name,mobile,email,college,uid) values ('$name','$mobile','$email','$college','$uid')";
if(mysqli_query($connect,$insert))
{
	echo "<font color='green'><b>GENERAL REGISTRATION ADDED SUCCESSFULLY</b></font>";
	
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font>";
}
}
else
{
	echo "<script>alert('YOU ARE NOT AN ADMIN')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
?>