<?php 
$this->load->view('templates/header_table');
?>

<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Score  <h6>      <?php echo tgl(); ?> </h6></div>

					<div class="pane;-title text-right">
		<?php echo anchor(site_url("datascore/tambah"),'<i class="glyphicon glyphicon-plus"> </i> Tambah Data', 'class="btn btn-primary"');?>
	</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
		<tr>
			<th>ID_Score</th>
				<th>Team A</th>
				<th>Team B</th>
				<th>Point Team A</th>
				<th>Point Team B</th>
				<th>Nama Admin</th>
				<th>Nama Wasit</th>
				<th>Tempat</th>
				<th>Waktu</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($datascore as $key => $value) { ?>

			<tr>
				<td><?php echo $value->id_score; ?></td>
				<td><?php echo $value->team1; ?></td>
				<td><?php echo $value->team2; ?></td>
				<td><?php echo $value->point1; ?></td>
				<td><?php echo $value->point2; ?></td>
				<td><?php echo $value->nama_admin; ?></td>
				<td><?php echo $value->nama_wasit; ?></td>
				<td><?php echo $value->tempat; ?></td>
				<td><?php echo $value->waktu; ?></td>
				<td>
				<?php echo anchor(site_url("datascore/edit/".$value->id_score),
					'<i class="glyphicon glyphicon-wrench"></i>', 
					'class="btn btn-warning"');?>
				<?php echo anchor(site_url("datascore/delete/".$value->id_score),
					'<i class="glyphicon glyphicon-trash"></i>', 
					'class="btn btn-danger"');?>
					</td>
			</tr>
		<?php } ?>
</tbody>
</table>
  				</div>
  			</div>
<?php 
$this->load->view('templates/footer_table');
?>