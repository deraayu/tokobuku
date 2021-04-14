<?php 

class Data_request extends CI_Controller{
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
		$data['title'] = 'Request';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$data['request'] = $this->model_request->tampil_data()->result();
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar', $data);
		$this->load->view('admin/data_request', $data);
		$this->load->view('template_admin/footer');
	}

	

	public function edit($id)
	{
		$data['title'] = 'Request';
		$where = array('id_request' =>$id);
		$data['request'] = $this->model_request->update($where, $data, 'tbl_request');
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_request', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id_request 	= $this->input->post('id_request');
		$id_user		= $this->input->post('id_user');
		$kd_buku		= $this->input->post('kd_buku');
		$jumlah			= $this->input->post('jumlah');

		$data = array(
			'id_request'		=>$id_request,
			'id_user'			=>$id_user,
			'kd_buku'			=>$kd_buku,
			'jumlah'			=>$jumlah,
		);

		$where = array(
			'id_request' => $id
		);

		$this->model_request->update($where, $data, 'tbl_request');
		redirect ('admin/data_request/index');

	}

	public function verifikasi()
	{
		// $id 			= $this->input->post('id');
		// $id_request		= $this->input->post('id_request');
		// $id_user		= $this->input->post('id_user');
		// $kd_buku		= $this->input->post('kd_buku');
		// $jumlah			= $this->input->post('jumlah');

		// $data = array(
		// 'id'			=>$id,
		// 'id_request'	=>$id_request,
		// 'id_user'		=>$id_user,
		// 'kd_buku'		=>$kd_buku,
		// 'jumlah'		=> $jumlah,
		// );

		// $simpan = $this->db->query('INSERT INTO tbl_transaksi(id,id_request,id_user,kd_buku,jumlah) SELECT id_request,id_user,kd_buku,jumlah FORM tbl_request WHERE id_request = $_GET["id_request"]');
		// $this->model_request->verify();
		$where = array('id_request' => $id_request);
		$this->model_request->hapus_data($where, 'tbl_request');
		$this->session->set_flashdata('flash', 'Di Verifikasi');
		//$delete = $this->db->query('DELETE FROM tbl_request where id_request=$_GET["id_request"]');


		
		
		redirect('admin/data_request/index');
		
	}

}