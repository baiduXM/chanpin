<?php
require './Include/common.php';
echo 111;
return 2222;
exit;

$domain = get_domain();//提交过来的域名
$index_url = 'http://'.$domain;//首页地址
$back_url = $_SERVER["HTTP_REFERER"];//提交过来地址

//获取数据
$WebInfo = $DB->getone("select * from customer_info where pc_domain = '".$index_url."' or mobile_domain = '".$index_url."'");
if(empty($WebInfo))
{
	alertandgotopage('留言出错，返回首页！',$index_url);
}

$MessageInfo['user_name'] = trim($_POST['user_name']);
$MessageInfo['user_contact'] = trim($_POST['user_contact']);
$MessageInfo['message_content'] = trim($_POST['message_content']);
$MessageInfo['cus_id'] = $WebInfo['cus_id'];
$MessageInfo['add_time'] = date("Y-m-d H:i:s");
$MessageInfo['from_domain'] = $index_url;
$MessageInfo['from_ip'] = GetIP();

$IsOk = $DB->insertArray('message', $MessageInfo);

if($IsOk)
{
	alertandgotopage('留言成功，返回首页！',$index_url);
}
else
{
	alertandgotopage('留言失败，请重新提交!',$back_url);
}

