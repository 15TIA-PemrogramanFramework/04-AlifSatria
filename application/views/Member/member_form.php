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
										    <label for="inputEmail3" class="col-sm-2 control-label">Nama Member</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan Nama" value="<?php echo $nama_member; ?>" class="form-control" name="nama_member">
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
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Kelas Member</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan kelas" value="<?php echo $kelas_member; ?>" class="form-control" name="kelas_member">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Jurusan Member</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan Jurusan" value="<?php echo $jurusan_member; ?>" class="form-control" name="jurusan_member">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Prodi Membe</label>
										    <div class="col-sm-10">
										      <input type="text" placeholder="Masukkan prodi" value="<?php echo $prodi_member; ?>" class="form-control" name="prodi_member">
										    </div>
										  </div>
										  <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
										  <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										  <a href="<?php echo site_url('member'); ?>" class="btn btn-default">Cancel</a>
										</form>
								    </div>
								</div>
		  				</div>
		  			</div>
					</div>
				</div>
<?php $this->load->view('templates/footer_form'); ?>