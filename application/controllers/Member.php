
<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');

		if(!$this->session->userdata('logined') && !$this->session->userdata('logined') == true)
		{
			redirect('login');
		}
		else{
			
		}
	}
	function index()
	{
		$id = $this->session->userdata('username');
		$data['data'] = $this->Member_model->ambil_data();
		$data['member'] = $this->Member_model->ambil_data_idusername($id);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Member/member_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama_member' => set_value('nama_member'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'kelas_member' => set_value('kelas_member'),
			'jurusan_member' => set_value('jurusan_member'),
			'prodi_member' => set_value('prodi_member'),
			'id_member' => set_value('id_member'),
			'button' => 'Tambah',
			'action' => site_url('member/tambah_aksi')
			);
		$this->load->view('Member/member_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_member' => $this->input->post('nama_member'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'kelas_member' => $this->input->post('kelas_member'),
			'jurusan_member' => $this->input->post('jurusan_member'),
			'prodi_member' => $this->input->post('prodi_member'),
			);
		$this->Member_model->tambah_data($data);
		redirect(site_url('Member'));
	}

	function delete($id)
	{
		$this->Member_model->hapus_data($id);
		redirect(site_url('member'));
	}
	function edit($id)
	{
	$mem=$this->Member_model->ambil_data_id($id);
	$data=array(
		'nama_member'		=>set_value('nama_member',$mem->nama_member),
		'username'			=>set_value('username',$mem->username),
		'password'			=>set_value('password',$mem->password),
		'kelas_member'		=>set_value('kelas_member',$mem->kelas_member),
		'jurusan_member'	=>set_value('jurusan_member',$mem->jurusan_member),
		'prodi_member'		=>set_value('prodi_member',$mem->prodi_member),
		'id_member'			=>set_value('id_member',$mem->id_member),
		'button'			=>'Edit',
		'action'			=>site_url('member/edit_aksi')
		);

	$this->load->view('Member/member_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(
			'nama_member' => $this->input->post('nama_member'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'kelas_member' => $this->input->post('kelas_member'),
			'jurusan_member' => $this->input->post('jurusan_member'),
			'prodi_member' => $this->input->post('prodi_member'),
			);

		$id=$this->input->post('id_member');
		$this->Member_model->edit_data($id,$data);
		redirect(site_url('member'));
	}
}
?>