<!DOCTYPE html>
<html>

<head>
	<!-- 
			Dear Hiring Manager,

			I built this website back in 2012. I made it mobile responsive some time around 2016.
			Aside from that, it hasn't received any major updates beyond occasionally updating my
			portfolio and resume.  I receive plenty of compliments on it (from non devs) so I am relucant
			to replace it :D

			Anyways, don't judge it too harshly.  It was kinda nifty for it's time! 

			- James
		-->
	<title>James Allen - Calgary Website Design &amp; Development</title>
	<meta name="description" content="Professional portfolio of James Allen. Freelance web developer and UI/UX designer in Calgary, Alberta" />
	<meta name="keywords" content="James Allen, Calgary Website Design, Okotoks Website Design, Freelance, Website Developer, UI/UX Designer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:app_id" content="114353651982658" />
	<meta property="og:image" content="https://james-allen.ca/images/tux-guitar.png" />
	<meta property="og:title" content="Calgary Website Design & Development" />
	<meta property="og:description" content="Professional portfolio of James Allen. Freelance web developer and UI/UX designer in Calgary, Alberta" />
	<meta property="og:url" content="https://james-allen.ca" />
	<meta property="og:site_name" content="James Allen Portfolio" />
	<meta property="og:type" content="website" />

	<link rel="icon" href="images/favicon.png" type="image/png" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/resume.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/media-queries.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="js/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Yanone+Kaffeesatz:700" rel="stylesheet" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/plugins.js" type="text/javascript"></script>
	<script src="js/jquery.easing.js" type="text/javascript"></script>
	<script src="js/jquery.ba-hashchange.min.js" type="text/javascript"></script>
	<script src="js/jquery.hashbangboom-0.2.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/fancybox/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GC106RP01M"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-GC106RP01M');
	</script>
</head>

<body>
	<div id="header" class="clr">
		<div id="headerLeft">
			<div class="content">
				<a id="logo" href="/" title="James Allen Calgary Web Design &amp; Development Consultant">
					<h1>James Allen</h1>
					<h2>Website Designer &amp; Developer</h2>
				</a>
				<ul id="primary-nav">
					<li><a href="#!/home">Home</a></li>
					<li><a href="#!/services">Services</a></li>
					<li><a href="#!/portfolio">Portfolio</a></li>
					<li><a href="/resume/Resume-James-Allen.pdf" target="_blank">Resume</a></li>
					<li><a href="#!/contact" class="scrollBottom">Contact</a></li>
				</ul>
				<div id="hamburger-button" class="hide-desktop">Menu </div>
			</div>
		</div>
		<div id="headerRight" class="hide-mobile"></div>
	</div>

	<div id="main">
		<div class="wrap">
			<?php include('home/index.php'); ?>
		</div>
		<div class="clr"></div>
		<div id="footer">
			<div class="content">
				<div class="footerQ">
					<a href="tel:4037022795">
						<i class="fas fa-phone"></i>
						<br>(403) 702-2795
					</a>
				</div>
				<div class="footerQ">
					<a href="mailto:me@james-allen.ca">
						<i class="fas fa-envelope"></i>
						<br>Email
					</a>
				</div>
				<div class="footerQ">
					<a href="https://linkedin.com/in/james-allen-yyc" target="_blank">
						<i class="fab fa-linkedin"></i>
						<br>LinkedIn
					</a>
				</div>
				<div class="footerQ">
					<a href="https://github.com/jimmyjames88" target="_blank">
						<i class="fab fa-github"></i>
						<br>GitHub
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>