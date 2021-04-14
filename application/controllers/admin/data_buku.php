<?php 

class Data_buku extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Buku';
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/data_buku', $data);
		$this->load->view('template_admin/footer');
	}
	

	public function tambahbuku()
	{
		$data['title'] = 'Buku';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$data['kd'] = $this->model_buku->kd_buku();
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/tambahbuku',$data);
		$this->load->view('template_admin/footer');
		
	}
	public function tambah_aksi()
	{
		$kd_buku 		= $this->input->post('kd_buku');
		$judul_buku		= $this->input->post('judul_buku');
		$kategori		= $this->input->post('kategori');
		$pengarang		= $this->input->post('pengarang');
		$penerbit			= $this->input->post('penerbit');
		$tahun			= $this->input->post('tahun');
		$isbn			= $this->input->post('isbn');
		$gambar			= $_FILES['gambar']['name'];
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');

		if ($gambar = ''){}else{
			$config['upload_path'] = './assets/data_buku';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal di Upload!";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'kd_buku'			=>$kd_buku,
			'judul_buku'		=>$judul_buku,
			'kategori'			=>$kategori,
			'pengarang'			=>$pengarang,
			'penerbit'			=>$penerbit,
			'tahun'				=>$tahun,
			'isbn'				=>$isbn,
			'gambar'			=>$gambar,
			'harga'				=>$harga,
			'stok'				=>$stok
		);

		$this->model_buku->tambah_buku($data, 'tbl_buku');
		$this->session->set_flashdata('flash', 'Di Tambah');

        redirect('admin/data_buku/index');
		
	}

	public function edit($kd)
	{
		$data['title'] = 'Buku';
		$where = array('kd_buku' =>$kd);
		$data['buku'] = $this->model_buku->edit_buku($where,'tbl_buku')->result();
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/edit_buku', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$kd 			= $this->input->post('kd_buku');
		$judul_buku		= $this->input->post('judul_buku');
		$kategori		= $this->input->post('kategori');
		$pengarang		= $this->input->post('pengarang');
		$penerbit		= $this->input->post('penerbit');
		$tahun			= $this->input->post('tahun');
		$isbn			= $this->input->post('isbn');
		$gambar			= $this->input->post('gambar');
		$harga			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');

		$data = array(
			'judul_buku' 	=>$judul_buku,
			'kategori' 		=>$kategori,
			'pengarang' 	=>$pengarang,
			'penerbit' 		=>$penerbit,
			'tahun' 		=>$tahun,
			'isbn' 			=>$isbn,
			'gambar' 		=>$gambar,
			'harga' 		=>$harga,
			'stok' 			=>$stok,
		);

		$where = array(
			'kd_buku' => $kd
		);

		$this->model_buku->update_data($where, $data, 'tbl_buku');
		$this->session->set_flashdata('flash', 'Di Ubah');
		redirect ('admin/data_buku/index');

	}

	public function hapus($kd)
	{
		$where = array('kd_buku' => $kd);
		$this->model_buku->hapus_data($where, 'tbl_buku');
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('admin/data_buku/index');
	}

	public function detail_buku($kd_buku)
	{
		$data['title'] = 'Buku';
		$data['buku'] = $this->model_buku->detail_buku_admin($kd_buku);
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/detail_buku_admin', $data);
		$this->load->view('template_admin/footer');	
	}
	


}