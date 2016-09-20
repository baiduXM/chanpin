<?php
function _cutstr2($string, $length, $dot = '', $htmlencode = true, $charset = 'utf-8') {
	if (strlen ( $string ) <= $length) {
		return $string;
	}
	if ($htmlencode)
	$string = str_replace ( array ('&amp;', '&quot;', '&lt;', '&gt;' ), array ('&', '"', '<', '>' ), $string );
	$strcut = '';
	if (strtolower ( $charset ) == 'utf-8') {
		$n = $tn = $noc = 0;
		while ( $n < strlen ( $string ) )
		{
			$t = ord ( $string [$n] );
			if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
				$tn = 1;
				$n ++;
				$noc ++;
			} elseif (194 <= $t && $t <= 223) {
				$tn = 2;
				$n += 2;
				$noc += 2;
			} elseif (224 <= $t && $t < 239) {
				$tn = 3;
				$n += 3;
				$noc += 2;
			} elseif (240 <= $t && $t <= 247) {
				$tn = 4;
				$n += 4;
				$noc += 2;
			} elseif (248 <= $t && $t <= 251) {
				$tn = 5;

				$n += 5;
				$noc += 2;
			} elseif ($t == 252 || $t == 253) {
				$tn = 6;
				$n += 6;
				$noc += 2;
			} else {
				$n ++;
			}
			if ($noc >= $length) {
				break;
			}
		}
		if ($noc > $length) {
			$n -= $tn;
		}
		$strcut = substr ( $string, 0, $n );
	} else {
		for($i = 0; $i < $length; $i ++) {
			$strcut .= ord ( $string [$i] ) > 127 ? $string [$i] . $string [++ $i] : $string [$i];
		}
	}
	if ($htmlencode)
	$strcut = str_replace ( array ('&', '"',

		'<', '>' ), array ('&amp;', '&quot;', '&lt;', '&gt;' ), $strcut );
	return $strcut . (strlen ( $string ) > strlen ( $strcut ) ? $dot : '');
}
//截取字符串个数
function _cutstr($string, $length, $dot = '...', $ClearHtml = true, $charset = 'utf-8') {
	if (mb_strlen ( $string ) <= $length) {
		return $string;
	}
	if ($ClearHtml) {
		$string = str_replace ( array ('&amp;', '&quot;', '&lt;', '&gt;', '&nbsp;' ), array ('&', '"', '<', '>', ' ' ), $string );
		$string = strip_tags ( $string );
	}
	$string = preg_replace ( '/([\s]{2,})/', '', $string );
	$strcut = mb_substr ( $string, 0, $length, $charset );
	return $strcut . (strlen ( $string ) > strlen ( $strcut ) ? $dot : '');
}
//获取IP地址
function GetIP() {
	if (getenv ( 'HTTP_CLIENT_IP' )) {
		$ip = getenv ( 'HTTP_CLIENT_IP' );
	} elseif (getenv ( 'HTTP_X_FORWARDED_FOR' )) { //获取客户端用代理服务器访问时的真实ip 地址
		$ip = getenv ( 'HTTP_X_FORWARDED_FOR' );
	} elseif (getenv ( 'HTTP_X_FORWARDED' )) {
		$ip = getenv ( 'HTTP_X_FORWARDED' );
	} elseif (getenv ( 'HTTP_FORWARDED_FOR' )) {
		$ip = getenv ( 'HTTP_FORWARDED_FOR' );
	} elseif (getenv ( 'HTTP_FORWARDED' )) {
		$ip = getenv ( 'HTTP_FORWARDED' );
	} else {
		$ip = $_SERVER ['REMOTE_ADDR'];
	}
	return $ip;
}
//建立新目录夹，已存在目录返回true
function n_mkdir($dir, $mode = 0777) {
	$u = umask ( 0 );
	if (n_file_exists ( $dir ))
	return true;
	$dir = n_path ( ROOTDIR . (substr ( $dir, 0, 1 ) == "/" ? "" : "/") . $dir );
	$r = @mkdir ( $dir, $mode );
	umask ( $u );
	return $r;
}
//创建新目录，允许多重目录. 例/abc/abc/abc.
function n_any_mkdir($dirs, $mode = 0777) {
	if (! strrpos ( $dirs, '/' )) {
		return (n_mkdir ( $dirs, $mode ));
	} else {
		$forder = explode ( '/', $dirs );
		$f = '';
		for($n = 0; $n < count ( $forder ); $n ++) {
			if ($forder [$n] == '')
			continue;
			$f .= ((($n == 0) && ($forder [$n] != '')) ? ('') : ('/')) . $forder [$n];
			if (n_file_exists ( $f )) {
				@chmod ( $f, 0777 );
				continue;
			} else {
				if (n_mkdir ( $f, $mode ))
				continue;
				else
				return false;
			}
		}
		return true;
	}
}
//删除文件
function n_file_unlink($resources) {
	if (! $resources)
	return false;
	$resources = n_path ( ROOTDIR . (substr ( $resources, 0, 1 ) == "/" ? "" : "/") . $resources );
	$ret = @unlink ( $resources );
	return $ret;
}
function _unlink($resources) {
	$resources = trim ( $resources );
	if (! $resources)
	return false;
	if (! is_file ( $resources ))
	return false;
	if (file_exists ( $resources )) {
		return @unlink ( $resources );
	} else
	return false;
}
// 上传文件函数
// 说明 成功返回空值, 并取得返回值, 失败返回错误代码.
function n_fileupload(&$data, $fieldname, $savepath = "/images/products/", $file_exps = array("gif","jpg","png")) {

	if ((! $_FILES [$fieldname] ["error"]) && ($_FILES [$fieldname] ["size"])) {
		if (is_chinese_filename ( $_FILES [$fieldname] ["name"] )) {
			@unlink ( $_FILES [$fieldname] ['tmp_name'] );
			return "error_file_name";
		}
		//echo "12";exit;
		if (! file_exp ( $_FILES [$fieldname] ["name"], $file_exps )) {
			@unlink ( $_FILES [$fieldname] ['tmp_name'] );
			return "error_file_exp";
		}
		$newfilename = strtolower ( substr ( str_replace ( " ", "", microtime () ), 2 ) . "-" . $_FILES [$fieldname] ["name"] );
		if (! n_file_exists ( $savepath )) {
			if (! n_any_mkdir ( $savepath ))
			return "error_forlder_create";
		}
		$savepath = strtolower ( $savepath . $newfilename );
		if (! n_move_uploaded_file ( $_FILES [$fieldname] ['tmp_name'], $savepath )) {
			@unlink ( $_FILES [$fieldname] ['tmp_name'] );
			return "error_save";
		}
		$data = array ("filename" => $_FILES [$fieldname] ["name"], "savepath" => $savepath );
		return "";
	} else
	return "notfileupload";
}
//判断文件名中是否带有中文. 有返回true
function is_chinese_filename($str) {
	$ischinese = false;
	for($i = 0; $i < strlen ( $str ); $i ++) {
		if (ord ( $str [$i] ) > 0xa1) {
			$ischinese = true;
			break;
		}
	}
	return $ischinese;
}

