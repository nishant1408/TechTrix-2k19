<?php
include 'connect.php';
session_start();
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a'){
$eid=$_POST["eid"];
$name=$_POST["name"];
$par=$_POST["par"];
$fee=$_POST["fee"];
$room=$_POST["room"];
$co1=$_POST["co1"];
$mco1=$_POST["mco1"];
$co2=$_POST["co2"];
$mco2=$_POST["mco2"];
$eeid=$_POST["eeid"];
$update="UPDATE events SET eid='$eid',name='$name',par='$par',fee='$fee',room='$room',co1='$co1',mco1='$mco1',co2='$co2',mco2='$mco2' WHERE eid='$eeid'";
if(mysqli_query($connect,$update))
{
	echo "<font color='green'><b>EVENT UPDATED SUCCESSFULLY</b></font>";
	echo "<script>alert('EVENT UPDATED SUCCESSFULLY')</script>";
	echo "<script>location.href='viewevent.php'</script>";
}
else
{
	echo "<font color='red'><b>".mysqli_error($connect)."</b></font>";
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