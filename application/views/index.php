<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>UKM BASKET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Diction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="<?php echo base_url ('assets/') ?>css/bootstrap_home.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url ('assets/') ?>css/bootstrap_home.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url ('assets/') ?>css/bootstrap_home.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url ('assets/') ?>css/bootstrap_home.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url ('assets/') ?>css/font-awesome.min_home.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url ('assets/') ?>css/style_home.css" rel='stylesheet' type='text/css' />	
	<link rel="stylesheet" href="<?php echo base_url ('assets/') ?>css/flexslider_home.css" type="text/css" media="screen" />
	<script src="<?php echo base_url ('assets/') ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url ('assets/') ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url ('assets/') ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url ('assets/') ?>js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
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
		<!--animate-->
		<link href="<?php echo base_url ('assets/') ?>css/animate_home.css" rel="stylesheet" type="text/css" media="all">
		<script src="<?php echo base_url ('assets/') ?>js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!--//end-animate-->

	</head>
	<body>
		<!-- navigation -->
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="navigation wow fadeInLeft animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right link-effect">
								<?php
								$status = $this->session->userdata('status');
								if($this->session->userdata('logined') == false) { 
									echo menu_utama_non_member();
								}
								else{
									if($status == 'member'){
										echo menu_utama_member();
									}
									else{
										echo menu_utama();
									} 

								}
								?>
								<div class="clearfix"></div>
							</ul>

							
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>

				<div class="banner-info">
					<div class="logo wow fadeInRight animated" data-wow-delay=".5s">
						<h3><a href="index.php">PCR</a></h3>
					</div>
					<h1 class="wow fadeInRight animated" data-wow-delay=".5s"></h1>
					<p class="wow fadeInRight animated" data-wow-delay=".5s"><h1>UKM BASKET</h1></p>
				</div>

			</div>
		</div>
		<!-- //navigation -->
		<!-- /banner -->
		<!-- about -->
		<div class="about" id="about">
			<div class="container">
				<div class="col-md-6 about-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h1>ABOUT UKM BASKET PCR</h1><br>
					<h3>UKM Basket Politeknik Caltex Riau adalah wadah bagi mahasiswa PCR untuk mengembangkan kemampuannya dalam bermain basket</h3>

				</div>
				<div class="col-md-6 about-left wow fadeInRight animated" data-wow-delay=".5s">
					<img src="<?php echo base_url ('assets/') ?>images/1.jpg" alt="" class="img-responsive">
				</div>
				<div class="clearfix"></div>
				<div class="what wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<h1>TENTANG DEVELOPER</h1>
					<p> <h3>Saya Alif Satria, Jurusan Teknik Computer, Program Studi Teknik Informatika
						dan saya generasi 15 di Politeknik Caltex Riau</h3></p>
					</div>


					<!--- contact ---->	 
					<!--- footer ---->	
					<div class="footer">
						<div class="container">
							<p class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">© 2017 Alif Satria | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
						</div>
					</div>
					<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>

					<!--- footer ---->	
				</body>
				</html>