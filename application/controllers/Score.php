
<?php 
/**
* 
*/
class Score extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Team_model');
		$this->load->model('Tables_model');
		if(!$this->session->userdata('logined') && !$this->session->userdata('logined') == true)
		{
			redirect('login');
		}
		else{
			
		}
	}

	
	function index()
	{
		$data['score'] = $this->Tables_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('tables',$data);

	}
	function scoring()
	{
			if($this->session->userdata('status') == 'member'){
				redirect('home');
			}
 			$data = array(
			'id_team1' => set_value('id_team2'),
			'id_team2' => set_value('id_team2'),
			'point1' => set_value('point2'),
			'point2' => set_value('point2'),
			'nama_admin' => set_value('nama_admin'),
			'nama_wasit' => set_value('nama_wasit'),
			'tempat' => set_value('tempat'),
			'waktu' => set_value('waktu'),
			'admin' => $this->Admin_model->ambil_data(),
			'tim' => $this->Team_model->ambil_data(),
			'point2' => set_value('point2'),
			'id_score' => set_value('id_score'),
			'button' => 'Tambah',
			'action' => site_url('Score/tambah_aksi')
			);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('score',$data);

	}

	function tambah_aksi()
	{
		$data = array(
			'id_team1' => $this->input->post('id_team1'),
			'id_team2' => $this->input->post('id_team2'),
			'point1' => $this->input->post('point1'),
			'point2' => $this->input->post('point2'),
			'id_score' => $this->input->post('id_score'),
			'id_admin' => $this->input->post('id_admin'),
			'nama_wasit' => $this->input->post('nama_wasit'),
			'tempat' => $this->input->post('tempat'),
			'waktu' => $this->input->post('waktu'),
			);
		$this->Tables_model->tambah_data($data);
		redirect(site_url('tables'));
	}

	function delete($id)
	{
		$this->Admin_model->hapus_data($id);
		redirect(site_url('admin'));
	}
	function edit($id)
	{
	$adm=$this->Admin_model->ambil_data_id($id);
	$data=array(
		'username'			=>set_value('username',$adm->username),
		'password'			=>set_value('password',$adm->password),
		'nama_admin'		=>set_value('nama_admin',$adm->nama_admin),
		'id_admin'			=>set_value('id_admin',$adm->id_admin),
		'button'			=>'Edit',
		'action'			=>site_url('admin/edit_aksi')
		);

	$this->load->view('Admin/admin_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_admin' => $this->input->post('nama_admin'),
			);

		$id=$this->input->post('id _admin');
		$this->Admin_model->edit_data($id,$data);
		redirect(site_url('admin'));
	}
}
?>