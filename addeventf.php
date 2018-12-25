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
$insert="INSERT INTO events (eid,name,par,fee,room,co1,mco1,co2,mco2) values ('$eid','$name','$par','$fee','$room','$co1','$mco1','$co2','$mco2')";
if(mysqli_query($connect,$insert))
{
	echo "<font color='green'><b>EVENT ADDED SUCCESSFULLY</b></font>";
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