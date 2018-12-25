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
			<h3 class="w3ls-title w3ls-title1">VIEW COLLEGE</h3> 
			<table id="table">
			<tr>
			<th>Sl. No.</th>
			<th>College Name</th>
			<th>Action</th>
			</tr>
			<?php
			$counter=1;
				$select="SELECT * from college order by name ASC";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$counter++."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td><a href='delcollg.php?id=".$row["id"]."'><i class='fa fa-trash'aria-hidden='true'></i></a> / <a href='editcollg.php?id=".$row["id"]."'><i class='fa fa-pencil'aria-hidden='true'></i></a></td>";
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