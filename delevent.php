<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a')
{
	$eid=$_GET["eid"];
$delete="DELETE from events where eid='$eid'";
if(mysqli_query($connect,$delete))
{
	echo "<script>alert('EVENT DELETED')</script>";
	echo "<script>location.href='viewevent.php'</script>";
}
else
{
	echo "<script>alert('".mysqli_error($connect)."')</script>";
	echo "<script>location.href='viewevent.php'</script>";
}	
}
else
{
	echo "<script>alert('YOU ARE NOT AN ADMIN')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
?>