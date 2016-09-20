<?php
include './Include/common.php';
$cus_id = intval($_GET['cus_id']);

$rs_str = file_get_contents('http://f.no02.gbpen.cn/seach-userinfo?action=getinfo&cus_id='.$cus_id);
$rs_arr =  json_decode($rs_str,true);
//$rs_arr =  daddslashes($rs_arr);


if(!empty($rs_arr))
{
	foreach($rs_arr as $kdy=>$vlaue)
	{
		$rs_arr[$kdy] = addslashes($vlaue);
	}

	$my_user_info = $DB->getone("select * from customer_info where id=".$rs_arr['id']);
	if(empty($my_user_info))
	{
		$is_ok = $DB->insertArray('customer_info',$rs_arr);
		if($is_ok)
		{
			echo 1;
		}else{
			echo 0;
		}
	}
	else
	{
		$is_ok = $DB->updateArray('customer_info',$rs_arr,array('id'=>intval($rs_arr['id'])));
		echo 1;
	}
}else{
	echo 0;
}

exit();
