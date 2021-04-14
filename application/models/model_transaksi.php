<?php 

class model_transaksi extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tbl_transaksi');
	}
	
	 public function countTransaksi()
    {
        $sql = "SELECT count(id) as id FROM tbl_transaksi";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function tambah_transaksi($data, $table)
	{
		$this->db->insert($table,$data);
	}
	public function edit_transaksi($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	
}