<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	

	public function index($id)
	{
		$this->load->model('Perusahaan1');
		$data['lokasi']=$this->Perusahaan1->getDataLokasi($id);
		$this->load->view('lokasi',$data);
		
	}


}

/* End of file lokasi.php */
/* Location: ./application/controllers/lokasi.php */