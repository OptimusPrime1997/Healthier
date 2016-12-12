<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestSleep extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/sleep_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$name = '10001000';
		$result = $this->sleep_model->getsleep();
		foreach($result as $row){
			foreach($row as $item){
				echo $item .'<br>';
			}
		}
	}

	public function testInsert() {
		$data["account_id"] ="10001003";
		 $data["update_time"] ="2015-11-11 00:00:00";
		 $data["deep_minute"]=200;
		 $data["light_minute"]=280;
		 $data["total_minute"]=500;

		$temp=$this->sleep_model->insertSleep($data);
		echo 'testInsert Sleep'.($temp);
	}

	public function testDelete() {
		$sleep['account_id'] = '10001003';
		$sleep['update_time']="2015-11-11 00:00:00";
		$temp=$this->sleep_model->deleteSleep($sleep);
		echo 'testDelete Sleep'.($temp);
	}

	public function testUpdate() {
		$old_data['account_id']='10001003';
		$old_data['update_time']="2015-11-11 00:00:00";
		$data["account_id"]='10001003';
		$data["update_time"]='2015-11-11 00:00:00';
		$data["deep_minute"]=300;
		$data["light_minute"]=180;
		$data["total_minute"]=480;

		$temp=$this->sleep_model->updateSleep($old_data,$data);
		echo 'testUpdate Sleep'.$temp;
	}
}