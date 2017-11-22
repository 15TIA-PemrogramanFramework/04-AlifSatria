
<?php 
/**
* 
*/
class Team extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Team_model');

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
		$data['team'] = $this->Team_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Team/team_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama_team' => set_value('nama_team'),
			'id_team' => set_value('id_team'),
			'button' => 'Tambah',
			'action' => site_url('team/tambah_aksi')
			);
		$this->load->view('Team/team_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_team' => $this->input->post('nama_team'),
			);
		$this->Team_model->tambah_data($data);
		redirect(site_url('team'));
	}

	function delete($id)
	{
		$this->Team_model->hapus_data($id);
		redirect(site_url('team'));
	}
	function edit($id)
	{
	$adm=$this->Team_model->ambil_data_id($id);
	$data=array(
		'nama_team'		=>set_value('nama_team',$adm->nama_team),
		'id_team'			=>set_value('id_team',$adm->id_team),
		'button'			=>'Edit',
		'action'			=>site_url('team/edit_aksi')
		);

	$this->load->view('Team/team_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(

			'nama_team' => $this->input->post('nama_team'),
			);

		$id=$this->input->post('id_team');
		$this->Team_model->edit_data($id,$data);
		redirect(site_url('team'));
	}
}
?>