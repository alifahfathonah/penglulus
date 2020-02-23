<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m','user');
		//check_not_login();
	}
	public function index()
	{
		check_already_login();
		$this->load->view('login');
	}


	function cekLogin()
	{
		$post = $this->input->post();
		if ( isset($_POST['login']) ){
			$uname=htmlspecialchars($this->input->post('uname',TRUE),ENT_QUOTES);
			$upass=htmlspecialchars($this->input->post('upass',TRUE),ENT_QUOTES);	

			$q=$this->user->login($uname,$upass);
        	if($q->num_rows() > 0){ //jika login sebagai dosen
        		$row = $q->row();
        		$params = array(
        				'userid' => $row->UID,	
        				'user_name' => $row->username,	
        			);
                $this->session->set_userdata($params);

        		echo "
					<script>
						alert('Selamat, Login berhasil');
						window.location='".site_url('admin')."';
					</script>
        		";
        	} else {

        		echo "
					<script>
						alert('Login Gagal, username/password salah');
						window.location='".base_url()."';
					</script>
        		";
        	}

        } else {
        	redirect(site_url(),'refresh');
        }


    }

    function logout()
    {
        
    	$params = array('userid','username');
        $this->session->unset_userdata($params);
		echo "
			<script>
				alert('Selamat, Logout kamu sukses');
				window.location='".base_url()."';
			</script>
		";
        // $url=site_url();
        // redirect($url);
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */