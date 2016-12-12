<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:38
 */
class Sport{
	private $account_id;
	private $status;
	private $calory;
	private $meter;
	private $step;
	private $minute;

	/**
	 * Sport constructor.
	 * @param $account_id
	 * @param $status
	 * @param $calory
	 * @param $meter
	 * @param $step
	 * @param $minute
	 */
	public function __construct($account_id, $status, $calory, $meter, $step, $minute) {
		$this->account_id = $account_id;
		$this->status = $status;
		$this->calory = $calory;
		$this->meter = $meter;
		$this->step = $step;
		$this->minute = $minute;
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
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param mixed $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return mixed
	 */
	public function getCalory() {
		return $this->calory;
	}

	/**
	 * @param mixed $calory
	 */
	public function setCalory($calory) {
		$this->calory = $calory;
	}

	/**
	 * @return mixed
	 */
	public function getMeter() {
		return $this->meter;
	}

	/**
	 * @param mixed $meter
	 */
	public function setMeter($meter) {
		$this->meter = $meter;
	}

	/**
	 * @return mixed
	 */
	public function getStep() {
		return $this->step;
	}

	/**
	 * @param mixed $step
	 */
	public function setStep($step) {
		$this->step = $step;
	}

	/**
	 * @return mixed
	 */
	public function getMinute() {
		return $this->minute;
	}

	/**
	 * @param mixed $minute
	 */
	public function setMinute($minute) {
		$this->minute = $minute;
	}


}
?>

