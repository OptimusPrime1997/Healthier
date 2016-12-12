<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestFriend extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/friend_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$id = 10001003;
		$result = $this->friend_model->getfriend($id);
		foreach ($result as $row) {
			foreach ($row as $key => $value) {
				echo $key . '=' . $value . '<br>';
			}
		}
	}

	public function testInsert() {
		$friend['account_id'] = 10001003;
		$friend['friend_id'] = 10001006;

		$this->friend_model->insertfriend($friend);
	}

	public function testDelete() {
		$friend['account_id'] = 10001003;
		$friend['friend_id'] = 10001006;
		$this->friend_model->deletefriend($friend);

	}

	public function testUpdate() {
		$friend['account_id'] = 10001003;
		$friend['friend_id'] = 10001006;
		$friend2['account_id'] = 10001003;
		$friend2['friend_id'] = 10001009;

		$this->friend_model->updatefriend($friend,$friend2);
	}
}