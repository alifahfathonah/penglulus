<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('url');
	}
	public function index()
	{
		$this->load->view('error');
	}

}

/* End of file Error.php */
/* Location: ./application/controllers/Error.php */