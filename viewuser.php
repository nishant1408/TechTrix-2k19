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
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">VIEW USERS</h3> 
			<table id="table">
			<tr>
			<th>Sl. No.</th>
			<th>UID</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action</th>
			</tr>
			<?php
			$counter=1;
				$select="SELECT * from user order by type asc";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$counter++."</td>";
						echo "<td>".$row["uid"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["mobile"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["type"]."</td>";
						echo "<td><a href='deluser.php?uid=".$row["uid"]."'><i class='fa fa-trash'aria-hidden='true'></i></a> / <a href='edituser.php?uid=".$row["uid"]."'><i class='fa fa-pencil'aria-hidden='true'></i></a></td>";
						echo "</tr>";
					}
				}
			?>
			</table>
			
		</div>
	</div>
	<?php
	include 'footer.php';
	?>