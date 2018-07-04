<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta name="applicable-device" content="pc,mobile">
<title>电影 第{channelpage:page}页-123-Power by SuCms</title>
<meta name="keywords" content="电影第{channelpage:page}页" />
<meta name="description" content="电影第{channelpage:page}页" />
<link href="/skin/css/style.css" rel="stylesheet">
<script>var sitePath='upload/'</script>
<script src="/skin/js/jquery-1.4.4.min.js"></script>
<script src="/skin/js/common.js"></script>
<script src="/skin/js/function.js"></script>
<script src="/skin/js/jquery.lazyload.js"></script>
<link href="/favicon.ico" type="image/x-icon" rel="icon">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
<!--[if lt IE 9]>
<script src="/skin/js/html5shiv.min.js"></script>
<script src="/skin/js/respond.min.js"></script>
<![endif]-->
</head>
<div class="header-all">
  <div class="top clearfix">
    <ul class="logo"><a href="http://localhost"><i class="logobg"></i></a></ul>
    <ul class="top-nav">
      <li><a class="now" href="/upload/">首页</a></li>
      
      {if:1>2}
      <li><a href="/upload/sucms-list/?1.html"{subif:"1"=="1"} class="on"{end subif}>电影</a></li>
      {else}
      <li class="" _t_nav="topnav-1"><a href="/upload/sucms-list/?1.html"{subif:"1"=="1"} class="on"{end subif}>电影<i class="sjbgs"></i><i class="sjbgx"></i></a></li>
      {end if}
      
      {if:2>2}
      <li><a href="/upload/sucms-list/?2.html"{subif:"1"=="2"} class="on"{end subif}>电视剧</a></li>
      {else}
      <li class="" _t_nav="topnav-2"><a href="/upload/sucms-list/?2.html"{subif:"1"=="2"} class="on"{end subif}>电视剧<i class="sjbgs"></i><i class="sjbgx"></i></a></li>
      {end if}
      
      {if:3>2}
      <li><a href="/upload/sucms-list/?3.html"{subif:"1"=="3"} class="on"{end subif}>综艺</a></li>
      {else}
      <li class="" _t_nav="topnav-3"><a href="/upload/sucms-list/?3.html"{subif:"1"=="3"} class="on"{end subif}>综艺<i class="sjbgs"></i><i class="sjbgx"></i></a></li>
      {end if}
      
      {if:4>2}
      <li><a href="/upload/sucms-list/?4.html"{subif:"1"=="4"} class="on"{end subif}>动漫</a></li>
      {else}
      <li class="" _t_nav="topnav-4"><a href="/upload/sucms-list/?4.html"{subif:"1"=="4"} class="on"{end subif}>动漫<i class="sjbgs"></i><i class="sjbgx"></i></a></li>
      {end if}
      
      <li><a href="/upload/topic/?1.html">专题</a></li>
      <li class="" _t_nav="topnav-news"><a href="/upload/news/">新闻<i class="sjbgs"></i><i class="sjbgx"></i></a></li>
      <li><a href="/plus/gbook.php">留言</a></li>
    </ul>
    <ul class="search so">
      <form name="formsearch" id="formsearch" action='/search.php' method="post"  target="_self" autocomplete="off">
          <input class="input" name="searchword" type="text" id="keyword" placeholder="请输入影片或演员名" />
          <div class="so-key"><a href='/upload/search.php?searchword=%E5%85%B3%E9%94%AE%E8%AF%8DA'>关键词A</a> <a href='/upload/search.php?searchword=%E5%85%B3%E9%94%AE%E8%AF%8DB'>关键词B</a> <a href='/upload/search.php?searchword=%E5%85%B3%E9%94%AE%E8%AF%8DC'>关键词C</a> <a href='/upload/search.php?searchword=%E5%85%B3%E9%94%AE%E8%AF%8DD'>关键词D</a> <a href='/upload/search.php?searchword=%E5%85%B3%E9%94%AE%E8%AF%8DD'>关键词D</a> </div>
          <input class="imgbt" type="submit" value=""/>
      </form>
    </ul>
    <ul class="nav-qt aa">
      <li class="bb"><a href="javascript:void(0)" onMouseOver="$MH.showHistory(1);"><i class="jl"></i>观看历史</a>
      <div class="cc">
	  <script type="text/javascript" src="/skin/js/history.js"></script>
          <script type="text/javascript">$MH.limit=10;$MH.WriteHistoryBox(180,170,'font');$MH.recordHistory({name:'{playpage:name}',link:'{playpage:url}',pic:'{playpage:pic}'})</script></div>
      </li>
      <li class="bb"><strong class="ma"><i class="mabg"></i>手机观看</strong>
      <div class="cc maw"><i class="ewmbg"></i><p>扫描二维码用手机观看</p></div>  
      </li>
    </ul>
    <ul class="sj-search">
      <li class="sbtn2"><i class="sjbg-search"></i></li>
    </ul>
    <ul class="sj-nav">
      <li class="sbtn1"><i class="sjbg-nav"></i></li>
    </ul>
    <ul class="sj-navhome">
      <li><a href="/upload/"><i class="sjbg-home"></i></a></li>
    </ul>  
  </div>
  <div class="nav-down clearfix">
  
  {if:1<3}
  <div id="topnav-1" class="nav-down-1" style="display:none;" _t_nav="topnav-1">
    <div class="nav-down-2 clearfix">
    <ul>
           
      <li><a href="/upload/sucms-list/?5.html"{subif:"1"=="5"} class="on"{end subif}>动作片</a></li>
           
      <li><a href="/upload/sucms-list/?6.html"{subif:"1"=="6"} class="on"{end subif}>喜剧片</a></li>
           
      <li><a href="/upload/sucms-list/?7.html"{subif:"1"=="7"} class="on"{end subif}>爱情片</a></li>
           
      <li><a href="/upload/sucms-list/?8.html"{subif:"1"=="8"} class="on"{end subif}>科幻片</a></li>
           
      <li><a href="/upload/sucms-list/?9.html"{subif:"1"=="9"} class="on"{end subif}>剧情片</a></li>
           
      <li><a href="/upload/sucms-list/?10.html"{subif:"1"=="10"} class="on"{end subif}>恐怖片</a></li>
           
      <li><a href="/upload/sucms-list/?11.html"{subif:"1"=="11"} class="on"{end subif}>战争片</a></li>
      
    </ul>
    </div>
  </div>
  {end if}
  
  {if:2<3}
  <div id="topnav-2" class="nav-down-1" style="display:none;" _t_nav="topnav-2">
    <div class="nav-down-2 clearfix">
    <ul>
           
      <li><a href="/upload/sucms-list/?12.html"{subif:"1"=="12"} class="on"{end subif}>大陆剧</a></li>
           
      <li><a href="/upload/sucms-list/?13.html"{subif:"1"=="13"} class="on"{end subif}>港台剧</a></li>
           
      <li><a href="/upload/sucms-list/?14.html"{subif:"1"=="14"} class="on"{end subif}>日韩剧</a></li>
           
      <li><a href="/upload/sucms-list/?15.html"{subif:"1"=="15"} class="on"{end subif}>欧美剧</a></li>
      
    </ul>
    </div>
  </div>
  {end if}
  
  {if:3<3}
  <div id="topnav-3" class="nav-down-1" style="display:none;" _t_nav="topnav-3">
    <div class="nav-down-2 clearfix">
    <ul>
      
    </ul>
    </div>
  </div>
  {end if}
  
  {if:4<3}
  <div id="topnav-4" class="nav-down-1" style="display:none;" _t_nav="topnav-4">
    <div class="nav-down-2 clearfix">
    <ul>
      
    </ul>
    </div>
  </div>
  {end if}
  
  <div id="topnav-news" class="nav-down-1" style="display:none;" _t_nav="topnav-news">
    <div class="nav-down-2 clearfix">
    <ul>
           
      <li><a href="/upload/articlelist/?16.html">影视资讯</a></li>
           
      <li><a href="/upload/articlelist/?17.html">剧情介绍</a></li>
      
    </ul>
    </div>
  </div>
  <div id="sj-nav-1" class="nav-down-1 sy1 sj-noover" style="display:none;" _s_nav="sj-nav-1">
    <div class="nav-down-2 sj-nav-down-2 clearfix">
    <ul> 
      <li><a href="/upload/">首页</a></li>
        
      <li><a href="/upload/sucms-list/?1.html"{if:"1"=="1"} class="on"{end if}>电影</a></li>
        
      <li><a href="/upload/sucms-list/?2.html"{if:"1"=="2"} class="on"{end if}>电视剧</a></li>
        
      <li><a href="/upload/sucms-list/?3.html"{if:"1"=="3"} class="on"{end if}>综艺</a></li>
        
      <li><a href="/upload/sucms-list/?4.html"{if:"1"=="4"} class="on"{end if}>动漫</a></li>
        
      <li><a href="/upload/sucms-list/?5.html"{if:"1"=="5"} class="on"{end if}>动作片</a></li>
        
      <li><a href="/upload/sucms-list/?6.html"{if:"1"=="6"} class="on"{end if}>喜剧片</a></li>
        
      <li><a href="/upload/sucms-list/?7.html"{if:"1"=="7"} class="on"{end if}>爱情片</a></li>
        
      <li><a href="/upload/sucms-list/?8.html"{if:"1"=="8"} class="on"{end if}>科幻片</a></li>
        
      <li><a href="/upload/sucms-list/?9.html"{if:"1"=="9"} class="on"{end if}>剧情片</a></li>
        
      <li><a href="/upload/sucms-list/?10.html"{if:"1"=="10"} class="on"{end if}>恐怖片</a></li>
        
      <li><a href="/upload/sucms-list/?11.html"{if:"1"=="11"} class="on"{end if}>战争片</a></li>
        
      <li><a href="/upload/sucms-list/?12.html"{if:"1"=="12"} class="on"{end if}>大陆剧</a></li>
        
      <li><a href="/upload/sucms-list/?13.html"{if:"1"=="13"} class="on"{end if}>港台剧</a></li>
        
      <li><a href="/upload/sucms-list/?14.html"{if:"1"=="14"} class="on"{end if}>日韩剧</a></li>
        
      <li><a href="/upload/sucms-list/?15.html"{if:"1"=="15"} class="on"{end if}>欧美剧</a></li>
    
      <li><a href="/upload/topic/?1.html">专题</a></li>
      <li><a href="/upload/news/">新闻</a></li>
      <li><a href="/plus/gbook.php">留言</a></li>
    </ul>
    </div>
  </div>
  <div id="sj-nav-search" class="nav-down-1 sy2 sj-noover" style="display:none;" _t_nav1="sj-nav-search">
    <div class="nav-down-2 sj-nav-down-search clearfix">
    <form name="formsearch" id="formsearch" action='/upload/search.php' method="post"  target="_self" autocomplete="off">
          <input class="input" name="searchword" type="text" id="keyword" placeholder="输入关键词"/>
          <input class="imgbt" type="submit" value="搜索"/>
      </form>
    </div>
  </div>
