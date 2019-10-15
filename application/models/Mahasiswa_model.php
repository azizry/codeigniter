<?php 

class Mahasiswa_model extends CI_Model
{
	public function getALLMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}
}