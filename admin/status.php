<?php
error_reporting(0);
include("conn.php");
header('Content-type: application/json');

if($_POST['cus_id']){
	$cus_id=intval($_POST['cus_id']);
	$id=intval($_POST['id']);
	if(isset($_POST['status'])){
		$status=intval($_POST['status']);
		$sql="update from `message` set status=$status where id=$id and cus_id = $cus_id";
		$result=mysql_query($sql);
		if($result){
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
}else{
	$result['err'] = 3;
	$result['msg'] = '错误的传递信息';
}
echo json_encode($result);









?>