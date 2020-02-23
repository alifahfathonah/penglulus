<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_m','konfig');
		$this->load->model('siswa_m','siswa');
		check_already_login();
	}

	public function index()

	{	
		$status = '1';
		$data['qKon'] = $this->konfig->getStatus($status)->row();


		$no_ujian = '23-101-463-2';
		$data['qSiswa'] = $this->siswa->getWhere($no_ujian);
		// $q = $this->konfig->getStatus($status)->result_array();
		// echo "<pre>";
		// print_r($q);
		// die();
		$this->load->view('welcome_message', $data);
	}


	public function check()
	{
		$no_ujian = $this->input->post('keyword');
		$qSiswa = $this->siswa->getWhere($no_ujian);

		$output = '';
		
		if($qSiswa->num_rows() > 0)
		{
			foreach ($qSiswa->result() as $data) 
			{

				$output .= '<table class="table table-bordered"><tr><td>Nomor Ujian</td><td>'. $data->no_ujian .'</td></tr><tr><td>Nama Siswa</td><td>'. $data->nama .'</td></tr><tr><td>Kompetensi Keahlian</td><td>'. $data->komli .'</td></tr></table><table class="table table-bordered"><thead><tr><th>Bahasa Indonesia</th><th>Bahasa Inggris</th><th>Matematika</th><th>Kejuruan</th></tr></thead><tbody><td>'. $data->n_bin .'</td><td>'. $data->n_big .'</td><td>'. $data->n_mat .'</td><td>'. $data->n_kejuruan .'</td></tbody></table>
				';
				if( $data->status == 1 ){
				$output .= '<div class="alert alert-success" role="alert"><strong>SELAMAT !</strong> Anda dinyatakan LULUS.</div>';
				} else {
				$output .= '<div class="alert alert-danger" role="alert"><strong>MAAF !</strong> Anda dinyatakan TIDAK LULUS.</div>';
				}
			}
		}
		else
		{
			$output .= '<div class="alert alert-warning" role="alert"><strong>MAAF !</strong> Nomor ujian yang anda inputkan tidak ditemukan! periksa kembali nomor ujian anda..</div>	
			';
		}
		$output .= '';
		// echo $output;
		echo json_encode($output);
	}




}
