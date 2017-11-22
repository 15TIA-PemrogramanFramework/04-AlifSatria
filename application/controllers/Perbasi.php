
<?php 
/**
* 
*/
class Perbasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Perbasi_model');

		if(!$this->session->userdata('logined') && !$this->session->userdata('logined') == true)
		{
			redirect('login');
		}
		else{
			if($this->session->userdata('status') == 'member'){
				redirect('home');
			}
		}
	}
	function index()
	{
		$data['perbasi'] = $this->Perbasi_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Perbasi/perbasi_list',$data);
	}

	function tambah()
	{
		$data = array(
			'no_izin' => set_value('no_izin'),
			'penanggungjawab' => set_value('penanggungjawab'),
			'button' => 'Tambah',
			'action' => site_url('perbasi/tambah_aksi')
			);
		$this->load->view('Perbasi/perbasi_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'penanggungjawab' => $this->input->post('penanggungjawab'),
			);
		$this->Perbasi_model->tambah_data($data);
		redirect(site_url('perbasi'));
	}

	function delete($id)
	{
		$this->Perbasi_model->hapus_data($id);
		redirect(site_url('perbasi'));
	}
	function edit($id)
	{
	$adm=$this->Perbasi_model->ambil_data_id($id);
	$data=array(
		'penanggungjawab'		=>set_value('penanggungjawab',$adm->penanggungjawab),
		'no_izin'			=>set_value('no_izin',$adm->no_izin),
		'button'			=>'Edit',
		'action'			=>site_url('perbasi/edit_aksi')
		);

	$this->load->view('Perbasi/perbasi_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(

			'penanggungjawab' => $this->input->post('penanggungjawab'),
			);

		$id=$this->input->post('no_izin');
		$this->Perbasi_model->edit_data($id,$data);
		redirect(site_url('perbasi'));
	}
}
?>