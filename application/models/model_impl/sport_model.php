<?php

interface Sport_MS {
	public function getSport($data);

	public function insertSport($data);

	public function deleteSport($data);

	public function updateSport($old_data, $data);
}

class Sport_Model extends CI_Model implements Sport_MS {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getSport($data = NULL) {
		// TODO: Implement getsport() method.
		if ($data === NULL) {
			$query = $this->db->get('sport');
		} else {
			$this->db->where(array('account_id' => $data));
			$this->db->order_by('update_time','DESC');
			$this->db->limit(1);
			$query = $this->db->get('sport');
		}

		$tempArray = $query->row_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->sport_model->getsport get result failed!", 3, "/logs/my-errors.log");
		}
	}
	public function getAllSport($data){
		if ($data === NULL) {
			$query = $this->db->get('sport');
		} else {
			$this->db->where(array('account_id' => $data));
			$this->db->order_by('update_time','asc');
			$this->db->limit(30);
			$query = $this->db->get('sport');
		}

		$tempArray = $query->result_array();
		if (!empty($tempArray)) {
			return $tempArray;
		} else {
			error_log("model->sport_model->getsport get result failed!", 3, "/logs/my-errors.log");
		}
	}
	public function getMaxSport($data){
		$sql="select max(meter) as max_meter,
				max(calory) as max_calory,
				max(step) as max_step
				from sport 
				where account_id=".$data.";";
		$result=$this->db->query($sql);
		if(!empty($result)){
			return $result->row_array();
		}else{
			return null;
		}
	}
	public function getTotalSport($data){
		$sql="select sum(meter) as total_meter,
				sum(calory) as total_calory,
				sum(step) as total_step
				from sport 
				where account_id=".$data.";";
		$result=$this->db->query($sql);
		if(!empty($result)){
			return $result->row_array();
		}else{
			return null;
		}
	}

	public function getRank($data){
		$sql="with tt(account_id,total_c) as (
			select account_id,sum(calory) as total_c
			from sport
			group by account_id )
			select s.account_id,s.total_c,
			(select count(*)+1 from tt as r where r.total_c>s.total_c) as rank
			,(select count(DISTINCT tt.account_id) from tt) as all_people
			from tt as s
			where s.account_id=".$data.";";
		$result=$this->db->query($sql);
		if(!empty($result)){
			return $result->row_array();
		}else{
			return null;
		}
	}





	public function insertSport($data) {
		// TODO: Implement insertSport() method.
		$insert_sql = "insert into sport values ( "
			. $data["account_id"] . ",'"
			. $data["update_time"] . "',"
			. $data["calory"] . ","
			. $data["meter"] . ","
			. $data["step"] . ","
			. $data["minute"]
			. ");";

		if ($this->db->simple_query($insert_sql)) {
//			echo "insert sport success!";
			return true;
		} else {
			error_log("model->sport_model->insertsport get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	public function deleteSport($data) {
		// TODO: Implement deletesport() method.
		$delete_sql = "delete from sport where account_id="
			. $data["account_id"].
			"  and update_time='".$data["update_time"].
			"';";

		if ($this->db->simple_query($delete_sql)) {
//			echo "delete sport success!";
			return true;
		} else {
			error_log("model->sport_model->deletesport get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

	/**
	 * update non primary key column
	 * @param $old_data
	 * @param $data
	 * @return bool
	 */
	public function updateSport($old_data, $data) {
		// TODO: Implement updateSport() method.
		$update_sql =
			"update  sport set status='" . $data['status']
			. "',account_id=" . $data['account_id']
			. ",update_time='" . $data['update_time']
			. "',calory=" . $data['calory']
			. ",meter=" . $data['meter']
			. ",step=" . $data['step']
			. ",minute=" . $data['minute']
			. "  where account_id=" . $old_data["account_id"]
			. " and update_time='".$old_data["update_time"]
			. "';";

		if ($this->db->simple_query($update_sql)) {
//			echo "update sport success!";
			return true;
		} else {
			error_log("model->sport_model->updatesport get result failed!", 3, "/logs/my-errors.log");
			return false;
		}
	}

}

?>