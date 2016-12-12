<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class F_Discovery_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('model_impl/share_model');
	}

	public function index() {
		$data['allsharelist'] = null;
		$data['mysharelist'] = null;
		if (!empty(get_cookie("username"))) {
			$account_id = get_cookie("account_id");
			$data['mysharelist'] = $this->share_model->getShare($account_id);
			$data['allsharelist'] = $this->share_model->getAllShare($account_id);
		} else {
			echo "The friend_controller->index fail!";
		}
		$this->load->view("php/f_discovery",$data);
	}
	public function deleteShare(){
		$s_account_id = $this->input->post("s_account_id");
		$s_update_time = $this->input->post("s_update_time");
		if ((!empty($s_account_id)) && (!empty($s_update_time))) {
			echo $s_account_id."---".$s_update_time;
			$data['account_id'] = $s_account_id;
			$data['update_time'] = $s_update_time;
			$result = $this->share_model->deleteShare($data);
			if ($result === false) {
				echo "The delete follower operation failed!";
			}
		}
		redirect(base_url('/controller_impl/f_discovery_c'));
	}
	public function addShare(){
		$share_body_textarea = $this->input->post("share_body_textarea");
		$account_id=get_cookie('account_id');
		echo ('share_body_textarea:'+$share_body_textarea);
		if ((!empty($account_id)) && (!empty($share_body_textarea))) {
//			echo $s_account_id."---".$s_update_time;
			$data['account_id'] = $account_id;
			$data['update_time'] = date('Y-m-d H:i:s');
			$data['content']=$share_body_textarea;
			$result = $this->share_model->insertShare($data);
			if ($result === false) {
				echo "The delete follower operation failed!";
			}
		}
		redirect(base_url('/controller_impl/f_discovery_c'));
	}
}

