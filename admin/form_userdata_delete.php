<?php
/**
* 删除用户数据
* 参数可能是id，也可能是form_id
* flag=1:id，flag=2:form_id
*/
error_reporting(0);
header('Content-type: text/html; charset=utf-8');
include("conn.php");
$form_id=$_POST[form_id];
$id=$_POST[id];
$flag=$_POST[flag];
$host=$_POST[host];
if (preg_match('/gbpen\.cn$/', $host)||preg_match('/example\.com$/', $host)) {
	$sql = "SELECT * FROM form_data_test ` WHERE form_id = '".$form_id."'";
	if($flag==1){
		$sql = "DELETE FROM form_data_test WHERE id='".$id."'";
	}
	if($flag==2){
		$sql = "DELETE FROM form_data_test WHERE form_id='".$id."'";
	}
}else{
	if($flag==1){
		$sql = "DELETE FROM form_data_" . $form_id % 10 . " WHERE id='".$id."'";
	}
	if($flag==2){
		$sql = "DELETE FROM form_data_" . $form_id % 10 . " WHERE form_id='".$id."'";
	}
	
}

		if (mysql_query($sql)) {
			echo 1;
		} else {
			echo 0;
		}
?>