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
										    <label for="inputEmail3" class="col-sm-2 control-label">Team A</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan Team A" value="<?php echo $id_team1; ?>" class="form-control" name="id_team1">
										    </div>
										  </div>

										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Team B</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan Team B" value="<?php echo $id_team2; ?>" class="form-control" name="id_team2">
										    </div>
										  </div>
	 										<div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Point A</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan Point A" value="<?php echo $point1; ?>" class="form-control" name="point1">
										    </div>
										  </div>

										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Point B</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan Point B" value="<?php echo $point2; ?>" class="form-control" name="point2">
										    </div>
										  </div>
											<div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Admin</label>
											<div class="col-md-10">
												<select class="form-control" id="select-1" name="id_admin">
							<?php foreach ($admin as $key => $value) { ?>
							<option value="<?php echo $value->id_admin; ?>"><?php echo $value->nama_admin; ?></option>
							<?php } ?>			
									</select>		
											</div>
										   </div>

										   

										    <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nama Wasit</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan Nama Wasit" value="<?php echo $nama_wasit; ?>" class="form-control" name="nama_wasit">
										    </div>
										  </div>
	 										<div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Tempat</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan Tempat" value="<?php echo $tempat; ?>" class="form-control" name="tempat">
										    </div>
										  </div>

										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Waktu</label>
										    <div class="col-sm-10">
										    <input type="text" placeholder="Masukkan Waktu" value="<?php echo $waktu; ?>" class="form-control" name="waktu">
										    </div>
										  </div>

	
	<input type="hidden" name="id_score" value="<?php echo $id_score; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('datascore'); ?>" class="btn btn-default">Cancel</a>
</form>
								    </div>
								</div>
		  				</div>
		  			</div>
					</div>
				</div>
<?php $this->load->view('templates/footer_form'); ?>