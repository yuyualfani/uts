<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
		$this->load->model('Perusahaan1');

			
	$data['perusahaan']=$this->Perusahaan1->getDataPerusahaan();
		

			$this->load->view('Perusahaan',$data);
			

// $this->load->model('Perusahaan');
// 		$data['data_perusahaan'] = $this->Perusahaan->getDataArray();
// 		$this->load->view('MainMenu',$data);
	}
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('Perusahaan1');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahdata1');
		}else{
			    $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('userfile'))
                {
                      //  $error = array('error' => $this->upload->display_errors());
					//echo var_dump($config);
					//		$this->load->view('tambahdata1',$error);
                }

                else
                {
                	// var_dump($this->upload->data());
                	// die();
						$this->Perusahaan1->create();
						// unlink('assets/uploads/'.$namaFile);
						$this->load->view('tambahdata_sukses');
                }
		}
	}

	
	
	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('Perusahaan1');
		

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '3200';
		$config['max_height']  = '2400';
		
		$this->load->library('upload', $config);
		
		

		$data['perusahaan']=$this->Perusahaan1->getData($id);

		if ($this->form_validation->run()==false)
		{
			$this->load->view('editdata',$data);
		}
		else
		{
					if ( ! $this->upload->do_upload('Foto')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('editdata',$data);
				}
				else{
					$this->Perusahaan1->update($id);
					$this->load->view('editdata_sukses');
				}
			
		}
	}
	public function delete($id)
	{
		# code...
		$this->load->model('Perusahaan1');
		$this->load->helper("file");
		
		$ss = $this->Perusahaan1->getFoto($id);

		$this->Perusahaan1->delete($id);

		$file = "assets/uploads/";
		$file .= $ss;

		if (is_readable($file) && unlink($file)) {
		   	$data['perusahaan']=$this->Perusahaan1->getDataPerusahaan();
			$this->load->view('Perusahaan',$data);
	}
}

public function datatable()
	{
		# code...
		$this->load->model('Perusahaan1');
		$data['perusahaan']=$this->Perusahaan1->getDataPerusahaan();
		$this->load->view('perusahaan', $data);
	}
	public function data_server()

	{
		# code...
		$this->load->library('Datatables');
		$this->datatables
			->select('id','namaPerusahaan','nomorIjinProduksi','tanggalBerdiri')
			->from ('perusahaan');
			echo $this->datatables->generate();
	}

}


/* End of file perusahaan.php */
/* Location: ./application/controllers/perusahaan.php */