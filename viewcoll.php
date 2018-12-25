<?php

session_start();
include 'connect.php' ;
if(isset($_SESSION['uid'])&& $_SESSION['type'] == 'a')
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
	echo "<script>alert('YOU ARE NOT AN ADMIN')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
include 'header.php';
?>
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">TOTAL COLLECTION</h3> 
			<table id="table">
			<tr>
			<th>Sl. No.</th>
			<th>Name</th>
			<th>Gen Reg Coll</th>
			<th>Evt Reg Coll</th>
			<th>Total</th>
			</tr>
			<?php
			$counter=1;
				$select="SELECT name,uid FROM user u";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$counter++."</td>";
						echo "<td>".$row["name"]."</td>";
						$uid=$row["uid"];
						$count=0;
						$countgen="select * from genreg where uid='$uid'";
						if($resultc=mysqli_query($connect,$countgen))
						{
						while($rowc=mysqli_fetch_assoc($resultc))
						{
							$count++;
						}
						}
						echo "<td>".($count*20)."</td>";
						$sum=0;
						$countgen="select * from eventreg where uid='$uid'";
						if($resultc=mysqli_query($connect,$countgen))
						{
						while($rowc=mysqli_fetch_assoc($resultc))
						{
							$sum=$sum+$rowc["fee"];
						}
						}
						echo "<td>".$sum."</td>";
						echo "<td>".($sum+($count*20))."</td>";
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