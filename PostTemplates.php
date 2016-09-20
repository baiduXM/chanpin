<?php
require './Include/common.php';

if(!$_POST)
{
	exit();
}

$cus_id = trim($_POST['id']);
$string  = trim($_POST['string']);//变量
$type = trim($_POST['type']);//mobile	pc
$file_name = trim($_POST['file_name']);
$file_content = trim($_POST['file_content']);
$user_info = $DB->getone("select * from customer_info where cus_id=".$cus_id);
if(empty($user_info))
{
	//同步数据
	file_get_contents('http://swap.gbpen.com/GetUserInfo.php?cus_id='.$cus_id);
}

//接收模板
$file_name_array = explode('@',$file_name); 
$file_content_array = explode('@#@',$file_content);
foreach($file_name_array as $key => $value)
{
	$cus_dir = "smartys/templates/".$cus_id;
	if (!file_exists($cus_dir))
	{ 
		mkdir ($cus_dir);
	}
	$templates_dir = $cus_dir."/".$type;
	if (!file_exists($templates_dir))
	{
		mkdir ($templates_dir);
	}
	$templates_name = $templates_dir."/".$value;
	$fp = fopen($templates_name, "w");
	fwrite($fp, $file_content_array[$key]);
	fclose($fp);
}

//接收变量
$string_dir = "smartys/templates/".$cus_id."/".$type."/string.txt";
$fp = fopen($string_dir, "w");
fwrite($fp, $string);
fclose($fp);

file_get_contents('http://swap.gbpen.com/GetSeachInfo.php?cus_id='.$cus_id);