</div>
</div>
<div class="topone clearfix"></div>
<div class="main">
	<h1 class="title"><a href='/upload/' >首页</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href='/upload/sucms-list/?1.html' >电影</a></h1>
  <div class="sy-all mb clearfix">
    <div class="sy-title clearfix">
     <p class="type">
      <span class="type">电影</span>
     </p>
     <p class="chg sbtn" _s_nav="sj-gjsy">筛选<i class="sjbgs"></i><i class="sjbgx"></i></p>
    </div>
  <div class="sy-nav-down clearfix">
  <div id="sj-gjsy" class="sy clearfix" _s_nav="sj-gjsy" style="display:none;">
          <dl class="clearfix"><dt><span>按分类</span></dt>
              
          <dd><a href="/upload/search.php?searchtype=5&tid=1"{if:电影==电影} class="on"{end if}>电影</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=2"{if:电影==电视剧} class="on"{end if}>电视剧</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=3"{if:电影==综艺} class="on"{end if}>综艺</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=4"{if:电影==动漫} class="on"{end if}>动漫</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=5"{if:电影==动作片} class="on"{end if}>动作片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=6"{if:电影==喜剧片} class="on"{end if}>喜剧片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=7"{if:电影==爱情片} class="on"{end if}>爱情片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=8"{if:电影==科幻片} class="on"{end if}>科幻片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=9"{if:电影==剧情片} class="on"{end if}>剧情片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=10"{if:电影==恐怖片} class="on"{end if}>恐怖片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=11"{if:电影==战争片} class="on"{end if}>战争片</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=12"{if:电影==大陆剧} class="on"{end if}>大陆剧</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=13"{if:电影==港台剧} class="on"{end if}>港台剧</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=14"{if:电影==日韩剧} class="on"{end if}>日韩剧</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=15"{if:电影==欧美剧} class="on"{end if}>欧美剧</a></dd>
          </dl>
          <dl class="clearfix"><dt><span>按年代</span></dt>
              
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2015">{if:2015
==more}更早{else}2015
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2014">{if:2014
==more}更早{else}2014
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2013">{if:2013
==more}更早{else}2013
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2012">{if:2012
==more}更早{else}2012
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2011">{if:2011
==more}更早{else}2011
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2010">{if:2010
==more}更早{else}2010
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2009">{if:2009
==more}更早{else}2009
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2008">{if:2008
==more}更早{else}2008
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2007">{if:2007
==more}更早{else}2007
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2006">{if:2006
==more}更早{else}2006
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=2005">{if:2005
==more}更早{else}2005
{end if}</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&year=more">{if:more==more}更早{else}more{end if}</a></dd>
          </dl>
          <dl class="clearfix"><dt><span>按地区</span></dt>
              
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E7%BE%8E%E5%9B%BD">美国
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E5%A4%A7%E9%99%86">大陆
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E9%A6%99%E6%B8%AF">香港
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E5%8F%B0%E6%B9%BE">台湾
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E6%97%A5%E6%9C%AC">日本
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E9%9F%A9%E5%9B%BD">韩国
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E6%AC%A7%E7%BE%8E">欧美
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E6%B3%B0%E5%9B%BD">泰国
</a></dd>
          <dd><a href="/upload/search.php?searchtype=5&tid=1&area=%E5%85%B6%E4%BB%96">其他
