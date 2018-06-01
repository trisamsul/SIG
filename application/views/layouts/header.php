<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<title>Density Atlas &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>-->
	<title>Density Atlas</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.menu-highlight{
			color: #52D681 !important;
		}
		.menu-highlight:hover{
			color: #2f9051 !important;
		}
	</style>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo">
						<a href="<?php echo base_url(); ?>">
							<img src="<?php echo base_url(); ?>assets/images/icon.png" alt="img" style="width: 28px;margin-right:5px;">
							Density Atlas
						</a>
						</div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li <?php if(is_null($this->uri->segment(1))) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="has-dropdown <?php if($this->uri->segment(1) == "measuring") echo "active"; ?>">
								<a  href="<?php echo base_url(); ?>measuring">Measuring</a>
								<ul class="dropdown">
									<li><a href="<?php echo base_url(); ?>measuring/introduction">Introduction</a></li>
									<li><a href="<?php echo base_url(); ?>measuring/metrics">Metrics</a></li>
									<li><a href="<?php echo base_url(); ?>measuring/scale">Scale</a></li>
								</ul>
							</li>
							<li class="has-dropdown <?php if($this->uri->segment(1) == "understanding") echo "active"; ?>">
								<a href="<?php echo base_url(); ?>understanding">Understandings</a>
								<ul class="dropdown">
									<li><a href="<?php echo base_url(); ?>understanding/overview">Overview</a></li>
									<li><a href="<?php echo base_url(); ?>understanding/trends">Trends</a></li>
									<li><a href="<?php echo base_url(); ?>understanding/perceptions">Perceptions</a></li>
									<li><a href="<?php echo base_url(); ?>understanding/visualizations">Measuring + Visualizations</a></li>
									<li><a href="<?php echo base_url(); ?>understanding/designtech">Design + Technology</a></li>
								</ul>
							</li>
							<li <?php if($this->uri->segment(1) == "about") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>about">About</a></li>
							<li <?php if($this->uri->segment(1) == "casestudies") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>casestudies" class="menu-highlight">Case Studies</a></li>
							<li <?php if($this->uri->segment(1) == "stories") echo "class='active'"; ?>><a href="<?php echo base_url(); ?>stories" class="menu-highlight">Stories</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>