<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>I.DO-Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="South African NGO, volunteering, matric rewrite, skills training, Registered NPO, Charity Work, Giving, Less privileged, Gap year, Volunteer work, fulfilling, Gauteng, Johannesburg, Trusted, Easy" />
<meta name="description" content="I.Do Foundation, specialist NGO making way for today's leaders. ">
<meta name="author" content="Mathemera">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/jquery.flipster.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<title>
  <?php 
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
	  echo 'Photo Gallery';
	}
  ?>
</title>

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="colorbox/colorbox.css" />
<!--<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />-->
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<!--<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {	
	
	// colorbox settings
	$(".albumpix").colorbox({rel:'albumpix'});
	
	// fancy box settings
	/*
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
	*/
});
</script>
<!-- end gallery header -->
</head>
<body>
	<!-- header -->
	<div class="headerw3l">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1><a href="/blog/index.php">I . DO <span><i>Youth.</i> <i class="logo-w3l2">Partnership.</i> <i class="logo-w3l3"> Growth.</i></span></a></h1>
				</div>
				<!-- navigation --> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
					<ul class="nav navbar-nav navbar-left">
						<li><a href="/blog/index.php" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
						<li><a href="about.html" class="link link--yaku"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span> <span>U</span><span>S</span></a></li>
						<li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>S</span><span>E</span><span>R</span><span>V</span><span>I</span><span>C</span><span>E</span><span>S</span> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="causes.html" class="link link--yaku"><span>C</span><span>A</span><span>U</span><span>S</span><span>E</span><span>S</span></a></li>
								<li><a href="Mentorship.html" class="link link--yaku"><span>M</span><span>E</span><span>N</span><span>T</span><span>O</span><span>R</span><span>S</span><span>H</span><span>I</span><span>P</span></a></li>
								<li><a href="education.html" class="link link--yaku"><span>E</span><span>D</span><span>U</span><span>C</span><span>A</span><span>T</span><span>I</span><span>O</span><span>N</span></a></li>
								<li><a href="downloads.html" class="link link--yaku"><span>D</span><span>O</span><span>W</span><span>N</span><span>L</span><span>O</span><span>A</span><span>D</span><span>S  </span></a></li>
								</ul>
						</li>
						<li class="active"><a href="gallery.html" class="link link--yaku"><span>G</span><span>A</span><span>L</span><span>L</span><span>E</span><span>R</span><span>Y</span></a></li>
						<li><a href="contact.php" class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
						</ul>		
					<div class="clearfix"> </div>
				</div><!-- //navigation --> 
			</div>	
		</nav>		
	</div>	
	<!-- //header -->
<p>&nbsp;</p>

<div class="gallery">  
  <?php include "folio-gallery.php"; ?>
</div>   
	<!-- footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-agileinfo">
				 
				<div class="col-md-6 col-sm-3 footer-grid w3social">
					<h3>Quick links</h3>
					<ul>
						<li><a href="/blog/index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="volunteer.html">Become a Volunteer</a></li>
						<li><a href="donate.html">Donate</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				
				<div class="col-md-6 col-sm-3 footer-grid w3social">
					<h3>Social Media</h3>
					<ul>
						
						<li><a href="https://www.facebook.com/Ido-Foundation-South-Africa-457906351326592/"><i class="fa fa-facebook"></i>Facebook</a></li>
						<li><a href="https://twitter.com/idofoundationza"><i class="fa fa-twitter"></i>Twitter</a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	
	<div class="copy-right"> 
		<div class="container">
		<p>NPO Number - 142004</p>
			<p>VAT Registration Number - 9373074195</p>
			<p>© 2018  I.DO Foundation . All rights reserved | Design by <a href=""> Fusse </a> powered by Folio Gallery</p>
		</div>
	</div  
	<!-- //footer --> 
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
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>