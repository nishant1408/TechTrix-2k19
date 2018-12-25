<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a'){
$gid=$_POST["gid"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$college=$_POST["college"];
$update="UPDATE genreg SET name='$name',mobile='$mobile',email='$email',college='$college' WHERE gid='$gid'";
if(mysqli_query($connect,$update))
{
	echo "<font color='green'><b>GENERAL REGISTRATION UPDATED SUCCESSFULLY</b></font>";
	echo "<script>alert('GENERAL REGISTRATION UPDATED SUCCESSFULLY')</script>";
	echo "<script>location.href='viewgen.php'</script>";
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font>";
	echo "<script>alert('".mysqli_error($connect)."')</script>";
	echo "<script>location.href='viewgen.php'</script>";
}
}
else
{
	echo "<script>alert('YOU ARE NOT AN ADMIN')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
?>