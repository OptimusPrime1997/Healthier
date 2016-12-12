<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:46
 */
class Message{
	private $account_id;
	private $update_time;
	private $information;

	/**
	 * Message constructor.
	 * @param $account_id
	 * @param $time
	 * @param $information
	 */
	public function __construct($account_id, $time, $information) {
		$this->account_id = $account_id;
		$this->update_time = $time;
		$this->information = $information;
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
	public function getInformation() {
		return $this->information;
	}

	/**
	 * @param mixed $information
	 */
	public function setInformation($information) {
		$this->information = $information;
	}


}
?>