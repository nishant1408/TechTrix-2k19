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
	$gid=$_GET["gid"];
include 'header.php';
?>

	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">EDIT GENERAL REGISTRATION</h3> 
			
			<div class="login-body">
					<input type="text" class="form-control bfh-states" id="name" placeholder="Name of Participant">
					<input type="number" class="form-control bfh-states" id="mobile" placeholder="Mobile No"><Br>
					<input type="email" class="form-control bfh-states" id="email" placeholder="Email ID"><br>
					<select class="form-control bfh-states" id="college">
					<?php
					include 'collegenamelist.php';
					?>
					</select><br>
					<button class="form-control bfh-states" type="submit" id="add" style="background-color:#0069cc;"  ><font color='white'><b> UPDATE GENERAL REGISTRATION </b></font></button>
					<p id="output"></p>
				</form>
			</div>   
		</div>
	</div>
	<script>
	$('#add').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>UPDATING EVENT .....</b></font><br>');
	var name=$('#name').val();
	var mobile=$('#mobile').val();
	var email=$('#email').val();
	var college=$('#college').val();
	if(name == '' || mobile == '' || email == '' || college == '')
	{
		$('#output').html('<font color="red"><b>FILL OUT ALL THE FIELDS</b></font>');
	}
	else
	{
	$.post('editgenf.php',{gid:<?=$gid?>,name:name,mobile:mobile,email:email,college:college}, function(data){
		$('#output').html(data);
		$('#name').hide();
$('#mobile').hide();
$('#email').hide();
$('#college').hide();
$('#add').hide();
	});
	}
	
});
	</script>
	<?php	$select="SELECT * from genreg WHERE gid='$gid'";
				if($result=mysqli_query($connect,$select))
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<script>
$('#mobile').val('".$row["mobile"]."');
$('#name').val('".$row["name"]."');
$('#email').val('".$row["email"]."');
$('#college').val('".$row["college"]."');
</script>";
					}
				}
	?>
	<?php
	include 'footer.php';
	?>