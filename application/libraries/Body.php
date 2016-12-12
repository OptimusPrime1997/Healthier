<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:35
 */
class Body{
	private $account_id;
	private $update_time;
	private $height;
	private $weight;
	private $weight_goal;
	private $bmi;
	/**
	 * Body constructor.
	 * @param $account_id
	 * @param $time
	 * @param $height
	 * @param $weight
	 * @param $weight_goal
	 * @param $bmi
	 */
	public function __construct($account_id, $time, $height, $weight, $weight_goal, $bmi) {
		$this->account_id = $account_id;
		$this->update_time = $time;
		$this->height = $height;
		$this->weight = $weight;
		$this->weight_goal = $weight_goal;
		$this->bmi = $bmi;
	}

	/**
	 * @return mixed
	 */
	public function getAccountId() {
		return $this->account_id;
	}

	/**
	 * @param mixed $account_id
	 */
	public function setAccountId($account_id) {
		$this->account_id = $account_id;
	}

	/**
	 * @return mixed
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * @param mixed $time
	 */
	public function setTime($time) {
		$this->update_time = $time;
	}

	/**
	 * @return mixed
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param mixed $height
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * @return mixed
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * @param mixed $weight
	 */
	public function setWeight($weight) {
		$this->weight = $weight;
	}

	/**
	 * @return mixed
	 */
	public function getWeightGoal() {
		return $this->weight_goal;
	}

	/**
	 * @param mixed $weight_goal
	 */
	public function setWeightGoal($weight_goal) {
		$this->weight_goal = $weight_goal;
	}

	/**
	 * @return mixed
	 */
	public function getBmi() {
		return $this->bmi;
	}

	/**
	 * @param mixed $bmi
	 */
	public function setBmi($bmi) {
		$this->bmi = $bmi;
	}


}
?>