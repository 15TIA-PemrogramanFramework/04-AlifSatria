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
 <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/') ?>css/style_tables.css">
<!-- /fonts -->
<!-- css -->

<link href="<?php echo base_url ('assets/') ?>css/style_form.css" rel='stylesheet' type='text/css' media="all" /> 
<!-- /css -->
	<p style="margin-right: 80px" sty class="copyright w3layouts w3 w3l w3ls"><font size="100" >Tabel Pertandingan</font></a></p>

<body style="margin-left: 10px; margin-top: 50px;">
	<table cellspacing='0'>
		<thead>
			<tr>
				<th>ID_Score</th>
				<th>Team A</th>
				<th>Team B</th>
				<th>Point Team A</th>
				<th>Point Team B</th>
				<th>Nama Admin</th>
				<th>Nama Wait</th>
				<th>Tempat</th>
				<th>Waktu</th>
			</tr>
			<?php foreach ($score as $key => $value) { ?>
			<tr>
			<td><?php echo $value->id_score ?></td>
			<td><?php echo $value->team1 ?></td>
			<td><?php echo $value->team2 ?></td>
			<td><?php echo $value->point1 ?></td>
			<td><?php echo $value->point2 ?></td>
			<td><?php echo $value->nama_admin ?></td>
			<td><?php echo $value->nama_wasit ?></td>
			<td><?php echo $value->tempat ?></td>
			<td><?php echo $value->waktu ?></td>
			</tr>
			<?php } ?>
		</thead> 
	</table>
<br>
<br>
<br>



<p style="margin-right: 80px" sty class="copyright w3layouts w3 w3l w3ls">© 2017 Alif Satria | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>