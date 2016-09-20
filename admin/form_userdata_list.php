<?php
error_reporting(0);
header('Content-type: text/html; charset=utf-8');
include("conn.php");


$form_id=$_POST[form_id];
$host=$_POST[host];

if (preg_match('/gbpen\.cn$/', $host)||preg_match('/example\.com$/', $host)) {
	$sql = "SELECT * FROM form_data_test WHERE form_id = '".$form_id."'";
}else{
	$sql = "SELECT * FROM `form_data_". $form_id % 10 ."` WHERE form_id = '".$form_id."'";
}

$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
		$arr[]=array(
			'id'=>$row['id'],
			'form_id'=>$row['form_id'],
			'cus_id'=>$row['cus_id'],
			'data'=>$row['data'],
			'created_at'=>$row['created_at'],
			'updated_at'=>$row['updated_at']
		);

	}

		if ($arr) {
			echo  json_encode($arr);
		} else {
			echo  0;
		}

?>