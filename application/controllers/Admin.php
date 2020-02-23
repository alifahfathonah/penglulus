<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_m','konfig');
		$this->load->model('user_m','user');
		$this->load->model('siswa_m','siswa');
		$this->load->helper('file');
		check_not_login();

	}

	public function index()
	{
		$this->load->view('admin/view_index');
	}
	
	public function konfigurasi()
	{
		
		$status = '1';
		$data['hsl'] = $this->konfig->getStatus($status)->row_array();
		$this->load->view('admin/view_konfigurasi', $data);
	}
	
	public function data()
	{
		
		$data['siswas'] = $this->siswa->get();
		$this->load->view('admin/view_data', $data);
	}

	function data_import()
	{	

		$this->load->library('csvimport');

		$file_data = $this->csvimport->get_array($_FILES["file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data [] = array(
				'no_ujian' 	=> $row['no_ujian'],
				'nama' 		=> $row['nama'],
				'komli' 	=> $row['komli'],
				'n_bin' 	=> $row['n_bin'],
				'n_mat' 	=> $row['n_mat'],
				'n_big' 	=> $row['n_big'],
				'n_kejuruan'=> $row['n_kejuruan'],
				'status' 	=> $row['status'],
			);
		}

		$this->siswa->importcsv($data);

		redirect('admin/data','refresh');
	}

	public function user()
	{
		
		$data['users'] = $this->user->get();
		$this->load->view('admin/view_user', $data);
	}
	
	public function user_proses()
	{
		if ( isset($_POST['submit']) ){
			$post = $this->input->post(null, TRUE);
			if ($post['page'] == 'add') {

				$q = $this->user->save($post);
				redirect('admin/user','refresh');

			} elseif ($post['page'] == 'edit') {

				$id = $post['id'];
				$data ['username'] = $post['username'];
				if ($post['password'] != null){
					$data ['password'] = md5($post['password']);
				}

				$this->user->update($data, $id);
				
				redirect('admin/user','refresh');

			}
		} else {
			redirect('admin/user','refresh');
		}

	}

	public function user_tambah()
	{	$data['page'] = 'add';
	$this->load->view('admin/view_user_tambah',$data);
}

public function user_edit($id=null)	
{	
	if($id != null){
		$id = abs($id);
		$data['page'] = 'edit';
		$data['data'] = $this->user->get($id)->row_array();

		if ($this->user->get($id)->num_rows() > 0 ) {
			$this->load->view('admin/view_user_edit',$data);
		} else {
			redirect(site_url(),'refresh');
		}
	} else {
		redirect(site_url(),'refresh');
	}
}

public function user_del($id=null)
{
	if($id != null){
		$id = abs($id);
		$this->user->del($id);

		if ($this->user->get($id)->num_rows() > 0 ) {
			$this->load->view('admin/view_user_edit',$data);
		} else {
			redirect(site_url(),'refresh');
		}
	} else {
		redirect(site_url(),'refresh');
	}
}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */