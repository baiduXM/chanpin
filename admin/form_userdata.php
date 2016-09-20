<?php
/**
* 查找用户数据
*/
error_reporting(0);
header('Content-type: text/html; charset=utf-8');
include("conn.php");
$form_id=$_POST[form_id];
$id=$_POST[id];
$host=$_POST[host];
if (preg_match('/gbpen\.cn$/', $host)||preg_match('/example\.com$/', $host)) {
	$sql = "SELECT * FROM `form_data_test` WHERE id='".$id."'";
}else{
	$sql = "SELECT * FROM `form_data_". $form_id % 10 ."` WHERE id='".$id."'";
}

$result=mysql_query($sql);
$row=mysql_fetch_array($result);
		$arr=array(
			'id'=>$row['id'],
			'form_id'=>$row['form_id'],
			'cus_id'=>$row['cus_id'],
			'data'=>unserialize($row['data']),
			'created_at'=>$row['created_at'],
			'updated_at'=>$row['updated_at']
		);
		if ($arr) {
			echo  json_encode($arr['data']);

		} else {
			echo  0;
		}


?>