<?php 

class model_request extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tbl_request');
	}
	 public function countRequest()
    {
        $sql = "SELECT count(id_request) as id_request FROM tbl_request";
        $result = $this->db->query($sql);
        return $result->row()->id_request;
    }
    public function edit($where,$tbl_request){
        return $this->db->get_where($tbl_request,$where);
    }
    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function id_request()
     {
         $sql = "SELECT MAX(MID(id_request,9,4)) AS id_request FROM tbl_request WHERE 
         MID(id_request, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
         $query = $this->db->query($sql);
         if ($query->num_rows() > 0) {
             $row = $query->row();
             $n = ((int)$row->id_request) + 1;
         $no = sprintf("%' .04d", $n);
         }else{
             $no="0001";
         }
         $id_request = "RQ".date('ymd').$no;
         return $id_request;
     }
	public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);

    }
    public function tambah_transaksi($data, $table)
    {
        $this->db->insert($table,$data);
    }
    // public function verify()
    // {
    //    $this->db->INSERT('tbl_transaksi(id,id_request,id_user,kd_buku,jumlah) SELECT id_request,id_user,kd_buku,jumlah FORM tbl_request WHERE id_request set id_request');
    // }

}