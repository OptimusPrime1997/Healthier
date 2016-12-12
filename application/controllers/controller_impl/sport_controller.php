<?php
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Sport_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/sport_model');
		$this->load->model("model_impl/body_model");
	}
	public function index(){
		$data['complete_rate']=0;
		$data['sleep_day']=0;


		$data['my_weight']=0;
		$data['accumulate_distance']=0;
		$data['accumulate_day']=0;
		$data['accumulate_calory']=0;
		$data['my_rank']=0;
		$data['defeat_rate']=0;
		if ($this->session->username != null) {
			$data['username'] = $this->session->username;
			$data['join_date'] = $this->session->join_date;
			$account_id = $this->session->account_id;

			$date1 = strtotime($data['join_date']);
			$date2 = strtotime(date("y-m-d"));
			$days = ceil(abs($date1 - $date2) / 86400);
			$data['accumulate_day'] = $days;

			if (!empty($account_id)) {
				$result = $this->sport_model->getTotalSport($account_id);
				if (!empty($result)) {
					$data['accumulate_calory'] = $result['total_calory'];
					$data['accumulate_distance'] = $result['total_meter'];
					$data['total_step'] = $result['total_step'];
				}
				$weight_result=$this->body_model->getBody($account_id);
				if (!empty($weight_result)) {
					$data['my_weight'] = $weight_result['weight'];
				}
				$rank_result=$this->sport_model->getRank($account_id);
				if(!empty($rank_result)){
					$data['my_rank']=$rank_result['rank'];
					$temp_defeat=($rank_result['all_people']-$rank_result['rank']);
					$defeat=($temp_defeat/$rank_result['all_people'])*100;
					$data['defeat_rate']=round($defeat ,2);
				}

			}
		}
		$this->load->view("php/sport",$data);
	}
}

