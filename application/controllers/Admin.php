
<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
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
		$data['admin'] = $this->Admin_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Admin/admin_list',$data);
	}

	function tambah()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'penanggungjawab' => set_value('penanggungjawab'),
			'nama_admin' => set_value('nama_admin'),
			'perbasi' => $this->Perbasi_model->ambil_data(),
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
			'no_izin' => $this->input->post('no_izin')
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
		'no_izin'			=>set_value('no_izin',$adm->no_izin),
		'id_admin'			=>set_value('id_admin',$adm->id_admin),
		'perbasi' 			=> $this->Perbasi_model->ambil_data(),
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
			'no_izin' => $this->input->post('no_izin'),
			);

		$id=$this->input->post('id_admin');
		$this->Admin_model->edit_data($id,$data);
		redirect(site_url('admin'));
	}
}
?>