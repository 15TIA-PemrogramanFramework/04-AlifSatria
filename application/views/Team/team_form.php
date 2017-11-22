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
										    <label for="inputEmail3" class="col-sm-2 control-label">Nama Team</label>
										    <div class="col-sm-10">
										     <input type="text" placeholder="Masukkan Nama Team" value="<?php echo $nama_team; ?>" class="form-control" name="nama_team">
										    </div>
										  </div>

	
	<input type="hidden" name="id_team" value="<?php echo $id_team; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Team'); ?>" class="btn btn-default">Cancel</a>
</form>
								    </div>
								</div>
		  				</div>
		  			</div>
					</div>
				</div>
<?php $this->load->view('templates/footer_form'); ?>