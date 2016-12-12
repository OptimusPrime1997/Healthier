<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.14
 * Time: 23:06
 */
class MyDB extends SQLite3 {
	private $dbname;

	function __construct() {
		parent::__construct();
//		 $this->load->database();
		$this->dbname = "healtherdb.db";
	}

	public function getConn() {
		$db = $this->open($this->dbname);
		if (!$db) {
			echo $db->lastErrorMsg();
		} else {
		}
		return $db;
	}

	public function closeConn($conn) {
		return $conn->close();
	}

	public function execute($sql){
		$sqltemp=$this->getConn();
		$sqlSt=<<<EOF
{$sql}
EOF;
		$result=$sqltemp->execute($sql);
		if($result!=null){
			return $result;
		}
		$this->closeConn($sqltemp);
	}
}

?>