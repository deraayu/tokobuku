<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/index');
		}
	}

	public function tambah_ke_keranjang($kd)
	{

		$buku = $this->model_buku->find($kd);
	
		$data = array(
			'id' => $buku->kd_buku,
			'qty'=> 1,
			'price'=> $buku->harga,
			'name'=>$buku->judul_buku
		);
		$this->cart->insert($data);
		redirect('welcome/login_user');
	}

	public function detail_keranjang()
	{
		$data['title'] = 'Detail Keranjang';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('keranjang');
		$this->load->view('template/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome/login_user');
	}

	public function detail($kd_buku)
	{
		$data['title'] = 'Detail Buku';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	

		$data['buku'] = $this->model_buku->detail_buku($kd_buku);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('detail_buku', $data);
		$this->load->view('template/footer');	
	}

	public function Pembayaran()
	{
		$data['title'] = 'Pembayaran';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('pembayaran');
		$this->load->view('template/footer');
	}

	public function Proses_Pesanan()
	{
		$data['title'] = 'Pesanan';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	

		$is_processed = $this->model_invoice->index();
		if($is_processed)
		{
		$this->cart->destroy();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('Proses_Pesanan');
		$this->load->view('template/footer');	
		} else {
		echo "maaf, pesanan anda gagal di proses!";
		}
		redirect('welcome');
		
	}
	

}