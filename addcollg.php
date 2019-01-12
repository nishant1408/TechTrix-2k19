<?php

session_start();
include 'connect.php' ;
if(isset($_SESSION['uid']) && ($_SESSION['type'] == 'a' || $_SESSION['type'] == 'r' ))
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
	echo "<script>alert('YOU ARE NOT AN ADMIN OR REGISTRATION DESK MEMBER')</script>";
	echo "<script>location.href='dashboard.php'</script>";
}
include 'header.php';
?>
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">ADD COLLEGE</h3> 
			
			<div class="login-body">
					<input type="text" class="form-control bfh-states" id="name" placeholder="College Name" ><br>
					<button class="form-control bfh-states" type="submit" id="add" style="background-color:#0069cc;"  ><font color='white'><b> ADD COLLEGE </b></font></button>
					<p id="output"></p><br>
					<button class="form-control bfh-states" type="submit" id="new" style="background-color:#0069cc;" ><font color='white'><b> ADD NEW COLLEGE</b></font></button>
					
				</form>
			</div>   
		</div>
	</div>
	<script>
	$(document).ready(function() { 
	$('#new').hide();
}); 
	$('#add').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>ADDING COLLEGE .....</b></font><br>');
	var name=$('#name').val();
	if(name == '')
	{
		$('#output').html('<font color="red"><b>FILL OUT ALL THE FIELDS</b></font>');
	}
	else
	{
	$.post('addcollgf.php',{name:name}, function(data){
		$('#output').html(data);
		$('#name').hide();
		$('#add').hide();
$('#new').show();
	});
	}
	
});
$('#new').click(function(){ 
$('#output').html('');
$('#name').show();
$('#add').show();
$('#new').hide();
$('#name').val('');
	});
	</script>
	<?php
	include 'footer.php';
	?>