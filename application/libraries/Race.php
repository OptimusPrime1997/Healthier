<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.4
 * Time: 21:44
 */
class Race{
	private $race_id;
	private $race_name;
	private $start_time;
	private $end_time;
	private $race_type;
	private $organizer_id;
	private $reward;
	private $race_state;

	/**
	 * Race constructor.
	 * @param $race_name
	 * @param $start_time
	 * @param $end_time
	 * @param $race_type
	 * @param $organizer_id
	 * @param $reward
	 * @param $race_state
	 */
	public function __construct($race_id,$race_name, $start_time, $end_time, $race_type, $organizer_id, $reward, $race_state) {
		$this->race_id=$race_id;
		$this->race_name = $race_name;
		$this->start_time = $start_time;
		$this->end_time = $end_time;
		$this->race_type = $race_type;
		$this->organizer_id = $organizer_id;
		$this->reward = $reward;
		$this->race_state = $race_state;
	}

	/**
	 * @return mixed
	 */
	public function getRaceId() {
		return $this->race_id;
	}

	/**
	 * @param mixed $race_id
	 */
	public function setRaceId($race_id) {
		$this->race_id = $race_id;
	}

	/**
	 * @return mixed
	 */
	public function getRaceName() {
		return $this->race_name;
	}

	/**
	 * @param mixed $race_name
	 */
	public function setRaceName($race_name) {
		$this->race_name = $race_name;
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
	public function getRaceType() {
		return $this->race_type;
	}

	/**
	 * @param mixed $race_type
	 */
	public function setRaceType($race_type) {
		$this->race_type = $race_type;
	}

	/**
	 * @return mixed
	 */
	public function getOrganizerId() {
		return $this->organizer_id;
	}

	/**
	 * @param mixed $organizer_id
	 */
	public function setOrganizerId($organizer_id) {
		$this->organizer_id = $organizer_id;
	}

	/**
	 * @return mixed
	 */
	public function getReward() {
		return $this->reward;
	}

	/**
	 * @param mixed $reward
	 */
	public function setReward($reward) {
		$this->reward = $reward;
	}

	/**
	 * @return mixed
	 */
	public function getRaceState() {
		return $this->race_state;
	}

	/**
	 * @param mixed $race_state
	 */
	public function setRaceState($race_state) {
		$this->race_state = $race_state;
	}


}
?>