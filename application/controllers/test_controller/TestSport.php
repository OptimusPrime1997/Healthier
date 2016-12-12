<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestSport extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/sport_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$name =10001000;
		$result = $this->sport_model->getSport($name);
		foreach($result as $row){
			foreach($row as $item){
				echo $item .'<br>';
			}
		}
	}

	public function testInsert() {
		$data["account_id"]=10001003;
		 $data["update_time"]="2016-11-13 00:00:00";
		 $data["status"] ="LIGHT";
		 $data["calory"]=10000;
		 $data["meter"]=8000;
		 $data["step"]=9800;
		 $data["minute"]=90;
		$temp=$this->sport_model->insertSport($data);
		echo 'testInsert Sport'.($temp);
	}

	public function testDelete() {
		$sport['account_id'] = 'BeijingRun';
		$sport['update_time']="2016-11-13 00:00:00";
		$temp=$this->sport_model->deleteSport($sport);
		echo 'testDelete Sport'.($temp);
	}

	public function testUpdate() {
		$old_data['account_id']='10001003';
		$old_date['update_time']="2016-11-13 00:00:00";
		$data["account_id"]=10001003;
		$data["update_time"]="2016-11-13 00:00:00";
		$data["status"] ="LIGHT";
		$data["calory"]=20009;
		$data["meter"]=8009;
		$data["step"]=9809;
		$data["minute"]=99;
		$temp=$this->sport_model->updateSport($old_data,$data);
		echo 'testUpdate Sport'.$temp;
	}
	public function testGetTotalSport(){
		$data=10001000;
		$result=$this->sport_model->getTotalSport($data);
		echo $result['total_meter']."|".$result['total_calory'];
	}
	public function testGetMaxSport(){
		$data=10001000;
		$result=$this->sport_model->getMaxSport($data);
		echo $result['max_meter']."|".$result['max_calory'];
	}
}