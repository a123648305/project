<?php
if(!defined('sucms_ADMIN'))
{
	exit("Request Error!");
}
$defaultIcoFile = sucms_ROOT.'/data/admin/quickmenu.txt';
$myIcoFile = sucms_ROOT.'/data/admin/quickmenu-'.$cuserLogin->getUserID().'.txt';
if(!file_exists($myIcoFile)) {
	$myIcoFile = $defaultIcoFile;
}
$add = array();
$fp = fopen($myIcoFile,'r');
$dtp = trim(fread($fp,filesize($myIcoFile)+1));
fclose($fp);
$dtp=str_replace(chr(13).chr(10),"#",$dtp);
$menu_temp=explode("#", $dtp);
foreach ($menu_temp as $i=>$value) {
	if($value<>""){
	$qmenu=explode(",", $value);
	$add[$i]="<a href=". $qmenu[1]. " target=I2>".$qmenu[0]."</a>";
	}else
	{
	$add[$i]="";
	}
}


$menu=array (
	'common'=>array(
		'link'=>"index_body.php",
		0=>"首页",
		1=>"<a target='I2' href='index_body.php'>管理首页</a>",
		2=>"<a target='I2' href='api.php'>影片资源库</a>",
		3=>"<a target='I2' href='admin_menu.php'>自定义菜单</a>",		
		4=>"",
	),
	'video'=>array (
		'link'=>"admin_video.php?action=else",
		0=>"影片",
		1=>"<a target='I2' href='admin_video.php?action=else'>影片管理</a>",
		2=>"",
		3=>"<a target='I2' href='admin_type.php'>分类管理</a>",
		4=>"<a target='I2' href='admin_jqtype.php'>剧情分类</a>",
		5=>"<a target='I2' href='admin_video.php?action=add'>添加影片</a>",
		6=>"<a target='I2' href='admin_video.php?v_state=ok'>连载影片</a>",
		7=>"<a target='I2' href='admin_video.php?v_commend=ok'>推荐影片</a>",
		8=>"<a target='I2' href='admin_video.php?v_recycled=ok'>回收站</a>",
		9=>"<a target='I2' href='admin_topic.php'>专题管理</a>",
		10=>"<a target='I2' href='admin_comment.php?action=reporterror'>影片报错</a>",
		11=>"<a target='I2' href='admin_tempvideo.php'>临时表管理</a>",
		12=>"<a target='I2' href='admin_pseudo.php'>伪原创设置</a>",
		
		),
	'news'=>array (
		'link'=>"admin_type_news.php",
		0=>"资讯",
		1=>"<a target='I2' href='admin_type_news.php'>资讯分类</a>",
		2=>"<a target='I2' href='admin_news.php'>资讯管理</a>",
		3=>"<a target='I2' href='admin_news.php?action=add'>添加资讯</a>",
		4=>"<a target='I2' href='admin_news.php?n_recycled=ok'>回收站</a>",
		
	),
	'template'=>array (
		'link'=>"admin_template.php?action=main",
		0=>"模板",
		1=>"<a target='I2' href='admin_template.php?action=main'>模板管理</a>",
		2=>"<a target='I2' href='admin_template.php?action=custom'>管理自定义模版</a>",
		3=>"",
		4=>"<a target='I2' href='admin_selflabel.php'>自定义标签</a>",
		5=>"",
		6=>"<a target='I2' href='admin_labelguide.php'>标签向导</a>",
	),
	'tool'=>array (
		'link'=>"admin_makehtml.php?action=main",
		0=>"工具",
		1=>"<a target='I2' href='admin_makehtml.php?action=main'>生成选项</a>",
		2=>"<a target='I2' href='admin_makehtml.php?action=baidu'>生成百度地图</a>",
		3=>"<a target='I2' href='admin_makehtml.php?action=google'>生成谷歌地图</a>",
		4=>"<a target='I2' href='admin_makehtml.php?action=rss'>生成RSS</a>",
		5=>"<a target='I2' href='admin_makehtml.php?action=baidux'>百度结构化影片</a>",
		6=>"",
		7=>"<a target='I2' href='admin_datarelate.php?action=checkpic'>图片管理</a>",
		8=>"<a target='I2' href='admin_datarelate.php?action=fileperms'>文件权限检查</a>",
		9=>"<a target='I2' href='admin_cron.php'>计划任务</a>",
		10=>"",
		11=>"<a target='I2' href='admin_database.php'>数据库备份</a>",
		12=>"<a target='I2' href='admin_database.php?action=import'>数据库还原</a>",
		13=>"<a target='I2' href='admin_database.php?action=optimize'>数据库优化</a>",
		14=>"<a target='I2' href='admin_datarelate.php?action=sql'>SQL管理秘书</a>",
		15=>"",
		16=>"<a target='I2' href='admin_datarelate.php?action=repeat'>影片影片检测</a>",
		17=>"<a target='I2' href='admin_datarelate.php?action=batch'>影片批量替换</a>",
		18=>"<a target='I2' href='admin_datarelate.php?action=delvideoform'>删除指定来源</a>",
		19=>"<a target='I2' href='admin_datarelate.php?action=repairplaydata'>修复影片格式</a>",
		20=>"<a target='I2' href='admin_datarelate.php?action=randomset'>批量设置点击量</a>",
	),
	'gathersoft'=>array (
		'link'=>"admin_collect.php?action=main",
		0=>"采集",
		1=>"<a target='I2' href='admin_collect.php?action=main'>影片项目列表</a>",
		2=>"<a target='I2' href='admin_collect.php?action=add'>添加影片项目</a>",
		3=>"<a target='I2' href='admin_collect.php?action=customercls'>影片分类转换</a>",
		4=>"<a target='I2' href='admin_collect.php?action=filters'>影片信息过滤</a>",
		5=>"<a target='I2' href='admin_collect.php?action=tempdatabase'>影片采集影片库</a>",
		6=>"<a target='I2' href='admin_collect.php?action=importrule'>导入采集规则</a>",
		7=>"",
		8=>"<a target='I2' href='admin_collect_news.php?action=main'>资讯项目列表</a>",
		9=>"<a target='I2' href='admin_collect_news.php?action=add'>添加资讯项目</a>",
		10=>"<a target='I2' href='admin_collect_news.php?action=customercls'>资讯分类转换</a>",
		11=>"<a target='I2' href='admin_collect_news.php?action=filters'>资讯信息过滤</a>",
		12=>"<a target='I2' href='admin_collect_news.php?action=tempdatabase'>资讯采集数据库</a>",
		13=>"<a target='I2' href='admin_collect_news.php?action=importrule'>导入资讯采集规则</a>",
				
	),
	'webhelper'=>array (
		'link'=>"admin_comment.php?action=gbook",
		0=>"插件",
		1=>"<a target='I2' href='admin_comment.php?action=gbook'>留言管理</a>",
		2=>"<a target='I2' href='admin_comment.php'>影片评论管理</a>",
		3=>"<a target='I2' href='admin_comment_news.php'>新闻评论管理</a>",
		4=>"<a target='I2' href='admin_expand.php'>幻灯片管理</a>",
		5=>"",
		6=>"<a target='I2' href='admin_members.php'>用户管理</a>",
		7=>"<a target='I2' href='admin_members_group.php'>用户组管理</a>",
		8=>"<a target='I2' href='admin_config_ucenter.php'>Ucenter设置</a>",
		9=>"",
		10=>"<a target='I2' href='admin_ads.php?action=main'>广告管理</a>",
		11=>"<a target='I2' href='admin_ads.php?action=add'>添加广告</a>",
		12=>"",
		13=>"<a target='I2' href='admin_link.php'>友情链接</a>",
	),
	'system'=>array (
		'link'=>"admin_config.php",
		0=>"全局",
		1=>"<a target='I2' href='admin_config.php'>网站设置</a>",
		2=>"",
		3=>"<a target='I2' href='admin_config_mark.php'>图片水印</a>",
		4=>"<a target='I2' href='admin_datarelate.php?action=ftppic'>远程图片</a>",
		5=>"",
		6=>"<a target='I2' href='admin_player.php'>播放器</a>",
		7=>"<a target='I2' href='admin_player.php?action=boardsource'>播放来源</a>",
		8=>"",
		9=>"<a target='I2' href='admin_manager.php'>管理员账号</a>",
	),
);
$menuedit=array(
	'editor'=>array(
		0=>"<a target='I2' href='index_body.php'>后台首页</a>",
		1=>"<a target='I2' href='admin_menu.php'>快捷菜单</a>",
		2=>"<a target='I2' href='admin_video.php?action=else'>影片管理</a>",
		3=>"<a target='I2' href='admin_video.php?action=add'>添加影片</a>",
		4=>"<a target='I2' href='admin_makehtml.php?action=main'>生成选项</a>",
		5=>"",
	),
);

$menu['common']= array_merge($menu['common'],$add);


?>