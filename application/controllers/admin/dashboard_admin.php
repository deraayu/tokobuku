<?php 

class Dashboard_admin extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/index');
		}
	}
	public function index()
	{
	$data['title'] = 'Dashboard admin';
	$data['countBuku'] = $this->model_buku->countBuku();
	$data['countUser'] = $this->Model_user->countUser();
	$data['countRequest'] = $this->model_request->countRequest();
	$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	

	$this->load->view('template_admin/header',$data);
	$this->load->view('template_admin/sidebar');
	$this->load->view('template_admin/topbar', $data);
	$this->load->view('admin/dashboard',$data);
	$this->load->view('template_admin/footer1');
	}
}