<?php

interface Body_MS {
	public function getBody($data);

	public function insertBody($data);

	public function deleteBody($data);

	public function updateBody($data);
}


class Body_Model extends CI_Model implements Body_MS {
	public function __construct() {
		parent::__construct();
		/*$this->load->library('Body');*/
		$this->load->database();
	}

//the newest body if $data is null,
	public function getBody($data = NULL) {
		// TODO: Implement getBody() method.
		if ($data === NULL) {
			$query = $this->db->get('body');
			return $query->result_array();
		}

		$this->db->where(array('account_id' => $data));
		$this->db->order_by('update_time', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('body');
		$tempArray = $query->row_array();
		if (!empty($tempArray)) {
//			$testArray = array();
//			foreach ($tempArray as $row) {
//				/*$body=new Body($row['account_id'],
//					$row['update_update_time'],$row['height'],$row['weight'],
//					$row['weight_goal'],$row['bmi']);*/
//				foreach ($row as $key => $value) {
//					echo $key . '=' . $value .'<br>';
//				}
//			}
			return $tempArray;
		} else {
			/*echo "The query result is null.<br>";*/
			error_log("model->body_model->getBody get result failed!", 3, "/logs/my-errors.log");
		}
	}

	/**
	 * @param $data
	 */
	public
	function insertBody($data) {
		// TODO: Implement insertBody() method.
		$insert_sql="insert into body 	values ( ".$data["account_id"].",'
			".$data["update_time"]."',"
			.$data["height"].","
			.$data["weight"].","
			.$data["weight_goal"].","
			.$data["bmi"]
			.");";

		if($this->db->simple_query($insert_sql)){
			echo "insert body success!";
		}else{
			error_log("model->body_model->insertBody get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public
	function deleteBody($data) {
		// TODO: Implement deleteBody() method.
		$delete_sql='delete from body where account_id='.$data['account_id'].
			"  and update_time='".$data['update_time'] ."';";

		if($this->db->simple_query($delete_sql)){
			echo "delete body success!";
		}else{
			error_log("model->body_model->deleteBody get result failed!", 3, "/logs/my-errors.log");
		}
	}

	public
	function updateBody($data) {
		// TODO: Implement updateBody() method.
		$update_sql='update  body set height='.$data['height'].',weight='.$data['weight'].','.'weight_goal='.$data['weight_goal'].
			',bmi='.$data['bmi'].' where account_id='.$data['height']." and update_time='".$data['update_time']."';";

		if($this->db->simple_query($update_sql)){
			echo "update body success!";
		}else{
			error_log("model->body_model->updateBody get result failed!", 3, "/logs/my-errors.log");
		}
	}

}

?>