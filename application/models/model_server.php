<?php 

class Model_server extends CI_Model
{
	public function getBuku($kd_buku = null)
	{
		if($kd_buku === null){
			return $this->db->get('tbl_buku')->result_array();
		}else{
			return $this->db->get_where('tbl_buku',['kd_buku' => $kd_buku])->result_array();
		}
	}
		
}
