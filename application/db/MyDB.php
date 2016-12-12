<?php

class DBUtil extends SQLite3 {
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

	/**
	 * 查询数据库
	 */
	public function select($table, $condition = array(), $field = array()) {
		$where = '';
		if (!empty($condition)) {

			foreach ($condition as $k => $v) {
				$where .= $k . "='" . $v . "' and ";
			}
			$where = 'where ' . $where . '1=1';
		}
		$fieldstr = '';
		if (!empty($field)) {
			foreach ($field as $k => $v) {
				$fieldstr .= $v . ',';
			}
			$fieldstr = rtrim($fieldstr, ',');
		} else {
			$fieldstr = '*';
		}
		$sqltemp = "select {$fieldstr} from {$table} {$where}";
		$sql = <<<EOF
{$sqltemp}
EOF;
		$tempConn=$this->getConn();
		if($tempConn!=NULL){
			$result =  $tempConn->excute($sql);
			$resuleRow = array();
			$i = 0;
			while ($row = mysql_fetch_assoc($result)) {
				foreach ($row as $k => $v) {
					$resuleRow[$i][$k] = $v;
				}
				$i++;
			}
			return $resuleRow;
		}
		$this->closeConn($tempConn);
	}

	/**
	 * 添加一条记录
	 */
	public function insert($table, $data) {
		$values = '';
		$datas = '';
		foreach ($data as $k => $v) {
			$values .= $k . ',';
			$datas .= "'$v'" . ',';
		}
		$values = rtrim($values, ',');
		$datas = rtrim($datas, ',');
		self::$sql = "INSERT INTO  {$table} ({$values}) VALUES ({$datas})";
		if (mysql_query(self::$sql)) {
			return mysql_insert_id();
		} else {
			return false;
		};
	}

	/**
	 * 修改一条记录
	 */
	public function update($table, $data, $condition = array()) {
		$where = '';
		if (!empty($condition)) {

			foreach ($condition as $k => $v) {
				$where .= $k . "='" . $v . "' and ";
			}
			$where = 'where ' . $where . '1=1';
		}
		$updatastr = '';
		if (!empty($data)) {
			foreach ($data as $k => $v) {
				$updatastr .= $k . "='" . $v . "',";
			}
			$updatastr = 'set ' . rtrim($updatastr, ',');
		}
		self::$sql = "update {$table} {$updatastr} {$where}";
		return mysql_query(self::$sql);
	}

	/**
	 * 删除记录
	 */
	public function delete($table, $condition) {
		$where = '';
		if (!empty($condition)) {

			foreach ($condition as $k => $v) {
				$where .= $k . "='" . $v . "' and ";
			}
			$where = 'where ' . $where . '1=1';
		}
		self::$sql = "delete from {$table} {$where}";
		return mysql_query(self::$sql);

	}

	public static function getLastSql() {
		echo self::$sql;
	}


}

$db = db::getInstance();
//$list = $db->select('demo',array('name'=>'tom','password'=>'ds'),array('name','password'));
//echo $db->insert('demo',array('name'=>'最近你啦','password'=>'123'));
//echo $db->update('demo',array("name"=>'xxx',"password"=>'123'),array('id'=>1));
echo $db->delete('demo', array('id' => '2'));
db::getLastSql();
echo "<pre>";
?>    /*
$ret2 = $db->exec($sql_insert);
if (!$ret2) {
echo $db->lastErrorMsg();
} else {
echo "Insert a record successful!<br>";
}*/
$db->close();
}

$db = db::getInstance();
//$list = $db->select('demo',array('name'=>'tom','password'=>'ds'),array('name','password'));
//echo $db->insert('demo',array('name'=>'最近你啦','password'=>'123'));
//echo $db->update('demo',array("name"=>'xxx',"password"=>'123'),array('id'=>1));
echo $db->delete('demo', array('id' => '2'));
db::getLastSql();
echo "
<pre>";
?>