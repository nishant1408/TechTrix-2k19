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
			<h3 class="w3ls-title w3ls-title1">ALL GENERAL REGISTRATIONS</h3> 
			<table id="table">
			<tr>
			<th>Sl. No.</th>
			<th>Gen ID</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>College</th>
			<th>Reg By</th>
			<th>Action</th>
			</tr>
			<?php
			$counter=1;
				$select="SELECT g.*,u.name as uname from genreg g 
				inner join user u on u.uid=g.uid 
				order by g.gid ASC";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$counter++."</td>";
						echo "<td>".$row["gid"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["mobile"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["college"]."</td>";
						echo "<td>".$row["uname"]."</td>";
						echo "<td><a href='delgen.php?gid=".$row["gid"]."'><i class='fa fa-trash'aria-hidden='true'></i></a> / <a href='editgen.php?gid=".$row["gid"]."'><i class='fa fa-pencil'aria-hidden='true'></i></a></td>";
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