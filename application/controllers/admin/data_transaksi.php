<?php 

class Data_transaksi extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['title'] ='Transaksi';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$data['transaksi'] = $this->model_transaksi->tampil_data()->result();
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/data_transaksi', $data);
		$this->load->view('template_admin/footer1');
	}

	public function tambahtransaksi()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_transaksi');
		$this->load->view('template_admin/footer');
		
	}

	public function tambah_aksi()
	{
		$no_faktur 		= $this->input->post('no_faktur');
		$id_pelanggan	= $this->input->post('id_pelanggan');
		$nama_pelanggan	= $this->input->post('nama_pelanggan');
		$kd_buku		= $this->input->post('kd_buku');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$sub_total		= $this->input->post('sub_total');

		$data = array(
			'no_faktur'			=>$no_faktur,
			'id_pelanggan'		=>$id_pelanggan,
			'nama_pelanggan'	=>$nama_pelanggan,
			'kd_buku'			=>$kd_buku,
			'jumlah'			=>$jumlah,
			'harga'				=>$harga,
			'sub_total'			=>$sub_total
		);

		$this->model_transaksi->tambah_transaksi($data, 'tbl_transaksi');
        redirect('admin/data_transaksi/index');
		
	}

	public function edit($trans)
	{
		$where = array('no_faktur' =>$trans);
		$data['transaksi'] = $this->model_transaksi->edit_transaksi($where,'tbl_transaksi')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_transaksi', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$no_faktur 		= $this->input->post('no_faktur');
		$id_pelanggan	= $this->input->post('id_pelanggan');
		$nama_pelanggan	= $this->input->post('nama_pelanggan');
		$kd_buku		= $this->input->post('kd_buku');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$sub_total		= $this->input->post('sub_total');

		$data = array(
			'no_faktur'			=>$no_faktur,
			'id_pelanggan'		=>$id_pelanggan,
			'nama_pelanggan'	=>$nama_pelanggan,
			'kd_buku'			=>$kd_buku,
			'jumlah'			=>$jumlah,
			'harga'				=>$harga,
			'sub_total'			=>$sub_total
		);

		$where = array(
			'no_faktur' => $no
		);

		$this->model_buku->update_data($where, $data, 'tbl_transaksi');
		redirect ('admin/data_transaski/index');

	}

	public function Detail_transaksi($no_faktur)
	{
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$data['transaksi'] = $this->model_transaksi->detail_transaksi($no_faktur);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/detail_transaksi', $data);
		$this->load->view('template_admin/footer');	
	}
}
