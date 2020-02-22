<?php

class Fungsi {

	protected $ci;

	function __construct()
	{
	
		$this->ci =& get_instance();
	}

	function user_login()
	{
		$uid = '1';

		$this->ci->load->model('user_m');
		$q = $this->ci->user_m->get($uid)->row();
		return $q;
	}

	function admin_konfigurasi()
	{
		$status = '1';

		$this->ci->load->model('konfigurasi_m');
		$q = $this->ci->konfigurasi_m->getStatus($status)->row();
		return $q;
	}

}

