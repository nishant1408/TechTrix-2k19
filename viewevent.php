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
			<h3 class="w3ls-title w3ls-title1">ALL EVENTS</h3> 
			<table id="table">
			<tr>
			<th>Sl. No.</th>
			<th>Event ID</th>
			<th>Event Name</th>
			<th>Max Par</th>
			<th>Reg Fee</th>
			<th>Venue</th>
			<th>Co-ordinator 1</th>
			<th>Mobile</th>
			<th>Co-ordinator 2</th>
			<th>Mobile</th>
			<th>Action</th>
			</tr>
			<?php
			$counter=1;
				$select="SELECT * from events order by eid ASC";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$counter++."</td>";
						echo "<td>".$row["eid"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["par"]."</td>";
						echo "<td>".$row["fee"]."</td>";
						echo "<td>".$row["room"]."</td>";
						echo "<td>".$row["co1"]."</td>";
						echo "<td>".$row["mco1"]."</td>";
						echo "<td>".$row["co2"]."</td>";
						echo "<td>".$row["mco2"]."</td>";
						echo "<td><a href='delevent.php?eid=".$row["eid"]."'><i class='fa fa-trash'aria-hidden='true'></i></a> / <a href='editevent.php?eid=".$row["eid"]."'><i class='fa fa-pencil'aria-hidden='true'></i></a></td>";
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