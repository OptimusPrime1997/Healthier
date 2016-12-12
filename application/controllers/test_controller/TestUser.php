<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestUser extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/user_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$name = 10001000;
		$result = $this->user_model->getUser($name);
		foreach ($result as $row) {
			foreach ($row as $item) {
				echo $item . '<br>';
			}
		}
	}
	public function testCheckLogin(){
		$username="Jack";
		$password="1234567";
		$result=$this->user_model->checkLogin($username,$password);
		if(true===$result){
			echo "success!".$result;
		}else{
			echo "failed!";
		}
	}

	public function testInsert() {
		$data["account_id"]=10001003;
		 $data["username"]="OptimusPrime";
		 $data["password"]="123456";
		 $data["sex"]="男";
		 $data["birthday"]="1996-12-12";
		 $data["address"]="江苏省南京市";
		 $data["hobby"]="跑步";
		 $data["propaganda"]="生命不息，运动不止";
		 $data["img_name"]="img10001003";
		$temp = $this->user_model->insertUser($data);
		echo 'testInsert User' . ($temp);
	}

	public function testDelete() {
		$user['account_id'] = '10001003';
		$temp = $this->user_model->deleteUser($user);
		echo 'testDelete User' . ($temp);
	}

	public function testUpdate() {
		$old_data['account_id'] = '10001003';
		$data["account_id"]=10001003;
		$data["username"]="OptimusPrime";
		$data["password"]="123456";
		$data["sex"]="男";
		$data["birthday"]="1998-12-12";
		$data["address"]="江苏省南京市鼓楼区";
		$data["hobby"]="跑步";
		$data["propaganda"]="生命不息，运动不止";
		$data["img_name"]="img10001003";
		$temp = $this->user_model->updateUser($old_data, $data);
		echo 'testUpdate User' . $temp;
	}

}