<?php
require './Include/common.php';
require './libs/Smarty.class.php';
require './libs/Smarty.Set.php';

$KeyWord = trim($_POST['chaxun']);
$url = $_SERVER["HTTP_REFERER"];
$str = str_replace("http://","",$url);
$strdomain = explode("/",$str);
$domain = $strdomain[0]; 

$title = '搜索"'.$KeyWord.'"结果';
$smarty->assign('title',$title);
$smarty->assign('keywords',$title);
$smarty->assign('description',$title);
$smarty->assign('favicon','favicon');
$smarty->assign('site_url','http://' . $SCRIPT_HOST . '/');



$SeachList = $DB->select("select * from article where pc_domain = '".$domain."' and `title` like '%".$KeyWord."%'");
//print_r($SeachList);exit;
$list['data'] = $SeachList;
$smarty->assign('list',$list);

$navs = $SeachList;
if(!empty($SeachList))
{
	foreach($SeachList as $key=>$value)
	{
		$navs[$key]['childmenu'] = $SeachList;
		$navs[$key]['lastest'] = $SeachList;
	}
}
$smarty->assign('navs',$navs);


$smarty->display('searchresult.html');
