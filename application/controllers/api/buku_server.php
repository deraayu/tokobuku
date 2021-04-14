<?php 
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Buku_server extends REST_Controller
{
	function __construct()
    {
    	parent::__construct();
    	$this->load->model('model_server','buku');

    	$this->methods['index_get']['limit'] = 100;
    }

	public function index_get()
	{
		$kd_buku = $this->get('kd_buku');
		if($kd_buku === null){
			$Buku_server = $this->buku->getBuku();
		}else{
			$Buku_server = $this->buku->getBuku($kd_buku);
		}
		
		if($Buku_server){
			$this->response([
                    'status' => true,
                    'data' => $Buku_server
                ], REST_Controller::HTTP_OK);
		}else{
			$this->response([
                    'status' => false,
                    'message' => 'kd_buku not found'
                ], REST_Controller::HTTP_NOT_FOUND);
		}
	}

	

	
}