<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:26
 */
class User{
	private $account_id;
	private $username;
	private  $password;
	private $sex;
	private $birthday;
	private $address;
	private $hobby;
	private $propaganda;
	private $img_name;

	/**
	 * User constructor.
	 * @param $username
	 * @param $password
	 * @param $sex
	 * @param $birthday
	 * @param $address
	 * @param $hobby
	 * @param $propaganda
	 * @param $img_name
	 */
	public function __construct( $username, $password, $sex, $birthday, $address, $hobby, $propaganda, $img_name) {
		/*$this->account_id = $account_id;*/
		$this->username = $username;
		$this->password = $password;
		$this->sex = $sex;
		$this->birthday = $birthday;
		$this->address = $address;
		$this->hobby = $hobby;
		$this->propaganda = $propaganda;
		$this->img_name = $img_name;
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
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @param mixed $username
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @return mixed
	 */
	public function getSex() {
		return $this->sex;
	}

	/**
	 * @param mixed $sex
	 */
	public function setSex($sex) {
		$this->sex = $sex;
	}

	/**
	 * @return mixed
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * @param mixed $birthday
	 */
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
	}

	/**
	 * @return mixed
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param mixed $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return mixed
	 */
	public function getHobby() {
		return $this->hobby;
	}

	/**
	 * @param mixed $hobby
	 */
	public function setHobby($hobby) {
		$this->hobby = $hobby;
	}

	/**
	 * @return mixed
	 */
	public function getPropaganda() {
		return $this->propaganda;
	}

	/**
	 * @param mixed $propaganda
	 */
	public function setPropaganda($propaganda) {
		$this->propaganda = $propaganda;
	}

	/**
	 * @return mixed
	 */
	public function getImgName() {
		return $this->img_name;
	}

	/**
	 * @param mixed $img_name
	 */
	public function setImgName($img_name) {
		$this->img_name = $img_name;
	}

}
?>