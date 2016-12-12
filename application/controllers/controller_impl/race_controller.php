<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Race_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/race_model');
		$this->load->model('model_impl/relation_model');
	}

	public function index() {
		$data['allactivitylist'] = null;
		$data['joinedactivitylist'] = null;
		$data['myactivitylist'] = null;
		if (!empty(get_cookie("account_id"))) {
			$account_id = get_cookie("account_id");
			$data['joinedactivitylist'] = $this->race_model->getRace($account_id);
			$data['allactivitylist'] = $this->race_model->getRace();
			$data['myactivitylist'] = $this->race_model->getMyRace($account_id);
		} else {
			echo "The friend_controller->index fail!";
		}
		$this->load->view("php/race", $data);
	}
	public function join() {
		$race_name = $this->input->post("Race_name");
		$my_id = get_cookie('account_id');
		echo "jion outer ".$race_name."<br>";
		if ((!empty($race_name)) && (!empty($my_id))) {
			$data['race_name'] = $race_name;
			$data['account_id'] = $my_id;
			echo "join inner ".$race_name;
			$result = $this->relation_model->insertRelation($data);
			if ($result === false) {
				echo "The delete relation operation failed!";
			}
		}
		redirect(base_url('/controller_impl/race_controller'));
	}
	public function leave() {
		$race_name = $this->input->post("Race_name");
		echo "leave outer ".$race_name."<br>";
		$my_id = get_cookie('account_id');
		if ((!empty($race_name)) && (!empty($my_id))) {
			$data['race_name'] = $race_name;
			$data['account_id'] = $my_id;
			echo "leave inner ".$race_name;
			$result = $this->relation_model->deleteRelation($data);
			if ($result === false) {
				echo "The delete relation operation failed!";
			}
		}
		redirect(base_url('/controller_impl/race_controller'));
	}
}

