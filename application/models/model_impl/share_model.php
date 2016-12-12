<?php

interface Share_MS {
	public function getShare($data);

	public function insertShare($data);

	public function deleteShare($data);

	public function updateShare($old_data, $data);
}

class Share_Model extends CI_Model implements Share_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getShare($data = NULL) {
		// TODO: Implement getshare() method.
		if ($data === null) {
			$query_sql = "select s.*,u.username as username,u.img_name as img_name
						from share as s,user as u
						where  s.account_id=u.account_id
						  order by update_time desc"
						. ";";
			$query = $this->db->query($query_sql);
		} else {
			$query_sql = "select s.*,u.username as username,u.img_name as img_name
						from share as s,user as u
						where s.account_id=" . $data . "
						   and s.account_id=u.account_id
						  order by update_time desc"
						. ";";
			$query = $this->db->query($query_sql);
		}
		if (!empty($query)) {
			return $query->result_array();
		} else {
			error_log("model->user_model->getFollowing get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function getAllShare($data) {
		$query_sql = "select s.*,u.username as username,u.img_name as img_name
						from share as s,user as u
						where (s.account_id in (select f.friend_id
                        from friend as f
                        where f.account_id=" . $data . ")
						  or s.account_id=" . $data . ")
						  and s.account_id=u.account_id
						  order by update_time desc"
			. ";";
		$query = $this->db->query($query_sql);
		if (!empty($query)) {
			return $query->result_array();
		} else {
			error_log("model->user_model->getFollowing get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertShare($data) {
		// TODO: Implement insertShare() method.
		$insert_sql = "insert into share values ( "
			. $data["account_id"] . ",'"
			. $data["update_time"] . "','"
			. $data["content"]
			. "');";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert share success!";
			return true;
		} else {
			error_log("model->share_model->insertshare get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteShare($data) {
		// TODO: Implement deleteshare() method.
		$delete_sql = 'delete from share 
				where account_id=' . $data['account_id']
			. " and update_time='" . $data['update_time'] . "';";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete share success!";
			return true;
		} else {
			error_log("model->share_model->deleteshare get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function updateShare($old_data, $data) {
		// TODO: Implement updateShare() method.
		$update_sql = "update  share set account_id=" . $data["account_id"] 
			. ",update_time='" .$data["update_time"]
			. "' where account_id=" . $old_data["account_id"]
			. " and update_time='" . $old_data["update_time"] . "';";

		if ($this->db->simple_query($update_sql)) {
//			echo "update share success!";
			return true;
		} else {
			error_log("model->share_model->updateshare get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>