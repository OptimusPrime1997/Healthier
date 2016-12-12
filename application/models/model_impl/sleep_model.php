<?php

interface Sleep_MS {
	public function getSleep($data);

	public function insertSleep($data);

	public function deleteSleep($data);

	public function updateSleep($old_data, $data);
}

class Sleep_Model extends CI_Model implements Sleep_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getSleep($data = NULL) {
		// TODO: Implement getsleep() method.
		if ($data === NULL) {
			$query = $this->db->get('sleep');
		} else {
			$this->db->where(array('account_id' => $data));
			$query = $this->db->get('sleep');
		}

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->sleep_model->getsleep get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertSleep($data) {
		// TODO: Implement insertSleep() method.
		$insert_sql = "insert into sleep values ( "
			. $data["account_id"] . ",'"
			. $data["update_time"] . "',"
			. $data["deep_minute"] . ","
			. $data["light_minute"] . ","
			. $data["total_minute"]
			. ");";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert sleep success!";
			return true;
		} else {
			error_log("model->sleep_model->insertsleep get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteSleep($data) {
		// TODO: Implement deletesleep() method.
		$delete_sql = "delete from sleep where account_id="
			. $data["account_id"].
			 "  and update_time='".$data["update_time"].
			 "';";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete sleep success!";
			return true;
		} else {
			error_log("model->sleep_model->deletesleep get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	/**
	 * update non primary key column
	 * @param $old_data
	 * @param $data
	 * @return bool
	 */
	public function updateSleep($old_data, $data) {
		// TODO: Implement updateSleep() method.
		$update_sql =
			"update  sleep set deep_minute=" . $data['deep_minute']
			. ",account_id=" . $data['account_id']
			. ",update_time='" . $data['update_time']
			. "',light_minute=" . $data['light_minute']
			. ",total_minute=" . $data['total_minute']
			. "  where account_id=" . $old_data["account_id"]
			. " and update_time='".$old_data["update_time"]
			. "';";

		if ($this->db->simple_query($update_sql)) {
//			echo "update sleep success!";
			return true;
		} else {
			error_log("model->sleep_model->updatesleep get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>