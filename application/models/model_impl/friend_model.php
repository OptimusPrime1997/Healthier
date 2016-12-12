<?php

interface Friend_MS {
	public function getFriend($data);

	public function insertFriend($data);

	public function deleteFriend($data);

	public function updateFriend($old_data, $data);
}

class Friend_Model extends CI_Model implements Friend_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getFriend($data = NULL) {
		// TODO: Implement getfriend() method.
		if ($data === NULL) {
			$query = $this->db->get('friend');
			$tempArray = $query->result_array();
		} else {
			$this->db->where(array('account_id' => $data));
			$query = $this->db->get('friend');
			$tempArray = $query->result_array();
		}
		if (!empty($tempArray)) {

			return $tempArray;
		} else {
			/*echo "The query result is null.<br>";*/
			error_log("model->friend_model->getfriend get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertFriend($data) {
		// TODO: Implement insertFriend() method.
		$insert_sql = "insert into friend 	values ( " . $data["account_id"] . "
		," . $data["friend_id"] . ");";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert friend success!";
			return true;
		} else {
			error_log("model->friend_model->insertfriend get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteFriend($data) {
		// TODO: Implement deletefriend() method.
		$delete_sql = 'delete from friend where account_id=' . $data['account_id'] . " and friend_id=" . $data['friend_id'] . ";";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete friend success!";
			return true;
		} else {
			error_log("model->friend_model->deletefriend get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function updateFriend($old_data, $data) {
		// TODO: Implement updateFriend() method.
		$update_sql = 'update  friend set account_id=' . $data['account_id'] . ',friend_id=' .
			$data['friend_id'] . ' where account_id=' . $old_data['account_id'] . " and friend_id=" . $old_data['friend_id'] . ";";

		if ($this->db->simple_query($update_sql)) {
//			echo "update friend success!";
			return true;
		} else {
			error_log("model->friend_model->updatefriend get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>