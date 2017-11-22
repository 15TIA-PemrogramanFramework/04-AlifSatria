<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>UKM BASKET</title>
<!-- Custom Theme files -->
<link href="<?php echo base_url ('assets/') ?>css/style_login.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Square login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>

<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="<?php echo base_url ('assets/') ?>images/group.png" alt=""/></span>
			</div>
			<h1>Login</h1>
		
			<div class="login-top">
			<form action="<?php echo site_url('login') ?>" method="POST">
				<div class="login-ic">
					<i ></i>
					<input type="text" name="username" value="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
					<div class="clear"> </div>
				</div>
				<div>
					<select name="pilihan" class="login-ic" style="width:460px; height: 50px; color:white;">
						<option value="1">Admin</option>
						<option value="2">Member</option>
					</select>
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					<input type="submit"  value="Login" >
				</div>
				<br>
				<div class="log-bwn">
					<a href="<?php echo site_url('registrasi') ?>">Register</a>
				</div>

				<div class="log-bwn">
					<h1><?php echo $this->session->flashdata('gagal'); ?>
				</div>



				</form>

	
			</div>

			<p class="copy">© 2017 Alif Satria | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>		
<!--header start here-->
</body>
</html>