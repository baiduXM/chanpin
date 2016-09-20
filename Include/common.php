<?php
set_time_limit(7);
error_reporting(7);//0禁用错误报告	E_ALL报告所有错误
define ( 'SYSTEM_ROOTPATH', $_SERVER['DOCUMENT_ROOT'] ); //定义根目录
//set_magic_quotes_runtime(true);//入库自动加上一个反斜杆	1和true表示关闭本功能	0和false表示关闭本功能	PHP6.0之后移除
header ( 'Content-Type: text/html; charset=utf-8' );
if (PHP_VERSION > '5.1') {
	date_default_timezone_set ( 'Asia/Shanghai' );
}
//MYSQL初始化数据库连接类
include SYSTEM_ROOTPATH . '/Include/class.databasedriver_mysql.php'; //数据库类
include SYSTEM_ROOTPATH . '/Include/config.php'; //数据库连接
include SYSTEM_ROOTPATH . '/Include/global.functions.php'; //数据库连接
$DB = new DatabaseDriver_MySql ( $database_cfg );

//域名后面的地址
$SCRIPT_URL = $_SERVER ['REQUEST_URI'] ? $_SERVER ['REQUEST_URI'] : $_SERVER ['SCRIPT_NAME'] . ($_SERVER ['QUERY_STRING'] ? "?" . $_SERVER ['QUERY_STRING'] : '');
//域名（主机名）
$SCRIPT_HOST = $_SERVER ["HTTP_HOST"];
//页面地址
$REQUEST_URI = 'http://' . $SCRIPT_HOST . ($_SERVER ["SERVER_PORT"] == 80 ? '' : $_SERVER ["SERVER_PORT"]) . (isset ( $_SERVER ['REQUEST_URI'] ) ? $_SERVER ['REQUEST_URI'] : $_SERVER ['PHP_SELF'] . '?' . $_SERVER ['QUERY_STRING']);
