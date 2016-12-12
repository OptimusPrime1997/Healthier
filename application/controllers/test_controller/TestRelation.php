<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.29
 * Time: 10:18
 */
class TestRelation extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("model_impl/relation_model");
		$this->load->helper('url_helper');
	}

	public function testGet() {
		$name = 'NJURUN';
		$result = $this->relation_model->getRelation();
		foreach($result as $row){
			foreach($row as $item){
				echo $item .'<br>';
			}
		}
	}

	public function testInsert() {
		$data['race_name'] ="BeijingRun";
		$data['account_id'] = 10001000;
		$result = $this->relation_model->insertRelation($data);
		if ($result === false) {
			echo "The delete relation operation failed!";
		}
		echo 'testInsert Relation'.($result);
	}

	public function testDelete() {
		$relation['relation_name'] = 'BeijingRun';
		$temp=$this->relation_model->deleteRelation($relation);
		echo 'testDelete Relation'.($temp);

	}

	public function testUpdate() {
		$old_data['relation_name']='BeijingRun';
		$data["relation_name"]='BeijingRun';
		$data["start_time"]='2015-11-12 00:00:00';
		$data["end_time"]='2016-11-22 00:00:00';
		$data["relation_type"]='METER';
		$data["organizer_id"]="10001001";
		$data["reward"]=300;
		$data["relation_state"]="FINSH";
		$temp=$this->relation_model->updateRelation($old_data,$data);
		echo 'testUpdate Relation'.$temp;
	}
}