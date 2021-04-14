<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}
	public function index()
	{	
		$data['title'] = 'Dashboard';
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$this->load->view('template/header', $data);	
		$this->load->view('template/sidebar', $data);
		if($data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array()) $this->load->view('template/topbar', $data);
		else{
			$this->load->view('template/topbar1');
		}	
			
		$this->load->view('dashboard', $data);	
		$this->load->view('template/footer');		
	}
		public function login_user()
	{	
		$data['title'] = 'Dashboard';
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template/header', $data);	
		$this->load->view('template/sidebar', $data);	
		$this->load->view('template/topbar', $data);	
		$this->load->view('dashboard', $data);	
		$this->load->view('template/footer');		
	}

	public function user_admin ()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template_admin/header', $data);	
		$this->load->view('template_admin/sidebar', $data);	
		$this->load->view('template_admin/topbar', $data);	
		$this->load->view('user/index');	
		$this->load->view('template_admin/footer1');		
	}

	public function edit_profile_admin()
	{
		
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->form_validation->set_rules('name', 'Full Name','trim|required');

		if($this->form_validation->run()== false){
		$this->load->view('template_admin/header', $data);	
		$this->load->view('template_admin/sidebar', $data);	
		$this->load->view('template_admin/topbar', $data);	
		$this->load->view('user/edit');	
		$this->load->view('template_admin/footer');	
		}else{
			$email = $this->input->post('email');
			$name = $this->input->post('name');

			//cek gambar yg akn di upload
			$upload_image = $_FILES['image']['name'];

			if($update_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']		 = '2048';
				$config['upload_path']	 = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('tbl_user');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Your profile has been updated</div>');
			redirect('welcome/user_admin');
		}
	
	}

	public function user ()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
		$this->load->view('template/header', $data);	
		$this->load->view('template/sidebar', $data);	
		$this->load->view('template/topbar', $data);	
		$this->load->view('user/index');	
		$this->load->view('template/footer');		
	}

	public function edit_profile()
	{
		
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('tbl_user',['email'=>$this->session->userdata('email')])->row_array();	
				$this->form_validation->set_rules('name', 'Full Name','trim|required');

		if($this->form_validation->run()== false){
		$this->load->view('template/header', $data);	
		$this->load->view('template/sidebar', $data);	
		$this->load->view('template/topbar', $data);	
		$this->load->view('user/edit');	
		$this->load->view('template/footer');	
		}else{
			$email = $this->input->post('email');
			$name = $this->input->post('name');

			//cek gambar yg akn di upload
			$upload_image = $_FILES['image']['name'];

			if($update_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']		 = '2048';
				$config['upload_path']	 = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('tbl_user');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Your profile has been updated</div>');
			redirect('welcome/user');
		}
	
	}
}

