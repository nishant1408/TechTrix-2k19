<?php
session_start();
include 'connect.php' ;
if(isset($_SESSION['uid']))
{
	$uid=$_SESSION["uid"];
	$select="SELECT name from user where uid='$uid'";
	if($result=mysqli_query($connect,$select))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row["name"];
		}
	}
}
else
{
	echo "<script>location.href='login.php';</script>";
}
include 'header.php';
?>

	<div class="container">
			
	</div>
	<?php
	include 'footer.php';
	?>