<?php 

class Model_buku extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tbl_buku');
	}
	public function countBuku()
    {
        $sql = "SELECT count(judul_buku) as judul_buku FROM tbl_buku";
        $result = $this->db->query($sql);
        return $result->row()->judul_buku;
    }
    public function searchDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_buku', $keyword);
        $this->db->or_like('judul', $keyword);

        $query = $this->db->get('tbl_buku')->result_array();
        return $query;
    }
	public function tambah_buku($data, $table)
	{
		$this->db->insert($table,$data);
	}
	public function edit_buku($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);

	}
	public function find($kd)
	{
		$result = $this ->db->where('kd_buku', $kd)
							->limit(1)
							->get('tbl_buku');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_buku($kd_buku)
	{
		$result = $this->db->where('kd_buku', $kd_buku)->get('tbl_buku');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function detail_buku_admin($kd_buku)
	{
		$result = $this->db->where('kd_buku', $kd_buku)->get('tbl_buku');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function kd_buku()
     {
         $sql = "SELECT MAX(MID(kd_buku,9,4)) AS kd_buku FROM tbl_buku WHERE 
         MID(kd_buku, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
         $query = $this->db->query($sql);
         if ($query->num_rows() > 0) {
             $row = $query->row();
             $n = ((int)$row->kd_buku) + 1;
         $no = sprintf("%' .04d", $n);
         }else{
             $no="0001";
         }
         $kd = "BK".date('ymd').$no;
         return $kd;
     }


}