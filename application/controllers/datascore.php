
<?php 
/**
* 
*/
class datascore extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('DataScore_model');
		$this->load->model('Admin_model');

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
		$data['datascore'] = $this->DataScore_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('DataScore/datascore_list',$data);
		}

	function tambah()
	{
		$data = array(
		'id_team1'			=>set_value('id_team1'),
		'id_team2'			=>set_value('id_team2'),
		'point1'			=>set_value('point1'),
		'point2'			=>set_value('point2'),
		'nama_wasit'		=>set_value('nama_wasit'),
		'tempat'			=>set_value('tempat'),
		'waktu'				=>set_value('waktu'),
		'admin' 			=> $this->Admin_model->ambil_data(),
		'id_score'				=>set_value('id_score'),
		'button'			=>'Edit',
		'action'			=>site_url('datascore/tambah_aksi')
			);
		$this->load->view('Admin/admin_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_admin' => $this->input->post('nama_admin'),
			'no_izin' => $this->input->post('no_izin')
			);
		$this->Admin_model->tambah_data($data);
		redirect(site_url('admin'));
	}

	function delete($id)
	{
		$this->DataScore_model->hapus_data($id);
		redirect(site_url('datascore'));
	}
	function edit($id)
	{
	$adm=$this->DataScore_model->ambil_data_id($id);
	$data=array(
		'id_team1'			=>set_value('id_team1',$adm->id_team1),
		'id_team2'			=>set_value('id_team2',$adm->id_team2),
		'point1'			=>set_value('point1',$adm->point1),
		'point2'			=>set_value('point2',$adm->point2),
		'nama_wasit'		=>set_value('nama_wasit',$adm->nama_wasit),
		'tempat'			=>set_value('tempat',$adm->tempat),
		'waktu'				=>set_value('waktu',$adm->waktu),
		'id_score'				=>set_value('id_score',$adm->id_score),
		'admin' 			=> $this->Admin_model->ambil_data(),
		'button'			=>'Edit',
		'action'			=>site_url('datascore/edit_aksi')
		);

	$this->load->view('DataScore/datascore_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(
			'id_team1' => $this->input->post('id_team1'),
			'id_team2' => $this->input->post('id_team2'),
			'point1' => $this->input->post('point1'),
			'point2' => $this->input->post('point2'),
			'nama_wasit' => $this->input->post('nama_wasit'),
			'tempat' => $this->input->post('tempat'),
			'waktu' => $this->input->post('waktu'),
			'id_admin' => $this->input->post('id_admin'),
			);

		$id=$this->input->post('id_score');
		$this->DataScore_model->edit_data($id,$data);
		redirect(site_url('datascore'));
	}
}
?>