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
			<h3 class="w3ls-title w3ls-title1">ADD EVENT REGISTRATION</h3> 
			
			<div class="login-body">
					<select class="form-control bfh-states" id="eid"><br>
						<?php
						include 'eventnamelist.php';
						?>
					</select><br>
					<p id="details"></p><br>
					<button class="form-control bfh-states" type="submit" id="add" style="background-color:#0069cc;"  ><font color='white'><b> ADD EVENT REGISTRATION </b></font></button>
					<p id="output"></p><br>
					<button class="form-control bfh-states" type="submit" id="new" style="background-color:#0069cc;" ><font color='white'><b> ADD NEW EVENT REGISTRATION </b></font></button>
				</form>
			</div>   
		</div>
	</div>
	<script>
	$(document).ready(function() { 
	$('#new').hide();
	$('#add').hide();
}); 
$('#eid').change(function() {
	var eid=$('#eid').val();
  $.post('eventdetails.php',{eid:eid}, function(data){
		$('#details').html(data);
	});
	$('#add').show();
});
$('#add').click(function() {
	var eid=$('#eid').val();
	var p1=$('#p1').val();
	var p2=$('#p2').val();
	var p3=$('#p3').val();
	var p4=$('#p4').val();
	var p5=$('#p5').val();
	var team=$('#team').val();
	var fee=$('#fee').val();
	if(p1 == '')
	{
		
	}
	else
	{
  $.post('addeveregf.php',{eid:eid,team:team,fee:fee,p1:p1,p2:p2,p3:p3,p4:p4,p5:p5}, function(data){
	  $('#details').html('');
		$('#output').html(data);
	});
	$('#eid').val('');
	$('#eid').hide();
	$('#add').hide();
	$('#new').show();
	}
});
$('#new').click(function() {
	$('#eid').show('');
	$('#output').html('');
	$('#new').hide();
});
	</script>
	<?php
	include 'footer.php';
	?>