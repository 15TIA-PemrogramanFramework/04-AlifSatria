
<?php 
$this->load->view('templates/header_table');
?>



<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Member <h6>      <?php echo tgl(); ?> </h6></div>

					<div class="pane;-title text-right">
					<?php  $status = $this->session->userdata('status'); 
                    if($status == 'admin'){  ?>
		<?php echo anchor(site_url("member/tambah"),'<i class="glyphicon glyphicon-plus"> </i> Tambah Data', 'class="btn btn-primary"');}?>
	</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
			<th>ID_Member</th>
			<th>Username</th>
			<th>Password</th>
			<th>Kelas Member</th>
			<th>Jurusan Member</th>
			<th>Prodi Member</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php if ($status == 'admin'){ 
	foreach ($data as $key => $value) { ?>

			<tr>
				<td><?php echo $value->id_member; ?></td>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->password; ?></td>
				<td><?php echo $value->kelas_member; ?></td>
				<td><?php echo $value->jurusan_member; ?></td>
				<td><?php echo $value->prodi_member; ?></td>
				<td>
				<?php echo anchor(site_url("member/edit/".$value->id_member),
					'<i class="glyphicon glyphicon-wrench"></i>', 
					'class="btn btn-warning"');?>
				<?php echo anchor(site_url("member/delete/".$value->id_member),
					'<i class="glyphicon glyphicon-trash"></i>', 
					'class="btn btn-danger"');?>
					</td>
			</tr>
		<?php } } else {
			foreach ($member as $key => $value) { ?>

			<tr>
				<td><?php echo $value->id_member; ?></td>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->password; ?></td>
				<td><?php echo $value->kelas_member; ?></td>
				<td><?php echo $value->jurusan_member; ?></td>
				<td><?php echo $value->prodi_member; ?></td>
				<td>
				<?php echo anchor(site_url("member/edit/".$value->id_member),
					'<i class="glyphicon glyphicon-wrench"></i>', 
					'class="btn btn-warning"');?>
				<?php echo anchor(site_url("member/delete/".$value->id_member),
					'<i class="glyphicon glyphicon-trash"></i>', 
					'class="btn btn-danger"');?>
					</td>
			</tr>
		<?php  } } ?>
	</tbody>
</table>
  				</div>
  			</div>
<?php 
$this->load->view('templates/footer_table');
?>