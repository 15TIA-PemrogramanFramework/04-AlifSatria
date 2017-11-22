<?php $this->load->view('templates/header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Selamat Datang <?php echo $this->session->userdata('username'); ?></h2>
                <p>
                          </p>
            </div>
        </div>
<?php $this->load->view('templates/footer'); ?>