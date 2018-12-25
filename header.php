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
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

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
<!-- start-smooth-scrolling -->
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
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>	
</head>

<body >
	<!-- header -->
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
						<font color='white'><b>Hi <?=$name?></b></font>
					</li>
					<li class="dropdown head-dpdn">
						<a href="dashboard.php" class="dropdown-toggle"><b>Dashboard</b></a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Menu</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li class="has-children">
									<a href="#">Event Management</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">Options</a>  
											<ul class="is-hidden"> 
											<li class="go-back"><a href="#">Go Back</a></li>
												<li><a href="addevent.php">Add Event</a></li> 
												<li><a href="viewevent.php">View Events</a> </li>
												<li><a href="addcollg.php">Add College</a> </li>
												<li><a href="viewcollg.php">View College</a> </li>
											</ul>
										</li> 
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">General Regisration</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">Options</a>  
											<ul class="is-hidden"> 
											<li class="go-back"><a href="#">Go Back</a></li>
												<li><a href="addgen.php">Add General Regisration</a></li> 
												<li><a href="viewgen.php">View General Regisration</a> </li>
											</ul>
										</li> 
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">Event Regisration</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">Options</a>  
											<ul class="is-hidden"> 
											<li class="go-back"><a href="#">Go Back</a></li>
												<li><a href="addevereg.php">Add Event Regisration</a></li> 
												<li><a href="viewevereg.php">View Event Regisration</a> </li>
											</ul>
										</li> 
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">User Management</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">Options</a>  
											<ul class="is-hidden"> 
											<li class="go-back"><a href="#">Go Back</a></li>
												<li><a href="adduser.php">Add User</a></li> 
												<li><a href="viewuser.php">View User</a> </li>
											</ul>
										</li> 
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">Collection</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
											<a href="#">Options</a>  
											<ul class="is-hidden"> 
											<li class="go-back"><a href="#">Go Back</a></li>
												<li><a href="viewcoll.php">View Collection</a></li> 
											</ul>
										</li> 
									</ul>
								</li> 
							</ul> 
						</nav> 
					</div>  
				</div>
				
			</div>
		</div>
	</div>
	<style>
#table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0069cc;
  color: white;
}
</style>
