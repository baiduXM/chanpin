<?php
require './Include/common.php';

$err = '9';
$msg = '\'数据异常\'';
$new_cent = 0;

if(!$_GET)
{
	$err = '6';
	$msg = '\'非法操作！\'';
	get_return($callback,$err,$msg,$new_cent);
}

$id = trim($_GET['id']);
$url = trim($_GET['url']);
$callback  = trim($_GET['callback']);
$type = trim($_GET['type']);

if($url=='')
{
	$err = '4';
	$msg = '\'非法错误！\'';
	get_return($callback,$err,$msg,$new_cent);
}

$url_array = explode('/detail/',$url); 
$domain = $url_array[0];
$article_id = intval($url_array[1]);

if($domain=='' || $article_id==0)
{
	$err = '5';
	$msg = '\'地址错误！\'';
	get_return($callback,$err,$msg,$new_cent);
}

$article_info = $DB->getone("select * from article where cus_id = $id and article_id=".$article_id);

if($type!='mobile' and $type!='pc'){
	$err = '2';
	$msg = '\'错误的信息\'';
	get_return($callback,$err,$msg,$new_cent);
}

if(empty($article_info))
{
	$err = '0';
	$msg = '\'新建文章！\'';
	$MessageInfo['article_id'] = $article_id;
	if($type=='pc'){
		$MessageInfo['pc_cent'] = 1;
		$MessageInfo['phone_cent'] = 0;
		$MessageInfo['pc_domain'] = $domain;
	}else{
		$MessageInfo['pc_cent'] = 0;
		$MessageInfo['phone_cent'] = 1;
		$MessageInfo['mobile_domain'] = $domain;
	}
	$MessageInfo['cus_id'] = $id;
	$MessageInfo['insert_time'] = time();
	$MessageInfo['pubdate'] = date("Y-m-d H:i:s");
	$IsOk = $DB->insertArray('article', $MessageInfo);
	if(!$IsOk){
		$err = '1';
		$msg = '\'文章新建失败！\'';
	}
	$new_cent = 1;
	get_return($callback,$err,$msg,$new_cent);
}
else
{
	$err = '0';
	$msg = '\'获取成功！\'';
	if($type=='pc'){
		$pc_cent = $article_info['pc_cent'] + 1;
		$DB->updateArray('article',array('pc_cent'=>$pc_cent),array('article_id'=>$article_id));
	}else{
		$phone_cent = $article_info['phone_cent'] + 1;
		$DB->updateArray('article',array('phone_cent'=>$phone_cent),array('article_id'=>$article_id));
	}
	$new_cent = $article_info['pc_cent'] + $article_info['phone_cent'] + 1;
	get_return($callback,$err,$msg,$new_cent);
}


function get_return($callback='',$err='',$msg='',$new_cent='')
{
	if($callback=='')
	{
		$return_rs = '{"err":'.$err.',"msg":'.$msg.',"data":{"viewcount":'.$new_cent.'}}';
	}
	else
	{
		$return_rs = $callback.'({"err":'.$err.',"msg":'.$msg.',"data":{"viewcount":'.$new_cent.'}})';
	}
	echo $return_rs;
	exit();
}
