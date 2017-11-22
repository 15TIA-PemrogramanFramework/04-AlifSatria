<?php
/**
 * 
 */
 class Member_model extends CI_Model
 {
 	public $nama_table = 'member';
 	public $id = 'id_member';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 		
 	}

 	//untuk mengambil data seluruh member
 	function ambil_data()
 	{
 		$this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}
 	function cek_login($username,$password)
 	{
 		$this->db->where('username', $username);
 		$this->db->where('password', $password);
 		return $this->db->get($this->nama_table)->row();
 	}
 	function edit_data($id, $data)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id, $id);
 		return $this->db->get($this->nama_table)->row();
 	}
 	function ambil_data_idusername($id)
 	{
 		$this->db->distinct();
 		$this->db->select('m.id_member, m.username, m.password, m.nama_member, m.kelas_member, m.jurusan_member, m.prodi_member');
 		$this->db->from('member m');
 		$this->db->where('m.username', $id);
 		return $this->db->get($this->nama_table)->result();
 	}
 } 
 ?>