function IsRobot() {
	if (! defined ( 'IS_ROBOT' )) {
		$kw_spiders = 'Bot|Crawl|Spider|slurp|sohu-search|lycos|robozilla';
		$kw_browsers = 'MSIE|Netscape|Opera|Konqueror|Mozilla';
		if (preg_match ( "/($kw_browsers)/i", $_SERVER ['HTTP_USER_AGENT'] )) {
			define ( 'IS_ROBOT', FALSE );
		} elseif (preg_match ( "/($kw_spiders)/i", $_SERVER ['HTTP_USER_AGENT'] )) {
			define ( 'IS_ROBOT', TRUE );
		} else {
			define ( 'IS_ROBOT', FALSE );
		}
	}
	return IS_ROBOT;
}
function _getenv($var_name) {
	if (isset ( $_SERVER [$var_name] )) {
		return $_SERVER [$var_name];
	} elseif (isset ( $_ENV [$var_name] )) {
		return $_ENV [$var_name];
	} elseif (getenv ( $var_name )) {
		return getenv ( $var_name );
	} elseif (function_exists ( 'apache_getenv' ) && apache_getenv ( $var_name, true )) {
		return apache_getenv ( $var_name, true );
	}
	return '';
}

function getUsedMemory() {
	$memory_amount = memory_get_usage ();
	return number_format ( $memory_amount / 1024, 2 );
}
function getUsedTime() {
	global $thread_starttime;
	$mtime = explode ( ' ', microtime () );
	$thread_endtime = (( float ) $mtime [1] + ( float ) $mtime [0]);
	return number_format ( ($thread_endtime - $thread_starttime), 2 );
}
function nl_addslashes($string, $force = 0) {
	! defined ( 'MAGIC_QUOTES_GPC' ) && define ( 'MAGIC_QUOTES_GPC', get_magic_quotes_gpc () );
	if (! MAGIC_QUOTES_GPC || $force) {
		if (is_array ( $string )) {
			foreach ( $string as $key => $val ) {
				$string [$key] = nl_addslashes ( $val, $force );
			}
		} else {
			$string = addslashes ( $string );
		}
	}
	return $string;
}
function htmlencode($string, $clear_rn = false) {
	if (is_array ( $string )) {
		foreach ( $string as $key => $val ) {
			$string [$key] = htmlencode ( $val );
		}
	} else {
		if ($clear_rn) {
			$string = str_replace ( array ("\n", "\r" ), array ('', '' ), $string );
		}
		$string = preg_replace ( '/&amp;((#(\d{3,5}|x[a-fA-F0-9]{4})|[a-zA-Z][a-z0-9]{2,5});)/', '&\\1', str_replace ( array ('&', '"', '<', '>' ), array ('&amp;', '&quot;', '&lt;', '&gt;' ), $string ) );

	}
	return $string;
}
function nl_checkdate($ymd, $sep = '-') {
	if (! empty ( $ymd )) {
		list ( $year, $month, $day ) = explode ( $sep, $ymd );
		return checkdate ( $month, $day, $year );
	} else {
		return FALSE;
	}
}
function nl_cutstr($string, $length, $dot = ' ...', $htmlencode = true, $charset = 'utf-8') {
	if (strlen ( $string ) <= $length) {
		return $string;
	}
	if ($htmlencode)
	$string = str_replace ( array ('&amp;', '&quot;', '&lt;', '&gt;' ), array ('&', '"', '<', '>' ), $string );
	$strcut = '';
	if (strtolower ( $charset ) == 'utf-8') {
		$n = $tn = $noc = 0;
		while ( $n < strlen ( $string ) ) {
			$t = ord ( $string [$n] );
			if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
				$tn = 1;
				$n ++;
				$noc ++;
			} elseif (194 <= $t && $t <= 223) {
				$tn = 2;
				$n += 2;
				$noc += 2;
			} elseif (224 <= $t && $t < 239) {
				$tn = 3;
				$n += 3;
				$noc += 2;
			} elseif (240 <= $t && $t <= 247) {
				$tn = 4;
				$n += 4;
				$noc += 2;
			} elseif (248 <= $t && $t <= 251) {
				$tn = 5;
				$n += 5;
				$noc += 2;
			} elseif ($t == 252 || $t == 253) {
				$tn = 6;
				$n += 6;
				$noc += 2;
			} else {
				$n ++;
			}
			if ($noc >= $length) {
				break;
			}
		}
		if ($noc > $length) {
			$n -= $tn;
		}
		$strcut = substr ( $string, 0, $n );
	} else {
		for($i = 0; $i < $length; $i ++) {
			$strcut .= ord ( $string [$i] ) > 127 ? $string [$i] . $string [++ $i] : $string [$i];
		}
	}
	if ($htmlencode)
	$strcut = str_replace ( array ('&', '"', '<', '>' ), array ('&amp;', '&quot;', '&lt;', '&gt;' ), $strcut );
	return $strcut . $dot;
}

