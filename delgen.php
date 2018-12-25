<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a')
{
	$gid=$_GET["gid"];
$delete="DELETE from genreg where gid='$gid'";
if(mysqli_query($connect,$delete))
{
	echo "<script>alert('GENERAL REGISTRATION DELETED')</script>";
	echo "<script>location.href='viewgen.php'</script>";
}
else
{
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