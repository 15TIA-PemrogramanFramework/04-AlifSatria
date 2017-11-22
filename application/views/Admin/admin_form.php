<?php $this->load->view('templates/header_form'); ?>
<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Bootstrap Wizard</div>
							</div>
							<div class="panel-body">
								<div class="tab-content">
								    <div class="tab-pane active" >
								      <form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
										 <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan Nama " value="<?php echo $nama_admin; ?>" class="form-control" name="nama_admin">
										    </div>
										  </div>
										  <div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Select</label>
											<div class="col-md-10">
												<select class="form-control" id="select-1"name="no_izin">
												<?php foreach ($perbasi as $key => $value) { ?>
												<option value="<?php echo $value->no_izin; ?>"><?php echo $value->penanggungjawab; ?></option>
												<?php } ?>
												</select> 			
											</div>
										   </div>
										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan username" value="<?php echo $username; ?>" class="form-control" name="username">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan password" value="<?php echo $password; ?>" class="form-control" name="password">
										    </div>
										  </div>
	
	
	<input type="hidden" name="id_admin" value="<?php echo 
	$id_admin; ?>">

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('admin'); ?>" class="btn btn-default">Cancel</a>
</form>
								    </div>
								</div>
		  				</div>
		  			</div>
					</div>
				</div>
<?php $this->load->view('templates/footer_form'); ?>