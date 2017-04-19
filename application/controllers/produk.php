<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index($id)
	{
		$this->load->model('Perusahaan1');
		$data['produk']= $this->Perusahaan1->getDataProduk($id);
		$this->load->view('produk',$data);
		
	}


}

/* End of file produk.php */
/* Location: ./application/controllers/produk.php */