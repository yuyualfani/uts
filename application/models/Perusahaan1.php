<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan1 extends CI_Model {

	public function getDataPerusahaan()
	{
		$query=$this->db->query("select*from perusahaan");
		return $query->result_array();
	}
	public function getDataProduk($id)
	{
		$query=$this->db->query("select*from perusahaan as a join produk as b on a.id = b.fk_perusahaan where b.fk_perusahaan=$id");
		return $query->result();
	}
	public function getDataLokasi($id)
	{
		$query = $this->db->query("select * from perusahaan as a join lokasi as b on a.id =  b.fk_perusahaan where b.fk_perusahaan = $id");
		return $query->result();

}
public function create()
{
	// $object = array(
	// 			'nama' => $this->input->post('nama'), 
	// 			'foto' => $this->upload->data('file_name') 
	// 			);
	// 		$this->db->insert('perusahaan', $object);


			$object = array(
				'namaPerusahaan' => $this->input->post('nama'),
				'nomorIjinProduksi' => $this->input->post('nomor'),
				'foto' => $this->upload->data('file_name')

				);
			$this->db->insert('perusahaan',$object);
}



// 		{
// 			$query = $this->db->query("select * from perusahaan as a join lokasi as b on a.id =  b.fk_perusahaan where b.fk_perusahaan = $id");
// 			return $query->result();
// 		}
// 	}

	public function getData($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('perusahaan',1);
		return $query->result();
	}
	public function update($id)
	{
		$data = array(
			'namaPerusahaan'=>$this->input->post('nama'),
			'nomorIjinProduksi'=>$this->input->post('nomor'),
			'foto'=>$this->upload->data('file_name')
			);
		$this->db->where('id',$id);
		$this->db->update('perusahaan',$data);



	}

	public function delete($id)

	{
		$this->db->where('id', $id);
		$this->db->delete('perusahaan');
	}

	public function getFoto($id)
	{
		# cod$row = $this->db->select('Foto')->where('id_siswa',$id)->get('siswa')->row();
		$row = $this->db->select('Foto')->where('id',$id)->get('perusahaan')->row();
		$array = get_object_vars($row);
		return $row->Foto;



	}
	

	

}

/* End of file Perusahaan.php */
/* Location: ./application/models/Perusahaan.php */
