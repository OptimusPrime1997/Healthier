<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestBody extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/body_model");
		$this->load->helper('url_helper');
	}


	public function testGet() {
		$id = 10001000;
		$result = $this->body_model->getBody($id);

		foreach ($result as $row) {
			foreach ($row as $key => $value) {
				echo $key . '=' . $value . '<br>';
			}
		}
		$tempString = '';
		foreach ($result as $row) {
			/*foreach ($row as $item) {
				$tempString=$tempString . $item;
				echo $item . '==' ;
			}*/
			echo '+++++++' . $row['account_id'] . $row['height'] . '<br>';
		}
		$data['title'] = 'News Archieve';
		$data['news'] = $tempString;
		$this->load->view("TestHeader", $data);
		$this->load->view("TestBodyView", $data);
		$this->load->view("TestFooter");
	}

	public function testInsert() {
		$body['account_id'] = 10001003;
		$body['time'] = "2016-11-29 00:00:00";
		$body['height'] = 183.0;
		$body['weight'] = 66;
		$body['weight_goal'] = 63;
		$body['bmi'] = 22.6;
		$temp=$this->body_model->insertBody($body);
		echo 'testInsert Body'.($temp);
	}

	public function testDelete() {
		$body['account_id'] = 10001003;
		$body['time'] = "2016-11-29 00:00:00";
		$temp=$this->body_model->deleteBody($body);
		echo 'testDelete Body'.($temp);

	}

	public function testUpdate() {
		$body['account_id'] = 10001003;
		$body['time'] = "2016-11-29 00:00:00";
		$body['height'] = 173.0;
		$body['weight'] = 66;
		$body['weight_goal'] = 63;
		$body['bmi'] = 22.6;
		$temp=$this->body_model->updateBody($body);
		echo 'testUpdate Body'.$temp;
	}
}