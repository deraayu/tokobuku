<?php 

class Model_kategori extends CI_Model{

	public function data_matematika() {
		return $this->db->get_where("tbl_buku", array('kategori' => 'matematika'));
	}
		public function data_sejarah() {
		return $this->db->get_where("tbl_buku", array('kategori' => 'sejarah'));
	}
		public function data_teknologi_informasi() {
		return $this->db->get_where("tbl_buku", array('kategori' => 'teknologi_informasi'));
	}
		public function data_novel() {
		return $this->db->get_where("tbl_buku", array('kategori' => 'novel'));
	}
		public function data_komik() {
		return $this->db->get_where("tbl_buku", array('kategori' => 'komik'));
	}


 }
