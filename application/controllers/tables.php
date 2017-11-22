
<?php 
/**
* 
*/
class tables extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('DataScore_model');
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
		$data['score'] = $this->DataScore_model->ambil_data();

		
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('tables',$data);

	}

	function tambah()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'nama_admin' => set_value('nama_admin'),
			'id_admin' => set_value('id_admin'),
			'button' => 'Tambah',
			'action' => site_url('admin/tambah_aksi')
			);
		$this->load->view('Admin/admin_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_admin' => $this->input->post('nama_admin'),
			);
		$this->Admin_model->tambah_data($data);
		redirect(site_url('admin'));
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