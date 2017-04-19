<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas1 extends CI_Model {

	public function getDataKelas()
	{
			$query=$this->db->query("select*from kelas");
		return $query->result();
	}
	public function getDataSiswa($id)
	{
		$query=$this->db->query("select*from kelas as a join siswa as b on a.id=b.fk_kelas where a.id=$id");
		return $query->result();	
	}

	public function update($id)
	{
		$data = array(
			'nama'=>$this->input->post('nama')
			);
		$this->db->where('id',$id);
		$this->db->update('kelas',$data);
	}


	public function delete($id)

	{
		$this->db->where('id', $id);
		$this->db->delete('kelas');
	}

	public function getFoto($id)
	{
		# cod$row = $this->db->select('Foto')->where('id_siswa',$id)->get('siswa')->row();
		$row = $this->db->select('Foto')->where('id',$id)->get('kelas')->row();
		$array = get_object_vars($row);
		return $row->Foto;



	}
	public function create()
{
	// $object = array(
	// 			'nama' => $this->input->post('nama'), 
	// 			'foto' => $this->upload->data('file_name') 
	// 			);
	// 		$this->db->insert('perusahaan', $object);


			$object = array(
				'nama' => $this->input->post('nama')
				
				);
			$this->db->insert('kelas',$object);
}




	

	

}

/* End of file kelas.php */
/* Location: ./application/models/kelas.php */