</a></dd>
          </dl>
  </div>
  </div>
  </div>
  <div class="sy-jg mb">
     <p class="jg">
      共<span class="count">{channellist:recordcount}</span>个筛选结果
     </p>
     <p class="px">
      <a class="time on" href="{channelpage:order-time-link}"><em></em>最新</a>
      <a class="rq" href="{channelpage:order-hit-link}"><em></em>人气</a>
      <a class="tj" href="{channelpage:order-commend-link}"><em></em>推荐</a>
     </p>
  </div>
	<div class="index-area clearfix">
	<ul>
    {sucms:channellist size=30 order=time type=current}
    <li class="p1 m1{if:[channellist:i]% 3==0} mmr0{end if}{if:[channellist:i]% 6==0} pmr0{end if}"><a class="link-hover" href="[channellist:link]" title="[channellist:name]"><img class="lazy" data-original="[channellist:pic]" src="/upload/pic/load.gif" alt="[channellist:name]"><span class="video-bg"></span><span class="lzbz"><p class="name">[channellist:name]</p><p class="actor">[channellist:nolinkactor]</p><p class="actor">[channellist:typename]{if:"[channellist:nolinkjqtype]"<>""},{end if}[channellist:nolinkjqtype]</p><p class="actor">[channellist:publishtime]/[channellist:publisharea]</p></span><p class="other">{if:"[channellist:note]"<>""}<i>[channellist:note]</i>{else}{subif:[channellist:state]<>0}<i>[channellist:state]{end subif}{subif:[channellist:state]>999}期{end subif}{subif:[channellist:state]<1000 and [channellist:state]<>0}集{end subif}</i>{end if}</p></a>
    </li>
    {/sucms:channellist}
    </ul>
	</div>
<div class="page mb clearfix">
{if:{channellist:page}<>1}<a href="{channellist:firstlink}">1..</a>
<a href="{channellist:backlink}"><</a>{end if}
{channellist:pagenumber len=8}
{if:{channellist:page}<>[pagenumber:page]}
<a href="[pagenumber:link]">[pagenumber:page]</a>
{else}
<em>[pagenumber:page]</em>
{end if}
{/channellist:pagenumber}
{if:{channellist:page}<>{channellist:pagecount}}
<a href="{channellist:nextlink}">></a>
<a href="{channellist:lastlink}">..{channellist:pagecount}</a>
{end if}
</div>   
</div>
<div class="footer clearfix">
Copyright &#169; 2015 sucms. 速成电影管理系统 版权所有 {sucms:runinfo}   <p class="footer-bg"><span class="bg"></span></p>
</div>
<div class="gotop"><a class="gotopbg" href="javascript:;" title="返回顶部"></a></div>
</body></html>