function Unicode10Char($ord) {
	if ($ord < 0x7F) { // 0000-007F
		$c .= chr ( $ord );
	} elseif ($ord < 0x800) { // 0080-0800
		$c .= chr ( 0xC0 | ($ord / 64) );
		$c .= chr ( 0x80 | ($ord % 64) );
	} else { // 0800-FFFF
		$c .= chr ( 0xE0 | (($ord / 64) / 64) );
		$c .= chr ( 0x80 | (($ord / 64) % 64) );
		$c .= chr ( 0x80 | ($ord % 64) );
	}
	return $c;
}
function Unicode($string, $html_ntity_decode = false) {
	if (is_array ( $string )) {
		foreach ( $string as $key => $value ) {
			$string [$key] = Unicode ( $value );
		}
		return $string;
	} else {
		if (! $html_ntity_decode)
		return preg_replace ( "/(\&\#)(\d+)(;)/ies", "Unicode10Char(\\2)", $string );
		else
		return htmlspecialchars_decode ( preg_replace ( "/(\&\#)(\d+)(;)/ies", "Unicode10Char(\\2)", $string ) );
	}
}
//+++++JS助手+++++++++++
//调用js助手直接打印一个提示信息
function alert($message) {
	echo ("<script language='javascript';charset='utf8'>alert('" . $message . "')</script>");
	echo ("die ()");
}

