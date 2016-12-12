<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Restful_C extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/sport_model');
		$this->load->model('model_impl/user_model');
		$this->load->helper('file');
		$this->load->helper('url');
	}


	public function index() {
			$result = $this->user_model->getAllUser();
		$set=array();
		foreach($result as $row){
			$update_time="2015-01-01";
			$now_day=date('Y-m-d');
			for(;strtotime($update_time)<strtotime($now_day);$update_time=date("Y-m-d",strtotime($update_time." 00:00:00 +1 day") ) ){
//				echo $update_time."<br>";
				$meter=rand(1000,20000);
				$calory=floor($meter*2.2);
				$step=floor($meter*1.2);
				$minute=floor($meter/10);
				$data['account_id']=$row['account_id'];
				$data['update_time']=$update_time;
				$data['calory']=$calory;
				$data['meter']=$meter;
				$data['step']=$step;
				$data['minute']=$minute;
				$result=$this->sport_model->insertSport($data);
				if($result===false){
					echo 'false'.var_dump($data);
				}
				array_push($set,$data);
			}
			echo "save data successfully!";
		}
//		echo json_encode($set);
	}
	public function getFile(){
		$path=$this->uri->segment(4, 0);
		$datapath=base_url('/'.$path);
		$json=file_get_contents($datapath);
//		echo var_dump(json_decode($json));
		$json_n=json_decode($json);
		foreach($json_n as $row){
			$result=$this->sport_model->insertSport($row);
			if($result===false){
				echo ".".var_dump($row)."<br>";
			}
		}
		echo "insert data successfully";

	}
}

