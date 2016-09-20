<?php
//-------------------------------------------------------------------- 
//FileName:class.PHP_ACCESS.php 
//Summary: Php操作Access数据库类 
//Author: LUSHAOBO
//CreateTime: 2009-11-27

//包含类文件
//include '/include/class.PHP_ACCESS.php'; //ACCESS数据库类文件
//初始化使用范例： 
//$access=new Access("数据库路径","",""); 或$access=new Access("数据库路径"); 

//添加记录
//$return->insert($sql);成功返回1，失败返回空
//数组添加记录
//$return->insertArray("table",$data);table表示操作表，$data表示数组（键值表示数据库字段），成功返回1，失败返回空
//查询
//$return=$access->select2("SELECT TOP 1 * FROM admin WHERE id NOT IN(SELECT TOP 1 id FROM admin ORDER BY id DESC) ORDER BY id DESC;");//查询列表，返回二维数组
//更新
//$return=$access->update($sql); 成功返回1，失败返回空
//数组更新
//$return=$access->updateArray("table",$data,$where);table表示操作表，$data表示数组（键值表示数据库字段），$where表示条件，成功返回1，失败返回空
//删除记录 
//$return=$access->delete($sql) 成功返回1，失败返回0
//取得记录总数
//$return=$access->selectCount($sql) 返回整数(记录数)
//-------------------------------------------------------------------- 
class Access {
	var $databasepath, $constr, $dbusername, $dbpassword, $link;
	function Access($databasepath, $dbusername="", $dbpassword="") {
		$this->databasepath = $databasepath;
		$this->username = $dbusername;
		$this->password = $dbpassword;
		$this->connect ();
	}
	
	function connect() {
		$this->constr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath ( $this->databasepath );
		$this->link = odbc_connect ( $this->constr, $this->username, $this->password, SQL_CUR_USE_ODBC );
	//return $this->link;
	if($this->link) return $this->link;//成功
	else echo "系统升级中，给您带来的不便表示抱歉!"; //失败
	}
	//操作数据库
	function query($sql) {
		return @odbc_exec ( $this->link, $sql );
	}
	//关闭数据库连接函数 
	function close() {
		odbc_close ( $this->link );
	}
	
	//数组形式插入记录函数 
	function insertArray($table, $field) {
		$ks = $vs = '';
		foreach ( $field as $k => $v ) {
			$ks .= "`" . $k . "`,";
			$vs .= "'" . $v . "',";
		}
		$ks = substr ( $ks, 0, - 1 );
		$vs = substr ( $vs, 0, - 1 );
		$sql = "INSERT INTO `" . $table . "` (" . $ks . ") VALUES (" . $vs . ")";
		$query = $this->query ( $sql );
		$return = odbc_num_rows ( $query );
		return $return;
	}
	//插入记录函数 
	function insert($sql) {
		return odbc_num_rows ( $this->query ( $sql ) );
	}
	
	//取得记录列表 
	function select($sql) {
		//$sql = "SELECT " .$limit." ". $field . " FROM " . $table . " " . $condition . " " . $sort;
		//$sql = "SELECT TOP 2 * FROM admin WHERE id NOT IN(SELECT TOP 1 id FROM admin ORDER BY id DESC) ORDER BY id DESC;";
		$result = $this->query ( $sql );
		$array = array ();
		while ( $row = odbc_fetch_array ( $result ) )
			$array [] = $row;
		return $array;
	}
	//取得单条记录
	function getone($sql) {
		return odbc_fetch_array ( $this->query ( $sql ) );
	}
	//取得记录总数 
	function selectCount($sql) {
		return count ( $this->select ( $sql ) );
	}
	//更新记录 
	function update($sql) {
		return odbc_num_rows ( $this->query ( $sql ) );
	}
	//数组更新记录 
	function updateArray($table, $field, $where) {
		$set = '';
		foreach ( $field as $k => $v ) {
			$set .= "`" . $k . "`='" . $v . "',";
		}
		$set = substr ( $set, 0, - 1 );
		$sql = "update `" . $table . "` set " . $set . " " . $where;
		return odbc_num_rows ( $this->query ( $sql ) );
	}
	
	//删除记录 
	function delete($sql) {
		return odbc_num_rows($this->query ( $sql ));
	}
}
?> 