<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:42
 */
class Friend{
	private $account_id;
	private $idArray;

	/**
	 * Friend constructor.
	 * @param $account_id
	 * @param $idArray
	 */
	public function __construct($account_id, $idArray) {
		$this->account_id = $account_id;
		$this->idArray = $idArray;
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
	public function getIdArray() {
		return $this->idArray;
	}

	/**
	 * @param mixed $idArray
	 */
	public function setIdArray($idArray) {
		$this->idArray = $idArray;
	}

}
?>