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
include 'header.php';
?>
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">ADD EVENT</h3> 
			
			<div class="login-body">
					<input type="number" class="form-control bfh-states" id="eid" placeholder="Event ID" ><br>
					<input type="text" class="form-control bfh-states" id="name" placeholder="Event Name">
					<input type="number" class="form-control bfh-states" id="par" placeholder="Maximum Participants"><Br>
					<input type="number" class="form-control bfh-states" id="fee" placeholder="Registration Fee"><br>
					<input type="text" class="form-control bfh-states" id="room" placeholder="Room No">
					<input type="text" class="form-control bfh-states" id="co1" placeholder="Co-Ordinator 1">
					<input type="number" class="form-control bfh-states" id="mco1" placeholder="Mobile No"><br>
					<input type="text" class="form-control bfh-states" id="co2" placeholder="Co-Ordinator 2">
					<input type="number" class="form-control bfh-states" id="mco2" placeholder="Mobile No"><br>
					<button class="form-control bfh-states" type="submit" id="add" style="background-color:#0069cc;"  ><font color='white'><b> ADD EVENT </b></font></button>
					<button class="form-control bfh-states" type="submit" id="new" style="background-color:#0069cc;" ><font color='white'><b> ADD NEW EVENT </b></font></button>
					<p id="output"></p>
				</form>
			</div>   
		</div>
	</div>
	<script>
	$(document).ready(function() { 
	$('#new').hide();
}); 
	$('#add').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>ADDING EVENT .....</b></font><br>');
	var eid=$('#eid').val();
	var name=$('#name').val();
	var par=$('#par').val();
	var fee=$('#fee').val();
	var room=$('#room').val();
	var co1=$('#co1').val();
	var mco1=$('#mco1').val();
	var co2=$('#co2').val();
	var mco2=$('#mco2').val();
	if(eid == '' || name == '' || fee == '' || par == '' || room == '' || co1 == '' || mco1 == '' || co2 =='' || mco2 =='' )
	{
		$('#output').html('<font color="red"><b>FILL OUT ALL THE FIELDS</b></font>');
	}
	else
	{
	$.post('addeventf.php',{eid:eid,name:name,fee:fee,par:par,room:room,co1:co1,mco1:mco1,co2:co2,mco2:mco2}, function(data){
		$('#output').html(data);
		$('#eid').hide();
		$('#name').hide();
$('#par').hide();
$('#fee').hide();
$('#room').hide();
$('#co1').hide();
$('#mco1').hide();
$('#co2').hide();
$('#mco2').hide();
$('#add').hide();
$('#new').show();
	});
	}
	
});
$('#new').click(function(){ 
$('#output').html('');
$('#eid').show();
$('#name').show();
$('#par').show();
$('#fee').show();
$('#room').show();
$('#co1').show();
$('#mco1').show();
$('#co2').show();
$('#mco2').show();
$('#add').show();
$('#new').hide();
$('#eid').val('');
$('#name').val('');
$('#par').val('');
$('#fee').val('');
$('#room').val('');
$('#co1').val('');
$('#mco1').val('');
$('#co2').val('');
$('#mco2').val('');
	});
	</script>
	<?php
	include 'footer.php';
	?>