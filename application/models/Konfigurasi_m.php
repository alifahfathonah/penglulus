<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_m extends CI_Model {



public function get($id=null)
{
	
	$this->db->from('un_konfigurasi');
	if ($id != null) {
		$this->db->where('id', $id);
	}
	$q = $this->db->get();
	return $q;
}

public function getStatus($status=null)
{
	
	$this->db->from('un_konfigurasi');
	if ($status != null) {
		$this->db->where('status', $status);
	} 
	$q = $this->db->get();
	return $q;
}
	

}

/* End of file Konfigurasi_m.php */
/* Location: ./application/models/Konfigurasi_m.php */