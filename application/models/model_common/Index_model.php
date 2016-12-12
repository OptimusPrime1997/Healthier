<?php

class Index_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/sport_model");
		$this->load->library('session');
	}

	public function load_index() {
		$data['username'] = 'Guest';
		$data['join_date'] = "2015-01-01";

		$data['total_day'] = 0;
		$data['total_distance'] = 0;
		$data['total_calory'] = 0;

		$data['max_day_step'] = 0;
		$data['max_day_distance'] = 0;
		$data['max_day_calory'] = 0;

		if ($this->session->username != null) {
			$data['username'] = $this->session->username;
			$data['join_date'] = $this->session->join_date;
			$account_id = $this->session->account_id;

			$date1 = strtotime($data['join_date']);
			$date2 = strtotime(date("Y-m-d"));
			$days = ceil(abs($date1 - $date2) / 86400);
			$data['total_day'] = $days;

			if (!empty($account_id)) {
				$result = $this->sport_model->getTotalSport($account_id);
				if (!empty($result)) {
					$data['total_calory'] = $result['total_calory'];
					$data['total_distance'] = $result['total_meter'];
					$data['total_step'] = $result['total_step'];
				}
				$max_result = $this->sport_model->getMaxSport($account_id);
				if (!empty($max_result)) {
					$data['max_day_step'] =$max_result['max_step'];
					$data['max_day_distance'] =$max_result['max_meter'];
					$data['max_day_calory'] =$max_result['max_calory'];
				}
			}
		}

		$this->load->view("php/index", $data);
	}

}

?>