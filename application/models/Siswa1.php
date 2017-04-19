<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa1 extends CI_Model {


	public function getDataSiswa($id)
	{
		$this->db->where('fk_kelas', $id);
		$query = $this->db->get('siswa');
		return $query->result();	
	}

	public function update($id)
	{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'foto'=>$this->upload->data('file_name')
			);
		$this->db->where('id',$id);
		$this->db->update('siswa',$data);
	}


	public function delete($id)

	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');
	}

	public function getFoto($id)
	{
		# cod$row = $this->db->select('Foto')->where('id_siswa',$id)->get('siswa')->row();
		$row = $this->db->select('Foto')->where('id',$id)->get('siswa')->row();
		$array = get_object_vars($row);
		return $row->Foto;



	}

	public function create($id)
{
	// $object = array(
	// 			'nama' => $this->input->post('nama'), 
	// 			'foto' => $this->upload->data('file_name') 
	// 			);
	// 		$this->db->insert('perusahaan', $object);


			$object = array(
				'nama' => $this->input->post('nama'),
				'tanggal_lahir' => $this->input->post('ttl'),
				'foto' => $this->upload->data('file_name'),
				'fk_kelas' => $id
				);
			$this->db->insert('siswa',$object);
}




	

	

}

/* End of file kelas.php */
/* Location: ./application/models/kelas.php */