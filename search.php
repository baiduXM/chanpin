<?php
require './Include/common.php';
require './libs/Smarty.class.php';
require './libs/Smarty.Set.php';

$KeyWord = trim($_GET['s']);
echo $_SERVER['PHP_SELF'];
echo $_GET['type'];
echo '<br >'.$KeyWord;
exit();
if($KeyWord=='')
{
	alertandback('搜索关键词不能为空，请输入关键词重新输入！');
	exit();
}
$domain = trim($_GET['domain']);
if($domain=='')
$domain = get_domain();
if(preg_match('/(.*)\.s.5067.org/', $domain)){
	preg_match('/(.*)\.s.5067.org/', $domain,$return);
	$domain = $return[1];
}elseif(preg_match('/wwvv\.(.*)\.com/', $domain)){
	preg_match('/wwvv\.(.*)\.com/', $domain,$return);
	$domain = $return[1];
}else{
	alertandback('错误的参数信息！');
	exit();
}
//包含变量

$url = 'http://'.$domain;

$WebInfo = $DB->getone("select * from customer_info where pc_domain = '".$url."' or mobile_domain = '".$url."'");
if(empty($WebInfo))
{
	alertandback('参数错误，请重试！');
	exit();
}
if($WebInfo['pc_domain'] == $url)
{
	$tpl_name = './smartys/templates/'.$WebInfo['cus_id'].'/pc/searchresult.html';
	$dir = './smartys/templates/'.$WebInfo['cus_id'].'/pc/string.txt';
	$type = 'pc_show';
}
else
{
	$tpl_name = './smartys/templates/'.$WebInfo['cus_id'].'/mobile/searchresult.html';
	$dir = './smartys/templates/'.$WebInfo['cus_id'].'/mobile/string.txt';
	$type = 'mobile_show';
}

$string = file_get_contents($dir);
$bianliang_array = json_decode($string,true);

if(empty($bianliang_array))
{
	echo '出错了，请联系管理员! <a href="'.$url.'">返回首页</a>';
	exit();
}
foreach($bianliang_array as $k=>$v)
{
	$smarty->assign($k,$v);
}

$smarty->assign('title','搜索"'.$KeyWord.'"结果');
$page = intval ( $_GET ['page'] ) ? intval ( $_GET ['page'] ) : 1;
if (1) 
	{
		$pagesize = 2;
		$rs = $DB->getone ( "select count(id) as rscount from article where ".$type."=1 and cus_id='".$WebInfo['cus_id']."' and (`title` like '%".$KeyWord."%' or `keywords` like '%".$KeyWord."%')" );
		$recordcount = $rs ['rscount'];
		unset ( $rs );
		if ($recordcount) 
		{
			$from = ($page - 1) * $pagesize;
			$sql = "select * from article where ".$type."=1 and cus_id='".$WebInfo['cus_id']."' and (`title` like '%".$KeyWord."%' or `keywords` like '%".$KeyWord."%') order by id desc limit {$from},{$pagesize}";
			$rs_array = $DB->select ( $sql );
			
		}
	}

$search = array();
if(!empty($rs_array))
{
	foreach($rs_array as $key=>$value)
	{
		$search['data'][$key]['link'] = $url.'/detail/'.$value['article_id'].'.html';
		$search['data'][$key]['title'] = $value['title'];
		$search['data'][$key]['pubdate'] = date("Y-m-d",strtotime($value['pubdate']));
	}
}
$search['keyword'] = $KeyWord;
$search['total'] = $recordcount;
$smarty->assign('search',$search);


$page_links['current_page'] = $page;//当前页
$page_links['page_count'] = ceil ( $recordcount / $pagesize );//总页数
$page_links['first_link'] = 'search.html?domain='.$domain.'&s='.$KeyWord;//首页
$page_links['last_link'] = 'search.html?domain='.$domain.'&s='.$KeyWord.'&page='.$page_links['page_count'];//尾页
//当前页
$page_links['current_page'] = $page;
//上一页
if($page==1)
$prev_link = 1;
else
$prev_link = $page-1;
$page_links['prev_link'] = 'search.html?domain='.$domain.'&s='.$KeyWord.'&page='.$prev_link;
//下一页
if($page==$page_links['page_count'])
$next_link = $page_links['page_count'];
else
$next_link = $page+1;
$page_links['next_link'] = 'search.html?domain='.$domain.'&s='.$KeyWord.'&page='.$next_link;
//循环页
for($i=1;$i<=$page_links['page_count'];$i++)
{
	$nears_link_array[$i] = 'search.html?domain='.$domain.'&s='.$KeyWord.'&page='.$i;
}

$page_links['nears_link'] = $nears_link_array;

$smarty->assign('page_links',$page_links);

//print_r($search);exit;
$smarty->display($tpl_name);


