<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:33
 */
class Target{
	private $account_id;
	private $start_time;
	private $end_time;
	private $target_type;
	private $value;

	/**
	 * Target constructor.
	 * @param $account_id
	 * @param $start_time
	 * @param $end_time
	 * @param $target_type
	 * @param $value
	 */
	public function __construct($account_id, $start_time, $end_time, $target_type, $value) {
		$this->account_id = $account_id;
		$this->start_time = $start_time;
		$this->end_time = $end_time;
		$this->target_type = $target_type;
		$this->value = $value;
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
	public function getStartTime() {
		return $this->start_time;
	}

	/**
	 * @param mixed $start_time
	 */
	public function setStartTime($start_time) {
		$this->start_time = $start_time;
	}

	/**
	 * @return mixed
	 */
	public function getEndTime() {
		return $this->end_time;
	}

	/**
	 * @param mixed $end_time
	 */
	public function setEndTime($end_time) {
		$this->end_time = $end_time;
	}

	/**
	 * @return mixed
	 */
	public function getTargetType() {
		return $this->target_type;
	}

	/**
	 * @param mixed $target_type
	 */
	public function setTargetType($target_type) {
		$this->target_type = $target_type;
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}

}
?>

