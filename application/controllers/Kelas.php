<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->load->model('Kelas1');			
	$data['kelas']=$this->Kelas1->getDataKelas();
			$this->load->view('kelas',$data);
			

// $this->load->model('Perusahaan');
// 		$data['data_perusahaan'] = $this->Perusahaan->getDataArray();
// 		$this->load->view('MainMenu',$data);
	}
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('Kelas1');
		
		if($this->form_validation->run()==FALSE){
			$data['kelas']=$this->Kelas1->getDataKelas();
			$this->load->view('tambahkelas',$data);
		}else{
			    
						$this->Kelas1->create();
						// unlink('assets/uploads/'.$namaFile);
						$this->load->view('tambahdata_sukses');
                
		}
	}

	
	
	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('Kelas1');
		

		
		
		

		$data['kelas']=$this->Kelas1->getDataKelas($id);

		if ($this->form_validation->run()==false)
		{
			$this->load->view('editkelas',$data);
		}
		else
		{
					$this->Kelas1->update($id);
					$this->load->view('editdata_sukses',$data);
			
		}
	}
	public function delete($id)
	{
		# code...
		$this->load->model('Kelas');
		$this->load->helper("file");
		
		$ss = $this->Kelas->getFoto($id);

		$this->Kelas->delete($id);

		$file = "assets/uploads/";
		$file .= $ss;

		if (is_readable($file) && unlink($file)) {
		   	$data['kelas']=$this->Kelas->getDataKelas();
			$this->load->view('Kelas',$data);
	}
}

public function datatable()
	{
		# code...
		$this->load->model('Kelas1');
		$data['kelas']=$this->Kelas->getDataKelas();
		$this->load->view('kelas', $data);
	}
	public function data_server()

	{
		# code...
		$this->load->library('Datatables');
		$this->datatables
			->select('id','nama')
			->from ('KELAS');
			echo $this->datatables->generate();
	}

}


/* End of file perusahaan.php */
/* Location: ./application/controllers/perusahaan.php */