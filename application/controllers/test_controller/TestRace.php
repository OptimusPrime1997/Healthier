<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestRace extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/race_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$name = 'NJURUN';
		$result = $this->race_model->getrace();
		foreach($result as $row){
			foreach($row as $item){
				echo $item .'<br>';
			}
		}
	}

	public function testInsert() {
		 $data["race_name"]='BeijingRun';
		 $data["start_time"]='2016-11-12 00:00:00';
		 $data["end_time"]='2016-11-22 00:00:00';
		 $data["race_type"]='METER';
		 $data["organizer_id"]="10001001";
		 $data["reward"]=300;
		 $data["race_state"]="FINSH";
		$temp=$this->race_model->insertRace($data);
		echo 'testInsert Race'.($temp);
	}

	public function testDelete() {
		$race['race_name'] = 'BeijingRun';
		$temp=$this->race_model->deleteRace($race);
		echo 'testDelete Race'.($temp);

	}

	public function testUpdate() {
		$old_data['race_name']='BeijingRun';
		$data["race_name"]='BeijingRun';
		$data["start_time"]='2015-11-12 00:00:00';
		$data["end_time"]='2016-11-22 00:00:00';
		$data["race_type"]='METER';
		$data["organizer_id"]="10001001";
		$data["reward"]=300;
		$data["race_state"]="FINSH";
		$temp=$this->race_model->updateRace($old_data,$data);
		echo 'testUpdate Race'.$temp;
	}
}