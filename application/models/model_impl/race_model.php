<?php

interface Race_MS {
	public function getRace($data);

	public function insertRace($data);

	public function deleteRace($data);

	public function updateRace($old_data, $data);
}

class Race_Model extends CI_Model implements Race_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getRace($data = NULL) {
		// TODO: Implement getrace() method.
		if ($data === null) {
			$query_sql = "select r.*,u.username as username,
						  u.account_id as account_id,u.img_name as img_name
						from race as r,user as u 
						where r.organizer_id=u.account_id 
						order by r.end_time desc;";
			$query = $this->db->query($query_sql);
		} else {
			$query_sql = "select r.*,u.username as username,
									   u.account_id as account_id,u.img_name as img_name
							from race as r,user as u
							where r.organizer_id=u.account_id
							  and r.race_name in (select re.race_name
												  from relation as re
												  where re.account_id=".$data.")
								and r.organizer_id!=".$data
							." order by r.end_time desc;";
			$query = $this->db->query($query_sql);
		}

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->race_model->getrace get result failed!", 3, "/logs/my-errors.log");
		}
	}
	public function getMyRace($data){
		// TODO: Implement getrace() method.
		
			$query_sql = "select r.*,u.username as username,
						  u.account_id as account_id,u.img_name as img_name
						from race as r,user as u 
						where r.organizer_id=u.account_id and r.organizer_id=".$data
						."  order by r.end_time desc;";
			$query = $this->db->query($query_sql);
		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->race_model->getrace get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertRace($data) {
		// TODO: Implement insertRace() method.
		$insert_sql = "insert into race values ( '"
			. $data["race_name"] . "','"
			. $data["start_time"] . "','"
			. $data["end_time"] . "','"
			. $data["race_type"] . "',"
			. $data["organizer_id"] . ","
			. $data["reward"] . ",'"
			. $data["introduction"]
			. "');";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert race success!";
			return true;
		} else {
			error_log("model->race_model->insertrace get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteRace($data) {
		// TODO: Implement deleterace() method.
		$delete_sql = "delete from race where race_name='"
			. $data["race_name"]
			. "';";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete race success!";
			return true;
		} else {
			error_log("model->race_model->deleterace get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function updateRace($old_data, $data) {
		// TODO: Implement updateRace() method.
		$update_sql =
			"update  race set start_time='" . $data['start_time']
			. "',end_time='" . $data['end_time']
			. "',race_type='" . $data['race_type']
			. "',organizer_id=" . $data['organizer_id']
			. ",reward=" . $data["reward"]
			. ",race_state='" . $data["race_state"]
			. "'  where race_name='" . $old_data["race_name"]
			. "';";

		if ($this->db->simple_query($update_sql)) {
//			echo "update race success!";
			return true;
		} else {
			error_log("model->race_model->updaterace get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>