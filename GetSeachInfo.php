<?php
include './Include/common.php';
$cus_id = intval($_GET['cus_id']);
$pc_domain = trim($_GET['pc_domain']);
$mobile_domain = trim($_GET['mobile_domain']);

$rs_str = file_get_contents('http://f.no02.gbpen.cn/seach-seachinfo?action=getinfo&cus_id='.$cus_id);
$rs_arr =  json_decode($rs_str,true);
if(!empty($rs_arr))
{
	$DB->delete('delete from article where cus_id='.$cus_id);
	foreach ($rs_arr as $value)
	{
		$InsertArray['cus_id']  = $cus_id;
		$InsertArray['article_id']  = $value['id'];
		$InsertArray['title']  = $value['title'];
		$InsertArray['keywords']  = $value['keywords'];
		$InsertArray['img']  = $value['img'];
		$InsertArray['pc_show']  = $value['pc_show'];
		$InsertArray['mobile_show']  = $value['mobile_show'];
		$InsertArray['pc_domain']  = $pc_domain;
		$InsertArray['mobile_domain']  = $mobile_domain;
		$InsertArray['insert_time']  = time();
		$InsertArray['pubdate']  = date("Y-m-d H:i:s");
		$is_ok = $DB->insertArray('article',$InsertArray);
	}
}
if($is_ok)
{	
	echo 1;
}
else
{
	echo 0;
}