<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Login_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model("model_impl/user_model");
		$this->load->library('session');
		$this->load->model("model_common/index_model");
	}

	public function index() {
		/*$cookie=array('username'=>get_cookie('username'),
			'account_id'=>get_cookie('account_id'),
			'join_date'=>get_cookie('join_date'),
			'img_name'=>get_cookie('img_name'),
			'level'=>get_cookie('level'),
			);
		delete_cookie($cookie);*/
		delete_cookie('username');
		delete_cookie('account_id');
		delete_cookie('join_date');
		delete_cookie('img_name');
		delete_cookie('hobby');
		delete_cookie('hobby');
		$this->load->view("php/login");
	}

	public function checkLogin() {

//		$this->form_validation->set_rules('username', 'Username', 'required');
//		$this->form_validation->set_rules('password', 'Password', 'required');

		/*if ($this->form_validation->run() === FALSE) {
			$this->load->view("php/login");
		} else*/
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$result = $this->user_model->checkLogin($username, $password);
			if (!empty($result)) {
				$newdata = array(
					'username' => $username,
					'account_id' => $result['account_id'],
					'join_date' => $result['join_date']
				);
				$this->session->set_userdata($newdata);
				set_cookie("username", $username, 86500);
				set_cookie("account_id", $result['account_id'], 86500);
				set_cookie("join_date", $result['join_date'], 86500);
				set_cookie("img_name", $result['img_name'], 86500);
//				set_cookie('level', $result['level'], 86500);
				set_cookie('hobby', $result['hobby'], 86500);
				set_cookie('address', $result['address'], 86500);
				if ($result['level'] === 0) {
					redirect('/controller_impl/index_controller', 'refresh');
				} else {
					echo "login in success!" . $result['username'];
					redirect('/controller_impl/a_race_c');
				}
			} else {

			}
		}
	}


}

