<?php
require(APPPATH . '/libraries/REST_Controller.php');

class User_Restful_C extends REST_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_impl/user_model');
	}

	function user_get() {
		if (!$this->get('id')) {
			$this->response(NULL, 400);
		}
		$data['account_id']=$this->get('account_id');
		$data['password']=$this->get('password');
		$user = $this->user_model->checkLogin($data['account_id'],$data['password']);
		if ($user) {
			echo var_dump($user);
			$this->response($user, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function users_get() {
		$users = $this->user_model->get_all();
		if ($users) {
			$this->response($users, 200);
		} else {
			$this->response(NULL, 404);
		}
	}

	function user_post() {
		$result = $this->user_model->update($this->post('id'), array(
			'id' => $this->post('id')
		));
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}


}

?>