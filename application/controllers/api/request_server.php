<?php 
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Request_server extends REST_Controller
{
	function __construct()
    {
    	parent::__construct();
    	$this->load->model('model_api');

    	$this->methods['index_get']['limit'] = 100;
    }

	public function index_get()
	{
		$id_request = $this->get('id_request');
		if($id_request === null){
			$Request_server = $this->model_api->getRequest();
		}else{
			$Request_server = $this->model_api->getRequest($id_request);
		}
		

		if($Request_server){
			$this->response([
                    'status' => true,
                    'data' => $Request_server
                ], REST_Controller::HTTP_OK);
		}else{
			$this->response([
                    'status' => false,
                    'message' => 'id_request not found'
                ], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function index_post()
	{
		$data = [
		'id_request'	=> $this->post('id_request'),
		'id_user' 	     => $this->post('id_user'),
		'kd_buku'		=>$this->post('kd_buku'),
		'jumlah'		=> $this->post('jumlah'),
		];

		if($this->model_api->createRequest($data) > 0) {
			$this->response([
                    'status' => true,
                    'message' => 'new Request has been created'
                ], REST_Controller::HTTP_CREATED);
		}else{
			$this->response([
                    'status' => false,
                    'message' => 'failed to create new Request'
                ], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_put()
	{
		$id_request = $this->put('id_request');
		$data = [
		'id_user' 		=> $this->put('id_user'),
		'kd_buku'		=> $this->put('kd_buku'),
		'jumlah'		=> $this->put('jumlah'),
		];

		if( $this->model_api->updateRequest($data, $id_request) > 0){
				$this->response([
                    'status' => true,
                    'message' => 'data request has been updated'
                ], REST_Controller::HTTP_OK);
		} else {
			$this->response([
                    'status' => false,
                    'message' => 'failed to update data'
                ], REST_Controller::HTTP_BAD_REQUEST);
		}

	}

	public function index_delete(){
		$id_request= $this->delete('id_request');
		if($id_request === null){
			$this->response([
                    'status' => false,
                    'message' => 'provide an id_request'
                ], REST_Controller::HTTP_BAD_REQUEST);
		}else{
			if($this->model_api->deleteRequest($id_request) > 0 ) {
				//ok
				$this->response([
                    'status' => true,
                    'id_request'=>$id_request,
                     'message' => 'deleted'
                ], REST_Controller::HTTP_OK);

			}else{
				$this->response([
                    'status' => false,
                    'message' => 'id_request not found'
                ], REST_Controller::HTTP_NOT_FOUND);
			}
		}
	}

}
