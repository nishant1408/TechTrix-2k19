<?php

session_start();
include 'connect.php' ;
if(isset($_SESSION['uid']) && $_SESSION['type'] == 'a')
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
	$id=$_GET["id"];
include 'header.php';
?>

	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">EDIT COLLEGE</h3> 
			
			<div class="login-body">
					<input type="text" class="form-control bfh-states" id="name" placeholder="College Name">
					<button class="form-control bfh-states" type="submit" id="add" style="background-color:#0069cc;"  ><font color='white'><b> UPDATE COLLEGE </b></font></button>
					<p id="output"></p>
				</form>
			</div>   
		</div>
	</div>
	<script>
	$('#add').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>UPDATING EVENT .....</b></font><br>');
	var name=$('#name').val();
	if(name == '')
	{
		$('#output').html('<font color="red"><b>FILL OUT ALL THE FIELDS</b></font>');
	}
	else
	{
	$.post('editcollgf.php',{id:<?=$id?>,name:name}, function(data){
		$('#output').html(data);
		$('#name').hide();
$('#add').hide();
	});
	}
	
});
	</script>
	<?php	$select="SELECT * from college WHERE id='$id'";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<script>
$('#name').val('".$row["name"]."');
						</script>";
					}
				}
	?>
	<?php
	include 'footer.php';
	?>