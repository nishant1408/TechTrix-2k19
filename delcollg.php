<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a')
{
	$id=$_GET["id"];
$delete="DELETE from college where id='$id'";
if(mysqli_query($connect,$delete))
{
	echo "<script>alert('COLLEGE DELETED')</script>";
	echo "<script>location.href='viewcollg.php'</script>";
}
else
{
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