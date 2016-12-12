<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class User_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$this->load->view("php/profile");
	}
}

