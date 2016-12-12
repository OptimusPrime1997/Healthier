<?php
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Sleep_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index(){
		$data['sleep_effectiveness']=0;
		$data['sleep_total_time']=0;
		$data['sleep_effective_time']=0;
		$this->load->view("php/sleep",$data);
	}
}