//调用js助手打印提示信息并返回上一步
function alertandback($message) {
	echo ("<script language='javascript';charset='utf8'>alert('" . $message . "');history.back();</script>");
	exit();
}

//调用js助手打印提示信息并转向新的网页地址
function alertandgotopage($message, $url) {
	echo ("<script language='javascript';charset='utf8'>alert('" . $message . "');window.location.replace('" . $url . "');</script>");
	exit();
}
//跳转助手
function tourl($tourl) {
	echo "<script language=javascript>";
	echo "window.location='" . $tourl . "';";
	echo "</script>";
	echo "die()";
}

//以下为正则表达时函数匹配
//匹配电子邮件
function isemail($email) {
	return strlen ( $email ) > 8 && preg_match ( "/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+([a-z]{2,4})|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email );
}
function _isemail($email) {
	return strlen ( $email ) > 6 && preg_match ( "/^[\w\-\.]+@[\w\-]+(\.\w+)+$/", $email );
}
//匹配域名/网址
function isurl($url) {
	return preg_match ( "/(www.|https?:\/\/|ftp:\/\/|gopher:\/\/|news:\/\/|telnet:\/\/|rtsp:\/\/|mms:\/\/){1}([^\[\"']+?)/ie", $url );
}
//匹配数字和下划线
function isdigital($email) {
	return preg_match ( "/^[0-9\-]+$/", $email );
}
//匹配数字
function _isdigital($str) {
	return preg_match ( "/^[0-9]+$/", $str );
}
function uppic($str) {

	/******************************************************************************
	 图片上传函数：

	 使用方法
	 $str是文件域名

	 参数说明:
	 $max_file_size  : 上传文件大小限制, 单位BYTE
	 $destination_folder : 上传文件路径
	 $watermark   : 是否附加水印(1为加水印,其他为不加水印);

	 使用说明:
	 1. 将PHP.INI文件里面的"extension=php_gd2.dll"一行前面的;号去掉,因为我们要用到GD库;
	 2. 将extension_dir =改为你的php_gd2.dll所在目录;
	 ******************************************************************************/

	if (empty ( $str )) {
		return false;
	}
	$uptypes = array ('image/jpg', 'image/jpeg', 'image/png', 'image/pjpeg', 'image/gif' );//上传文件类型列表
	$max_file_size = 2000000; //上传文件大小限制, 单位BYTE
	$destination_folder = SYSTEM_ROOTPATH."/products/"; //上传文件路径
	$watermark = 0; //是否附加水印(1为加水印,其他为不加水印);
	$watertype = 0; //水印类型(1为文字,2为图片)
	$waterposition = 1; //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
	$waterstring = "http://www.chinapp.cn/"; //水印字符串
	$waterimg = "chinapp.gif"; //水印图片
	$imgpreview = 0; //是否生成预览图(1为生成,其他为不生成);
	$imgpreviewsize = 1; //缩略图比例
	//是否存在文件
	if (! is_uploaded_file ( $_FILES [$str] [tmp_name] )) {
		return false;
		//echo "图片不存在!";
		exit ();
	}
	$file = $_FILES [$str];
	if ($max_file_size < $file ["size"]) { //检查文件大小
		return false;
		//echo "文件太大!";
		exit ();
	}

	if (! in_array ( $file ['type'], $uptypes )) { //检查文件类型
		return false;
		//echo "<font color='#FF0000'>不支持的文件类型!</font>";
		exit ();
	}
	if (! file_exists ( $destination_folder )) { //检查创建的上传的目录是否存在，不存在就新建
		mkdir ( $destination_folder );
	}

	$filename = $file ["tmp_name"];
	$image_size = getimagesize ( $filename );
	$pinfo = pathinfo ( $file ["name"] );
	$ftype = $pinfo ['extension'];
	$rand=rand(1000,9999);
	$destination = $destination_folder . time () .$rand. "." . $ftype;
	if (file_exists ( $destination ) && $overwrite != true) {
		return false;
		//echo "<font color='#FF0000'>同名文件已经存在了!</font>";
		exit ();
	}
	if (! move_uploaded_file ( $filename, $destination )) {
		return false;
		//echo "<font color='#FF0000'>移动文件出错!</font>";
		exit ();
	}
	$pinfo = pathinfo ( $destination );
	$fname = $pinfo [basename];

	if ($watermark == 1) {
		$iinfo = getimagesize ( $destination, $iinfo );
		$nimage = imagecreatetruecolor ( $image_size [0], $image_size [1] );
		$white = imagecolorallocate ( $nimage, 255, 255, 255 );
		$black = imagecolorallocate ( $nimage, 0, 0, 0 );
		$red = imagecolorallocate ( $nimage, 255, 0, 0 );
		imagefill ( $nimage, 0, 0, $white );
		switch ($iinfo [2]) {
			case 1 :
				$simage = imagecreatefromgif ( $destination );
				break;
			case 2 :
				$simage = imagecreatefromjpeg ( $destination );
				break;
			case 3 :
				$simage = imagecreatefrompng ( $destination );
				break;
			case 6 :
				$simage = imagecreatefromwbmp ( $destination );
				break;
			default :
				return false;
				//die ( "<font color='#FF0000'>不支持的文件类型!</font>" );
				exit ();
		}
		imagecopy ( $nimage, $simage, 0, 0, 0, 0, $image_size [0], $image_size [1] );
		imagefilledrectangle ( $nimage, 1, $image_size [1] - 15, 80, $image_size [1], $white );
		switch ($watertype) {
			case 1 : //加水印字符串
				imagestring ( $nimage, 2, 3, $image_size [1] - 15, $waterstring, $black );
				break;
			case 2 : //加水印图片
				$simage1 = imagecreatefromgif ( "xplore.gif" );
				imagecopy ( $nimage, $simage1, 0, 0, 0, 0, 85, 15 );
				imagedestroy ( $simage1 );
				break;
		}
		switch ($iinfo [2]) {
			case 1 :
				//imagegif($nimage, $destination);
				imagejpeg ( $nimage, $destination );
				break;
			case 2 :
				imagejpeg ( $nimage, $destination );
				break;
			case 3 :
				imagepng ( $nimage, $destination );
				break;
			case 6 :
				imagewbmp ( $nimage, $destination );
				//imagejpeg($nimage, $destination);
				break;
		}
		//覆盖原上传文件
		imagedestroy ( $nimage );
		imagedestroy ( $simage );
	}

	return $fname;
}
function MultiPage(&$multipages, $n = 10) {
	if ($multipages ['Page'] - 3 > 0)
	$multipages ['FirstPage'] = 1;
	if ($multipages ['Page'] - 1 > 0)
	$multipages ['BackPage'] = $multipages ['Page'] - 1;
	if ($multipages ['Page'] < $multipages ['PageCount'])
	$multipages ['NextPage'] = ($multipages ['Page'] + 1);
	if ($multipages ['Page'] + $n < $multipages ['PageCount'])
	$multipages ['LastPage'] = $multipages ['PageCount'];
	$n = $n - 1;
	$min = ($multipages ['Page'] - 3) > 0 ? $multipages ['Page'] - 3 : 1;
	$max = ($min + $n) < $multipages ['PageCount'] ? ($min + $n) : $multipages ['PageCount'];
	for($i = $min; $i <= $max; $i ++) {
		$multipages ['PageNums'] [$i] = $i;
	}
}





function ChineseToPinyinTwo($string){
	global $__pinyins__;
	$restring = '';
	$str = trim($string);
	$slen = strlen($string);
	if ($slen < 2)
	return $str;
	if (! $__pinyins__) {
		$fp = file(SYSTEM_ROOTPATH . '/include/pinyin.dat');
		foreach ($fp as $line) {
			$tmp = explode('`', $line);
			$__pinyins__[$tmp[0]] = str_replace(array(
				"\r", 
				"\n"
				), array(
				'', 
				''
				), $tmp[1]);
		}
		unset($fp);
	}
	$n = 0;
	while ($n < $slen) {
		$start = $n;
		$t = ord($string[$n]);
		if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
			$tn = 1;
		} elseif (194 <= $t && $t <= 223) {
			$tn = 2;
		} elseif (224 <= $t && $t < 239) {
			$tn = 3;
		} elseif (240 <= $t && $t <= 247) {
			$tn = 4;
		} elseif (248 <= $t && $t <= 251) {
			$tn = 5;
		} elseif ($t == 252 || $t == 253) {
			$tn = 6;
		} else {
			$tn = 1;
		}

		if ($tn > 1) {
			$substring = substr($string, $start, $tn);
			$zhongwenarray[]=$substring;
			if ($__pinyins__[$substring])
			$restring .= $__pinyins__[$substring];
			else
			$restring .= '';
			$yingwenarray[]=$__pinyins__[$substring];
		} else
		$restring .= '';
		$n += $tn;
	}
	foreach ($zhongwenarray as $k=>$v)
	{
		$string= str_replace ( $v, $yingwenarray[$k], $string );
	}
	return $string;
}
function GetTopZiMu($String='')
{
	$PinYin = ChineseToPinyinTwo($String);
	$TopZiMu = substr($PinYin, 0, 1);
	$TopZiMu = strtoupper($TopZiMu);
	return $TopZiMu;
}

function GetReturnInfo($ReturnShouJiCX = '')
{
	$ReturnShouJiCXArray = explode('&', $ReturnShouJiCX);
	$ReturnShouJiCXInfo = array();
	foreach ($ReturnShouJiCXArray As $Key=>$Value)
	{
		$ValueSTring = explode('=', $Value);
		$ReturnShouJiCXInfo[$ValueSTring[0]] = $ValueSTring[1];
	}
	unset($ReturnShouJiCXArray);
	return $ReturnShouJiCXInfo;
}


function TwoDian($string='')
{
	return round($string,2);
}



function get_domain()
{
	//$url = $_SERVER["HTTP_REFERER"];
	$url = $_SERVER["HTTP_HOST"];
	$str = str_replace("http://","",$url);
	$strdomain = explode("/",$str);
	return $strdomain[0]; 
}