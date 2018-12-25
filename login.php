<?php
session_start();
include 'connect.php' ;
$error=0;
if(isset($_POST['submit']))
{
	$input=$_POST["username"];
	$password=$_POST["password"];
	$rpassword="";
	$select="SELECT password,uid,type from user where email='$input' or mobile='$input'";
	if($result=mysqli_query($connect,$select))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$rpassword=$row["password"];
			$uid=$row["uid"];
			$type=$row["type"];
		}
	}
	if($rpassword == md5($password))
	{
		$_SESSION["uid"]=$uid;
		$_SESSION["type"]=$type;
		echo "<script> location.href='dashboard.php'; </script>";
	}
	else
	{
		$error=1;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<title>TechTrix '19</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="TechTrix" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.2.3.min.js"></script> 
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<script src="js/owl.carousel.js"></script>  
<script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.header-two').scrollToFixed();  
        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop',
				containerHoverID: 'toTopHover',
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
<script src="js/bootstrap.js"></script>	
</head>
<body>
	<div class="header">
		<div class="w3ls-header">
		<div class="w3ls-header-left">
				<ul>
					<li class="dropdown head-dpdn">
						<font color='white'><b>TechTrix 2k19 Registration Desk</b></font>
					</li>
				</ul>
			</div>
			<div class="w3ls-header-right">
				<ul>
				
					<li class="dropdown head-dpdn">
						<a href="" class="dropdown-toggle"> Help</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3> 
			<h5 class="w3ls-title w3ls-title1"><?php if($error==1){ echo "<p><font color='red'><b>INVALID DETAILS.TRY AGAIN</b></font></p>"; }?></h5>
			
			<div class="login-body">
				<form action="login.php" method="post">
					<input type="text" class="form-control bfh-states" name="username" placeholder="Enter your email/Mobile" required="">
					<input type="password" name="password" class="form-control bfh-states" placeholder="Password" required="">
					<input type="submit" name="submit" value="Login">
					<div class="forgot-grid">
						<div class="forgot">
							<a href="forgot_password.php">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>   
		</div>
	</div>
	</body>
	</html>
	<?php
	include 'footer.php'
	?>