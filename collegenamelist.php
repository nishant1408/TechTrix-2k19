<?php
include 'connect.php';
echo "<option value=''>SELECT COLLEGE NAME</option>";
$select="SELECT * FROM college order by name ASC";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
	}
}
?>