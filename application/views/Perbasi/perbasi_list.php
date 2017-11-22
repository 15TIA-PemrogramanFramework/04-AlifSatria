<?php 
$this->load->view('templates/header_table');
?>

<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Perbasi  <h6>      <?php echo tgl(); ?> </h6></div>

					<div class="pane;-title text-right">
		<?php echo anchor(site_url("perbasi/tambah"),'<i class="glyphicon glyphicon-plus"> </i> Tambah Data', 'class="btn btn-primary"');?>
	</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
		<tr>
			<th>No Izin</th>
			<th>Penanggung Jawab</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($perbasi as $key => $value) { ?>

			<tr>
				<td><?php echo $value->no_izin; ?></td>
				<td><?php echo $value->penanggungjawab; ?></td>
				<td>
				<?php echo anchor(site_url("perbasi/edit/".$value->no_izin),
					'<i class="glyphicon glyphicon-wrench"></i>', 
					'class="btn btn-warning"');?>
				<?php echo anchor(site_url("perbasi/delete/".$value->no_izin),
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