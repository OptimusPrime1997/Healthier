<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class A_Race_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/race_model');
	}

	public function index() {
		$data['allactivitylist'] = null;
		if (!empty(get_cookie("account_id"))) {
			$data['allactivitylist'] = $this->race_model->getRace();
		} else {
			echo "The friend_controller->index fail!";
		}
		$this->load->view("php/a_race", $data);
	}

	public function delete() {
		$race_name = $this->input->post("Race_name");
//		echo "leave outer ".$race_name."<br>";
		$my_id = get_cookie('account_id');
		if ((!empty($race_name)) && (!empty($my_id))) {
			$data['race_name'] = $race_name;
//			echo "leave inner ".$race_name;
			$result = $this->race_model->deleteRace($data);
			if ($result === false) {
				echo "The delete relation operation failed!";
			}
		}
		redirect(base_url('/controller_impl/a_race_c'));
	}
}

