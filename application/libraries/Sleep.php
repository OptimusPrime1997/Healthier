<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:47
 */
class Sleep{
	private $account_id;
	private $update_time;
	private $deep_minute;
	private $sleep_complete;
	private $total_minute;
	private $light_minute;

	/**
	 * Sleep constructor.
	 * @param $account_id
	 * @param $time
	 * @param $deep_minute
	 * @param $sleep_complete
	 * @param $total_minute
	 * @param $light_minute
	 */
	public function __construct($account_id, $time, $deep_minute, $sleep_complete, $total_minute, $light_minute) {
		$this->account_id = $account_id;
		$this->update_time = $time;
		$this->deep_minute = $deep_minute;
		$this->sleep_complete = $sleep_complete;
		$this->total_minute = $total_minute;
		$this->light_minute = $light_minute;
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
		return $this->update_time;
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
	public function getDeepMinute() {
		return $this->deep_minute;
	}

	/**
	 * @param mixed $deep_minute
	 */
	public function setDeepMinute($deep_minute) {
		$this->deep_minute = $deep_minute;
	}

	/**
	 * @return mixed
	 */
	public function getSleepComplete() {
		return $this->sleep_complete;
	}

	/**
	 * @param mixed $sleep_complete
	 */
	public function setSleepComplete($sleep_complete) {
		$this->sleep_complete = $sleep_complete;
	}

	/**
	 * @return mixed
	 */
	public function getTotalMinute() {
		return $this->total_minute;
	}

	/**
	 * @param mixed $total_minute
	 */
	public function setTotalMinute($total_minute) {
		$this->total_minute = $total_minute;
	}

	/**
	 * @return mixed
	 */
	public function getLightMinute() {
		return $this->light_minute;
	}

	/**
	 * @param mixed $light_minute
	 */
	public function setLightMinute($light_minute) {
		$this->light_minute = $light_minute;
	}


}
?>