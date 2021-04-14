<?php 
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Transaksi_server extends REST_Controller
{
	function __construct()
    {
    	parent::__construct();
    	$this->load->model('model_api');
    }

    public function index_post()
	{
		$data = [
			'id' 		=>$this->post('id'),
		'id_request'	=> $this->post('id_request'),
		'id_user' 	     => $this->post('id_user'),
		'kd_buku'		=>$this->post('kd_buku'),
		'jumlah'		=> $this->post('jumlah'),
		];

		if($this->model_api->createTransaksi($data) > 0) {
			$this->response([
                    'status' => true,
                    'message' => 'new Transaksi has been created'
                ], REST_Controller::HTTP_CREATED);
		}else{
			$this->response([
                    'status' => false,
                    'message' => 'failed to create new Transaksi'
                ], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

}