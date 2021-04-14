<?php 
class model_api extends CI_Model
{
	public function getRequest($id_request = null)
	{
		if($id_request === null){
			return $this->db->get('tbl_request')->result_array();
		}else{
			return $this->db->get_where('tbl_request',['id_request' => $id_request])->result_array();
		}
	}
		
	public function deleteRequest($id_request)
	{
		$this->db->delete('tbl_request' ,['id_request' => $id_request]);
		return $this->db->affected_rows();
	}
	public function createRequest($data)
	{
	$this->db->insert('tbl_request',$data);
	return $this->db->affected_rows();
	}
	public function updateRequest($data, $id_request)
	{
		$this->db->update('tbl_request', $data, ['id_request' => $id_request]);
		return $this->db->affected_rows();
	}
	public function createTransaksi($data)
	{
	$this->db->insert('tbl_transaksi',$data);
	return $this->db->affected_rows();
	}

	
	
}