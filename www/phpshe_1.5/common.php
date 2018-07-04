<?php
/**
 * @copyright   2008-2015 简好网络 <http://www.phpshe.com>
 * @creatdate   2011-0501 koyshe <koyshe@gmail.com>
 */
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('PRC');
header('Content-Type: text/html; charset=utf-8');

//#################=====关闭register_globals=====#################//
if (@ini_get('register_globals')) {
	foreach ($_REQUEST as $name => $value) unset($$name);
}

//#################=====包含常用类-函数文件=====#################//
include(dirname(__FILE__).'/config.php');
include(dirname(__FILE__).'/hook/ini.hook.php');
include(dirname(__FILE__).'/include/class/db.class.php');
//include($pe['path_root'].'include/class/page.class.php');
include(dirname(__FILE__).'/include/class/cache.class.php');
include(dirname(__FILE__).'/include/function/global.func.php');
include(dirname(__FILE__).'/include/function/license.func.php');

//#################=====URL路由配置=====#################//
pe_urlroute();
$mobile_result = pe_mobile();
if ($mobile_result && in_array($module, array('index', 'user'))) {
	$module = $module == 'user' ? 'mobile_user' : 'mobile_index';
	include(dirname(__FILE__).'/include/class/page_m.class.php');
}
else {
	include(dirname(__FILE__).'/include/class/page.class.php');
}

//#################=====定义根路径=====#################//
$pe['host_root'] = pe_root('host', __FILE__);
$pe['path_root'] = pe_root('path', __FILE__);;

//#################=====定义模板路径=====#################//
$cache_setting = cache::get('setting');
$module_tpl = is_dir("{$pe['path_root']}template/{$cache_setting['web_tpl']}/{$module}/") ? $cache_setting['web_tpl'] : 'default';
$pe['host_tpl'] = "{$pe['host_root']}template/{$module_tpl}/{$module}/";
$pe['path_tpl'] = "{$pe['path_root']}template/{$module_tpl}/{$module}/";

//#################=====重新定义GPC=====#################//
if (get_magic_quotes_gpc()) {
	!empty($_GET) && extract(pe_trim(pe_stripslashes($_GET)), EXTR_PREFIX_ALL, '_g');
	!empty($_POST) && extract(pe_trim(pe_stripslashes($_POST)), EXTR_PREFIX_ALL, '_p');
}
else {
	!empty($_GET) && extract(pe_trim($_GET),EXTR_PREFIX_ALL,'_g');
	!empty($_POST) && extract(pe_trim($_POST),EXTR_PREFIX_ALL,'_p');
}
session_start();
!empty($_SESSION) && extract(pe_trim($_SESSION),EXTR_PREFIX_ALL,'_s');
!empty($_COOKIE) && extract(pe_trim(pe_stripslashes($_COOKIE)),EXTR_PREFIX_ALL,'_c');
$pe_token = $_s_pe_token;

//#################=====连接数据库开始吧=====#################//
if (stripos($_SERVER['SCRIPT_FILENAME'], 'install/index.php') === false) {
	$db = new db($pe['db_host'], $pe['db_user'], $pe['db_pw'], $pe['db_name'], $pe['db_coding']);
}
?>