<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sisw extends CI_Controller {

	public function index($id)
	{
		$this->load->model('Siswa1');
	$data['siswa']=$this->Siswa1->getDataSiswa($id);
	
	$this->load->view('Siswa',$data);
			

// $this->load->model('Perusahaan');
// 		$data['data_perusahaan'] = $this->Perusahaan->getDataArray();
// 		$this->load->view('MainMenu',$data);
	}
	public function create($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	$this->load->model('Siswa1');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahsiswa');
		}else{
			    $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
					//echo var_dump($config);
						$this->load->view('tambahdata1',$error);
                }

                else
                {
                	// var_dump($this->upload->data());
                	// die();
						$this->Siswa1->create($id);
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
		$this->load->model('Siswa1');
		

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '3200';
		$config['max_height']  = '2400';
		
		$this->load->library('upload', $config);
		
		

		$data['siswa']=$this->Siswa1->getDataSiswa($id);

		if ($this->form_validation->run()==false)
		{
			$this->load->view('editsiswa',$data);
		}
		else
		{
					if ( ! $this->upload->do_upload('Foto')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('editsiswa',$data);
				}
				else{
					$this->Siswa1->update($id);
					$this->load->view('editdata_sukses');
				}
			
		}
	}
	public function delete($id)
	{
		# code...
		$this->load->model('Siswa1');
		$this->load->helper("file");
		
		$ss = $this->Siswa1->getFoto($id);

		$this->Siswa1->delete($id);

		$file = "assets/uploads/";
		$file .= $ss;

		if (is_readable($file) && unlink($file)) {
		   	
			$this->load->view('kelas');
	}
}

public function datatable()
	{
		# code...
		$this->load->model('Siswa');
		$data['siswa']=$this->Siswa->getDataSiswa();
		$this->load->view('siswa', $data);
	}
	public function data_server()

	{
		# code...
		$this->load->library('Datatables');
		$this->datatables
			->select('id','nama')
			->from ('siswa');
			echo $this->datatables->generate();
	}

}


/* End of file perusahaan.php */
/* Location: ./application/controllers/perusahaan.php */