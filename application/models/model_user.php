<?php 

class Model_user extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tbl_user');
	}
	 public function countUser()
    {
        $sql = "SELECT count(name) as name FROM tbl_user";
        $result = $this->db->query($sql);
        return $result->row()->name;
    }

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}