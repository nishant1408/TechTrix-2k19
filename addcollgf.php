<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']))
{
$name=$_POST["name"];
$insert="INSERT INTO college (name) values ('$name')";
if(mysqli_query($connect,$insert))
{
	echo "<font color='green'><b>COLLEGE ADDED SUCCESSFULLY</b></font>";
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font>";
}
}
else
{
	echo "<script>location.href='login.php'</script>";
}
?>