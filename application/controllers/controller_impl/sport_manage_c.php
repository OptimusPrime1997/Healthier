<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Sport_Manage_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_impl/sport_model');
		$this->load->model('model_impl/body_model');
	}

	public function index() {
//		$data['week_complete_rate']=0;
//		$data['week_distance']=0;
//		$data['week_sleep_day']=0;
		$data['latest_step'] = 11;
		$data['latest_meter'] = 0;
		$data['latest_calory'] = 0;
		$data['latest_weight'] = 0;
		$data['dateAxisJson'] = json_encode(array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'));
		$data['dataAxisJson'] = json_encode(array(220, 182, 191, 234, 290, 330, 310, 123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220));

		if (!empty(get_cookie("username"))) {
			$data['username'] = get_cookie("username");
			$account_id = get_cookie("account_id");
			if (!empty($account_id)) {
				$result = $this->sport_model->getSport($account_id);
				if (!empty($result)) {
					$data['latest_step'] = $result['step'];
					$data['latest_meter'] = $result['meter'];
					$data['latest_calory'] = $result['calory'];
				}

				$weight_result = $this->body_model->getBody($account_id);
				if (!empty($weight_result)) {
					$data['latest_weight'] = $weight_result['weight'];
				}
				$sport_result=$this->sport_model->getAllSport($account_id);
				$i=0;
				foreach($sport_result as $row){
					$date[$i]=$row['update_time'];
					$dataD[$i]['step']=$row['step'];
					$dataD[$i]['meter']=$row['meter'];
					$dataD[$i]['calory']=$row['calory'];
					$i++;
				}
				$data['dateAxisJson']=json_encode($date);
				$data['dataAxisJson']=json_encode($dataD);

			}


		} else {
			echo "The sport_manage->index fail!";
		}

		$this->load->view("php/sport_manage", $data);
	}
}

