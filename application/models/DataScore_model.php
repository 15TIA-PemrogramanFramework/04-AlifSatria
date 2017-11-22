<?php
/**
 * 
 */
 class DataScore_model extends CI_Model
 {
 	public $nama_table = 'datascore';
 	public $id = 'id_score';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 		
 	}

 	//untuk mengambil data seluruh member
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('ds.id_score, t1.nama_team team1, t2.nama_team team2, ds.point1, ds.point2, a.id_admin, a.nama_admin, ds.nama_wasit, ds.tempat, ds.waktu');
 		$this->db->from('datascore ds');
 		$this->db->join('team t1', 't1.id_team = ds.id_team1');
 		$this->db->join('team t2', 't2.id_team = ds.id_team2');
 		$this->db->join('admin a', 'a.id_admin = ds.id_admin');
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
 } 
 ?>