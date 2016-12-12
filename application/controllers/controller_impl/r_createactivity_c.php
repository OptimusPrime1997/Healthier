<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class R_Createactivity_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/race_model');

	}

	public function index() {
		$this->load->view("php/r_createactivity");
	}

	public function create() {
		$race_name = $this->input->post("race_name");
		$race_introduction = $this->input->post("race_introduction");
		$race_type = $this->input->post("race_type");
		$race_start = $this->input->post("race_start");
		$race_end = $this->input->post("race_end");
		$race_reward = $this->input->post("race_reward");
		$account_id=get_cookie('account_id');
//		echo ('share_body_textarea:'+$race_name);
		if ((!empty($account_id)) && (!empty($race_name))) {
//			echo $s_account_id."---".$s_update_time;
			$data['race_name'] = $race_name;
			$data['race_start'] = $race_start;
			$data['race_end'] = $race_end;
			$data['race_type'] = $race_type;
			$data['organizer_id'] = $account_id;
			$data['reward'] = $account_id;
			$data['introduction'] = $race_introduction;
			$result = $this->race_model->insertRace($data);
			if ($result === false) {
				echo "The delete follower operation failed!";
			}
		}
		redirect(base_url('/controller_impl/race_controller'));
	}
}

