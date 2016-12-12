<?php

interface User_MS {
	public function getUser($data);

	public function insertUser($data);

	public function deleteUser($data);

	public function updateUser($old_data, $data);
}

class User_Model extends CI_Model implements User_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getUser($data = NULL) {
		// TODO: Implement getuser() method.
		if ($data === NULL) {
			$query = $this->db->get('user');
		} else {
			$this->db->where(array('account_id' => $data));
			$query = $this->db->get('user');
		}

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->user_model->getuser get result failed!", 3, "/logs/my-errors.log");
		}
	}
	public function getAllUser() {
		// TODO: Implement getuser() method.
		$this->db->where('level',0);
		$query = $this->db->get('user');

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->user_model->getuser get result failed!", 3, "/logs/my-errors.log");
		}
	}


	public function checkLogin($username, $password) {
		$this->db->where(array('username' => $username, 'password' => $password));
		$query = $this->db->get('user');
		return $query->row_array();

	}

	/*find following users by account_id*/
	public function getFollowingUser($account_id) {
		$query_sql = "select *
					from user as u
					where u.account_id in (select f.friend_id
                      from friend as f
                      where f.account_id="
			. $account_id
			. ");";
		$query = $this->db->query($query_sql);
		if (!empty($query)) {
			return $query->result_array();
		} else {
			error_log("model->user_model->getFollowing get result failed!", 3, "/logs/my-errors.log");
		}
	}

	/*find follower users by account_id*/
	public function getFollowerUser($account_id) {
		$query_sql = "select *
					from user as u
					where u.account_id in (select f.account_id
                      from friend as f
                      where f.friend_id="
			. $account_id
			. ");";
		$query = $this->db->query($query_sql);
		if (!empty($query)) {
			return $query->result_array();
		} else {
			error_log("model->user_model->getFollowing get result failed!", 3, "/logs/my-errors.log");
		}
	}

	/*get tofollow users*/
	public function getToFollowUser($account_id) {
		$query_sql = "select *
						from user as u
						where u.account_id not in (select f.friend_id
                       							   from friend as f
                       							   where f.account_id=".$account_id.")
     						     and u.account_id!=".$account_id
			. " ;";
		$query = $this->db->query($query_sql);
		if (!empty($query)) {
			return $query->result_array();
		} else {
			error_log("model->user_model->getFollowing get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public function insertUser($data) {
		// TODO: Implement insertUser() method.
		$insert_sql = "insert into user values ( "
			. $data["account_id"] . ",'"
			. $data["username"] . "','"
			. $data["password"] . "','"
			. $data["sex"] . "','"
			. $data["birthday"] . "','"
			. $data["address"] . "','"
			. $data["hobby"] . "','"
			. $data["propaganda"] . "','"
			. $data["img_name"] . "','"
			. $data["join_date"]
			. "');";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert user success!";
			return true;
		} else {
			error_log("model->user_model->insertuser get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteUser($data) {
		// TODO: Implement deleteuser() method.
		$delete_sql = "delete from user where account_id="
			. $data["account_id"] .
			";";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete user success!";
			return true;
		} else {
			error_log("model->user_model->deleteuser get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	/**
	 * update non primary key column
	 * @param $old_data
	 * @param $data
	 * @return bool
	 */
	public function updateUser($old_data, $data) {
		// TODO: Implement updateUser() method.
		$update_sql =
			"update  user set  username='" . $data['username']
			. "',account_id=" . $data['account_id']
			. ",password='" . $data['password']
			. "',sex='" . $data['sex']
			. "',birthday='" . $data['birthday']
			. "',address='" . $data['address']
			. "',hobby='" . $data['hobby']
			. "',propaganda='" . $data['propaganda']
			. "',propaganda='" . $data['img_name']
			. "',img_name='" . $data['join_date']
			. "'  where account_id=" . $old_data["account_id"]
			. ";";

		if ($this->db->simple_query($update_sql)) {
//			echo "update user success!";
			return true;
		} else {
			error_log("model->user_model->updateuser get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>