<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid'])&& ($_SESSION['type'] == 'a' || $_SESSION['type'] == 'r' ))
{
$name=$_POST["name"];
$insert="INSERT INTO college (name) values ('$name')";
if(mysqli_query($connect,$insert))
{
	echo "<font color='green'><b>COLLEGE ADDED SUCCESSFULLY</b></font>";
	echo "<table id='table'>";
	echo "<tr>";
	echo "<td>College</th>";
	echo "<td>".$name."</td>";
	echo "</tr>";
	echo "</table>";
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font><br>";
}
}
else
{
	echo "<script>alert('YOU ARE NOT AN ADMIN OR REGISTRATION DESK MEMBER')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
?>