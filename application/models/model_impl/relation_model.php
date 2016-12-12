<?php

interface Relation_MS {
	public function getRelation($data);

	public function insertRelation($data);

	public function deleteRelation($data);

	public function updateRelation($old_data, $data);
}

class Relation_Model extends CI_Model implements Relation_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getRelation($data = NULL) {
		// TODO: Implement getrelation() method.
		if ($data === NULL) {
			$query = $this->db->get('relation');
		} else {
			$this->db->where(array('race_name' => $data));
			$query = $this->db->get('relation');
		}

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->relation_model->getrelation get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertRelation($data) {
		// TODO: Implement insertRelation() method.
		$insert_sql = "insert into relation values ( '"
			. $data["race_name"] . "',"
			. $data["account_id"]
			. ");";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert relation success!";
			return true;
		} else {
			error_log("model->relation_model->insertrelation get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteRelation($data) {
		// TODO: Implement deleterelation() method.
		$delete_sql = "delete from relation where race_name='"
			. $data["race_name"]
			."' and account_id=".$data["account_id"]
			. " ;";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete relation success!";
			return true;
		} else {
			error_log("model->relation_model->deleterelation get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function updateRelation($old_data, $data) {
		// TODO: Implement updateRelation() method.
		$update_sql =
			"update  relation set race_name='" . $data['race_name']
			. "',account_id=" . $data['account_id']
			. "  where race_name='" . $old_data["race_name"]
			. "';";

		if ($this->db->simple_query($update_sql)) {
//			echo "update relation success!";
			return true;
		} else {
			error_log("model->relation_model->updaterelation get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>