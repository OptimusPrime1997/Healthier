<?php
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Body_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index(){
		$data['weight']=0;
		$data['height']=0;
		$data['walk_steplength']=0;
		$data['run_steplength']=0;
		$data['optimal_weight']=0;
		$data['consume_calory']=0;
		$data['lost_weight']=0;
		$data['consume_calory']=0;
		$data['target_weight']=0;
		$this->load->view("php/body",$data);
	}
}

