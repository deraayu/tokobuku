<?php 

class kategori extends CI_Controller{
	public function matematika()
	{
		$data['title'] = 'Kategori';
		$data['matematika'] = $this->model_kategori->data_matematika()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	

		$this->load->view('kategori/matematika', $data);
		$this->load->view('template/footer');
	}
	public function Sejarah()
	{
		$data['title'] = 'Kategori';
		$data['sejarah'] = $this->model_kategori->data_sejarah()->result();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	
		$this->load->view('kategori/sejarah', $data);
		$this->load->view('template/footer');
	}
	public function teknologi_informasi()
	{
		$data['title'] = 'Kategori';
		$data['teknologi_informasi'] = $this->model_kategori->data_teknologi_informasi()->result();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	
		$this->load->view('kategori/teknologi_informasi', $data);
		$this->load->view('template/footer');
	}
	public function novel()
	{
		$data['title'] = 'Kategori';
		$data['novel'] = $this->model_kategori->data_novel()->result();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	
		$this->load->view('kategori/novel', $data);
		$this->load->view('template/footer');
	}
	public function komik()
	{

		$data['title'] = 'Kategori';
		$data['komik'] = $this->model_kategori->data_komik()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	
		$this->load->view('kategori/komik', $data);
		$this->load->view('template/footer');
	}
}