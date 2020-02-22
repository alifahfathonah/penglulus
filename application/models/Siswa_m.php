<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {


    public function get($id=null)
    {

    	$this->db->from('un_siswa');
    	if ($id != null) {
    		$this->db->where('no_ujian', $id);
    	}
    	$q = $this->db->get();
    	return $q;
    }

    public function getWhere ($where=null)
    {

    	$this->db->from('un_siswa');
    	if ($where != null) {
    		$this->db->where('no_ujian', $where);
    	}
    	$q = $this->db->get();
    	return $q;
    }

    function importcsv($data)
    {
        $this->db->insert_batch('un_siswa', $data);
    }



}

/* End of file Siswa_m.php */
/* Location: ./application/models/Konfigurasi_m.php */