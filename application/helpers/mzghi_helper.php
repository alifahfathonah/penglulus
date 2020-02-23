<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	function check_already_login()
	{
		$ci =& get_instance();
		$userid_session = $ci->session->userdata('userid');
		if ($userid_session) {
			redirect('admin','refresh');
		}
	}

	function check_not_login()
	{
		$ci =& get_instance();
		$userid_session = $ci->session->userdata('userid');
		if (!$userid_session) {
			redirect('auth','refresh');
		}
	}
