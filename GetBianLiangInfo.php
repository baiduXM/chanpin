<?php
include './Include/common.php';
$cus_id = intval($_GET['cus_id']);
$dir = "bianliang/".$cus_id;
if (!file_exists($dir))
{ 
	mkdir ($dir);
}
$user_info = $DB->getone('select pc_domain,mobile_domain from customer_info where cus_id='.$cus_id);

$rs_pc_string = file_get_contents('http://f.no02.gbpen.cn/search-preview?id='.$cus_id.'&type=pc');


$pc_domain = str_replace("http://","",$user_info['pc_domain']);
$dir_pc = "bianliang/".$cus_id."/".$pc_domain.'.txt';
$fp = fopen($dir_pc, "w");
fwrite($fp, $rs_pc_string);
fclose($fp);

$rs_mobile_string = file_get_contents('http://f.no02.gbpen.cn/search-preview?id='.$cus_id.'&type=mobile');
$mobile_domain = str_replace("http://","",$user_info['mobile_domain']);
$dir_mobile = "bianliang/".$cus_id."/".$mobile_domain.'.txt';
$fp = fopen($dir_mobile, "w");
fwrite($fp, $rs_mobile_string);
fclose($fp);

echo '同步成功';

