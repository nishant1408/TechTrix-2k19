<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a'){
$name=$_POST["name"];
$id=$_POST["id"];
$update="UPDATE college SET name='$name' WHERE id='$id'";
if(mysqli_query($connect,$update))
{
	echo "<font color='green'><b>COLLEGE UPDATED SUCCESSFULLY</b></font>";
	echo "<script>alert('COLLEGE UPDATED SUCCESSFULLY')</script>";
	echo "<script>location.href='viewcollg.php'</script>";
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font>";
	echo "<script>alert('".mysqli_error($connect)."')</script>";
	echo "<script>location.href='viewcollg.php'</script>";
}
}
else
{
	echo "<script>alert('YOU ARE NOT AN ADMIN')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
?>