<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {


function login ($uname,$pass)
{
	$this->db->where('username', $uname);
	$this->db->where('password', md5($pass));
		// $this->db->get('Table', limit, offset);
	$q = $this->db->get('un_user');
	return $q;
}


public function get($id=null)
{
	
	$this->db->from('un_user');
	if ($id != null) {
		$this->db->where('UID', $id);
	}
	$q = $this->db->get();
	return $q;
}

public function getWhere ($where=null)
{
	
	$this->db->from('un_user');
	if ($where != null) {
		$this->db->where('no_ujian', $where);
	}
	$q = $this->db->get();
	return $q;
}


public function save($post)
{
	$data['username'] = $post['username'];
	$data['password'] = md5($post['password']);
	$this->db->insert('un_user', $data);
}

public function update($data, $id)
{
	$this->db->where('uid', $id);
	$this->db->update('un_user', $data);
}

	

}

/* End of file Siswa_m.php */
/* Location: ./application/models/Konfigurasi_m.php */