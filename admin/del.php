<?php
error_reporting(0);
include("conn.php");
header('Content-type: application/json');
if($_POST['cus_id']){
	$cus_id=$_POST['cus_id'];
	$id=$_POST['id'];
	$query="DELETE from message where id = $id and cus_id = $cus_id";
	if(mysql_query($query)){
		$result['err'] = 0;
		$result['msg'] = '';
	}else{
		$result['err'] = 1;
		$result['msg'] = '数据库失败或不存在此值';
	}
}else{
	$result['err'] = 2;
	$result['msg'] = '错误的传递信息';
 }
echo json_encode($result);
?>
