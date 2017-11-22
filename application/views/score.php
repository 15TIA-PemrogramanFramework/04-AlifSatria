<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>UKM BASKET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Product Order Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts  -->
<link href="//fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="<?php echo base_url ('assets/') ?>css/style_form.css" rel='stylesheet' type='text/css' media="all" /> 
<!-- /css -->
</head>
<body>

<h1 class="header-agileits w3layouts w3 w3l w3ls">SCORE</h1>
<div class="content-w3ls agileits agileinfo wthree">
	<form action="<?php echo $action ?>" method="post">
		<div class="form-wthree1 agileits agileinfo wthree">
		
			<div class="form-control"> 
				<select class="header" name="id_team1"><span>:</span>
				<?php foreach ($tim as $key => $value) {?>
				<option value="<?php echo $value->id_team; ?>">  <?php echo $value->nama_team; ?></option>
				<?php } ?>
				</select>
				
				<input type="text" id="firstname" name="point1" placeholder="Score Team A" title="Please enter your First Name" required="">
			</div>
			<div class="form-control">	
				<label class="header">ID Score <span>:</span></label>
				<input  id="email" name="id_score" placeholder="id_score" title="Please enter a Valid Email Address" required="">
			</div>
			<div class="form-control">
			<label class="header">nama Admin<span>:</span></label>	
				<select class="header" name="id_admin"><span>:</span>
				<?php foreach ($admin as $key => $value) {?>
				<option value="<?php echo $value->id_admin; ?>">  <?php echo $value->nama_admin; ?></option>
				<?php } ?>
				</select>
			</div>
			
			<div class="form-control">	
				<label class="header">Nama Ofisial <span>:</span></label>
				<input id="email" name="nama_ofisial" placeholder="Nama Ofisial" title="Please enter a Valid Email Address" required="">
			</div>
			<div class="form-control">	
				<label class="header">Nama Wasit <span>:</span></label>
				<input id="email" name="nama_wasit" placeholder="Nama Wasit" title="Please enter a Valid Email Address" required="">
			</div>
		
		</div>
		
		<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
			
			<div class="form-control"> 
				<select class="header" name="id_team2"><span>:</span>
				<?php foreach ($tim as $key => $value) {?>
				<option value="<?php echo $value->id_team; ?>">  <?php echo $value->nama_team; ?></option>
				<?php } ?>
				</select>
				<input type="text" id="lastname" name="point2" placeholder="Score Team B" title="Please enter your Last Name" required="">
			</div>
		
		</div>
		<div class="clear"></div>
		
		<div class="form-control1"> 
			<label class="header">TEMPAT <span>:</span></label>
			<input type="text" id="address" name="tempat" placeholder="Tempat" title="Please enter Billing Address" required="">
		</div>
			
		<div class="form-control2"> 
			<label class="header">Waktu <span>:</span></label>
			<input type="text" id="address2" name="waktu" placeholder="Waktu" title="Please enter Your Address" required="">
		</div>
		
		
		
		<div class="form-control last">
			<input type="submit" class="register" value="SIMPAN">
			<input type="reset" class="reset" value="Reset">
			<div class="clear"></div>
		</div>	
	</form>
</div>
<p class="copyright w3layouts w3 w3l w3ls">© 2017 Alif Satria | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>