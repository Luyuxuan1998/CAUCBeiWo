<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="zh-CN">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh-CN">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?> " />
<title><?=$grpagetitle?>--<?=$public_r[sitename]?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" type="image/x-icon" href="/skin/ecms147/images/favicon.ico" />
<!--[if lt IE 9]>
    <script src="/skin/ecms147/js/html5.js" type="text/javascript"></script>
    <![endif]-->
<link rel='stylesheet' id='javin-font-css'  href='/skin/ecms147/css/font-awesome.min.css?ver=4.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='javin-style-css'  href='/skin/ecms147/css/style.css?ver=1' type='text/css' media='all' />
<script type='text/javascript' src='/skin/ecms147/js/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='/skin/ecms147/js/jquery-migrate.min.js?ver=1.2.1'></script>

<script type="text/javascript" src="/e/data/js/ajax.js"></script>
</head>
<body>
<header id="header" class="inside" >
  <div class="content">
    <div class="nav" role="navigation">
      <ul id="nav-menu" class="nav-menu">
        <li class="nav-toggle">
          <div id="toggle-icon" class="toggle-icon" aria-controls="#nav-list" aria-expanded="false"> <i class="fa fa-bars"></i>导航</div>
        </li>
        <li class="signin-toggle"> <a href="/e/member/cp/" class="user-signin"><i class="fa fa-user"></i></a> </li>
        <li class="home-logo"><a href="/"><span class="text-replace"><?=$public_r[sitename]?></span></a></li>
      </ul>
      <ul id="nav-list" class="nav-list">
        <li id="logo"><a href="/"><span class="text-replace"><?=$public_r[sitename]?></span></a></li>
        <li id="search1" role="search">
          <form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" action="/e/search/index.php" >
            <div class="search-input-wrapper"> <span class="search-icon"><i class="fa fa-search"></i></span>
              <input type="hidden" value="title" name="show"></input>
          <input type="hidden" value="1" name="tempid">
          <input type="hidden" value="news" name="tbname">
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
              <input type="search" class="search-input" name="keyboard" id="search-input" value="按回车搜索..." onfocus="if(this.value=='按回车搜索...')this.value='';" onblur="if(this.value=='')this.value='按回车搜索...';" autocomplete="off" />
              <button type="submit" name="submit" class="search-submit" id="search-submit" ></button>
            </div>
          </form>
        </li>
        <li class="<?=$GLOBALS[navclassid]?"":"current-menu-item"?>"><a href="/">首页</a></li>
        <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current-menu-item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        echo '<li class="'.$tclass.'"><a href="'.$classurl.'">'.$s[classname].'</a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li><a href="'.$classurl2.'">'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>
';
    }
?>
        <script src="/e/member/login/loginjs.php"></script>
        <li id="search2" role="search">
          <form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" action="/e/search/index.php" >
            <div class="search-input-wrapper"> <span class="search-icon"><i class="fa fa-search"></i></span>
              <input type="hidden" value="title" name="show"></input>
          <input type="hidden" value="1" name="tempid">
          <input type="hidden" value="news" name="tbname">
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
              <input type="search" class="search-input" name="keyboard" id="search-input" value="按回车搜索..." onfocus="if(this.value=='按回车搜索...')this.value='';" onblur="if(this.value=='')this.value='按回车搜索...';" autocomplete="off" />
              <button type="submit" name="submit" class="search-submit" id="search-submit" ></button>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>
<div id="container" class="container">
  <div class="content single">
    <div class="recommend"> 
    <script src=/d/js/acmsd/thea6.js></script></div>
    <div id="primary" class="primary" role="main">
      <div class="area">
        <article id="post-<?=$ecms_gr[id]?>">
          <header class="single-header">
            <div class="single-meta">
            <?php
$uid=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid={$navinfor[userid]}");
?>
              <div class="author-avatar"> <a target="_blank" href="/e/space/listuseract.php?mid=1&tempid=12&userid=<?=$ecms_gr[userid]?>" title=" <?=$ecms_gr[username]?> 的所有信息" rel="author"> <img alt='<?=$ecms_gr[username]?>' src='<?=$uid['userpic']?>' class='avatar avatar-70 photo' height='70' width='70' /> </a> </div>
              <h1 class="title"><?=$ecms_gr[title]?></h1>
              <p class="info"> <span class="cat-links"> 分类栏目：<a href="<?=$grclassurl?>"><?=$class_r[$ecms_gr[classid]][classname]?></a> </span> </p>
              <p class="copyright"><span>版权信息：</span><a class="url" href="/e/space/listuseract.php?mid=1&tempid=12&userid=<?=$ecms_gr[userid]?>" rel="author"><?=$ecms_gr[username]?></a> 原创作品、版权所有，禁止匿名转载，分享请注明版权。</p>
            </div>
            <div class="data-meta">
              <p class="badge-num"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></p>
              <p> <span class="author"><a target="_blank" href="/e/space/listuseract.php?mid=1&tempid=12&userid=<?=$ecms_gr[userid]?>" title="查看 <?=$ecms_gr[username]?> 发表的全部信息" rel="author"> <?=$ecms_gr[username]?> </a> 发布于
                <time class="data-time"><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></time>
                </span> <span class="comments-link"><a href="<?=$grtitleurl?>#comments" title="《<?=$ecms_gr[title]?>》上的评论"><sapn><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2></script>条评论</sapn></a></span> </p>
            </div>
          </header>
          <div class="single-content centralnav" style="width:100%;max-width: 100%; ">
<div class="n_l">
<div style="text-align: center;"><script src=/d/js/acmsd/thea13.js></script></div>
            <?php
if($navinfor[onlinepath]!=''){
?>
<div class="video">                   
<iframe name= "iFrame1" width="100%" height="100%" src= "/e/DownSys/play/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$_playur?>"  frameborder= "0"> </iframe>
            
        </div>
  <div class="meihua_1">在线播放列表</div>
<div class="meihua_2">
  <div class="meihua_2_1">
    <p>
<?php
$rr=explode(egetzy('rn'),$navinfor[onlinepath]);
$rcount=count($rr);
for($pathi=0;$pathi<$rcount;$pathi++)
{
$fr=explode('::::::',$rr[$pathi]);
?>
    <a class="meihua_btn" href="/e/DownSys/play/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$pathi?>" target= "iFrame1"><?=$fr[0]?></a>
<?php
}
?>
    </p>
  </div>
</div>
<?php
}
?>
            <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
            <p style="text-align: center;">
            <?php
if($navinfor[downpath]!=''){
?>
 <div class="meihua_1">在线下载列表</div>
<div class="meihua_2">
  <div class="meihua_2_1">
    <p>
<?php
$rr=explode(egetzy('rn'),$navinfor[downpath]);
$rcount=count($rr);
for($pathi=0;$pathi<$rcount;$pathi++)
{
$fr=explode('::::::',$rr[$pathi]);
?>
    <a class="short-btn download" href="/e/DownSys/DownSoft/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$pathi?>" rel="external nofollow"  target="_blank"><i class="fa fa-cloud-download"></i><?=$fr[0]?></a>
<?php
}
?>
    </p>
  </div>
</div>
 <?php
}else{}
?>
<?php
if($navinfor[taobao]!=''){
?>
<div class="meihua_1">前往购买</div>
<div class="meihua_2">
  <div class="meihua_2_1">
    <p>

<a class="short-btn download" href="/go.php?go=<?=base64_encode($navinfor[taobao])?>" rel="external nofollow"  target="_blank"><i class="fa fa-shopping-cart"></i>前往淘宝店铺购买</a>
 
    </p>
  </div>
</div>
<?php
}else{}
?>
<?php
if($navinfor[price]>0){
?>
<div class="meihua_1">立即购买</div>
<div class="meihua_2">
  <div class="meihua_2_1">
    <p>

<a class="short-btn download" href="/e/ShopSys/doaction.php?enews=AddBuycar&amp;classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" rel="external nofollow"  target="_blank"><i class="fa fa-shopping-cart"></i>站内立即购买【<?=$ecms_gr[price]?>元】</a>
            
    </p>
  </div>
</div>
<?php
}else{}
?>
<div style="text-align: center;"><script src=/d/js/acmsd/thea14.js></script></div>
            <nav class="navigation paging-navigation" role="navigation">
        <div class="pagination loop-pagination"> [!--page.url--]</div>
      </nav>
            <div class="single-heart"><a href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');"><i class="fa fa-heart"></i><span class="heart-text">喜欢</span> ( <span class="heart-no" id="diggnum"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span> )</a>
              <div class="loading-line"></div>
            </div>
</div>


<div class="n_r">
<div id="sidebar" class="sidebar-container" role="complementary">
        <div class="sidebar-inner">
          <aside class="widget new-comments">
            <h3 class="widget-title"><i class="fa fa-file-archive-o"></i>最新文章</h3>
            <ul>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',5,0,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
                <div class="thumb"><img src="<?=sys_ResizeImg($bqr[titlepic],100,100,1)?>" width="100" height="100"></div>
                <p><strong><?=$bqr['title']?></strong><span><?=esub($bqr[smalltext],60)?></span></p>
                </a></li>
                <?php
}
}
?>
            </ul>
          </aside>
          <aside class="widget sidabar-recommend">
            <div class="box"><script src=/d/js/acmsd/thea8.js></script></div>
          </aside>
          <aside class="widget new-comments">
            <h3 class="widget-title"><i class="fa fa-comments-o"></i>热门文章</h3>
            <ul>
              <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',5,1,1,'','onclick DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
                <div class="thumb"><img src="<?=sys_ResizeImg($bqr[titlepic],100,100,1)?>" width="100" height="100"></div>
                <p><strong><?=$bqr['title']?></strong><span><?=esub($bqr[smalltext],60)?></span></p>
                </a></li>
                <?php
}
}
?>
            </ul>
          </aside>
          <aside class="widget sidabar-recommend">
            <div class="box"><script src=/d/js/acmsd/thea9.js></script></div>
          </aside>
          <aside class="widget sidabar-recommend">
            <div class="box"><script src=/d/js/acmsd/thea10.js></script></div>
          </aside>
        </div>
      </div>
</div>

          </div>

          <footer class="single-footer">
            <div class="tag-share">
              
              <div class="share">
                <div class="bdsharebuttonbox"> <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a> <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a> <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a> <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a> </div>
              </div>
            </div>
            <nav class="navigation post-navigation" role="navigation">
              <div class="nav-links">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id<'.$navinfor[id].'','id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a class="pre-post" title="<?=$bqr[title]?>" rel="prev" href="<?php
echo $bqsr[titleurl];
$pre='true';
?>"><i class="fa fa-arrow-circle-left"></i>上一篇:<?=$bqr[title]?>
</a>
<?php
}
}
?>
<?php
if(empty($pre)){
echo '<a class="pre-post" href="#"><i class="fa fa-arrow-circle-left"></i>上一篇:很抱歉没有了</a>';
}
?>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id>'.$navinfor[id].'','id asc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a class="next-post" title="<?=$bqr[title]?>" rel="next" href="<?php
echo $bqsr[titleurl];
$next='true';
?>">下一篇:<?=$bqr[title]?><i class="fa fa-arrow-circle-right"></i>
</a>
<?php
}
}
?>
<?php
if(empty($next)){
echo '<a class="next-post" href="#">下一篇:很抱歉没有了<i class="fa fa-arrow-circle-right"></i></a>';
}
?>

</div>
            </nav>
          </footer>
        </article>
      </div>
      <div class="area">
        <div class="related-posts">
          <h2 class="title">相关推荐</h2>
          <ul>
           <? @sys_GetOtherLinkInfo(13,'news',4,32,0,1,0);?>
          </ul>
        </div>
      </div>
      <div class="area">
        <div id="comments" class="comments">
           <link href="/skin/ecmspl/css/pl.css" rel="stylesheet">
<div class="showpage" id="plpost">
<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="line-height: 25px; padding: 5px 3px 1px 8px; font-size: 18px;">
<tr><td><strong><font color="#333333">留言与评论（共有 <span id="infocommentnumarea">0</span> 条评论）</font></strong></td></tr>
</table>
<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script>
<form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">
<tr>
<td>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td>
<script src="/e/pl/loginjspl.php"></script>
<textarea name="saytext" rows="6" id="saytext" placeholder="请遵守互联网相关规定，不要发布广告和违法内容!"></textarea>
<script src="/d/js/js/plface.js"></script>&nbsp;&nbsp;&nbsp;
<table width='100%' align='left' cellpadding=3 cellspacing=1 bgcolor='#FFF'>
<tr>
<td width="80%" height="40" bgcolor="#FFFFFF">验证码：<input name="key" type="text" class="inputText" size="16" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> 
</td> 
<td width="20%" height="40" bgcolor="#FFFFFF"> 
<input name="sumbit" type="submit" value="提交评论" tabindex="6" style="border-radius: 5px;font-size: 16px;background: #e94c3d none repeat scroll 0% 0%;border: 0px none;margin: 0px 16px;padding: 1px 16px;height: 33px;line-height: 30px;color: rgb(255, 255, 255);opacity: 0.95;">
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>">
</td>
</tr>  
</table> 
</td>
</tr>
</table>
</td>
</tr>
</table></form>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#FFFFFF" id="infocommentarea"></td>
        </tr>
        </table>
 <script src="/e/extend/infocomment/commentajax.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>"></script>
</div>	        
        </div>
      </div>
    </div>
    <div class="recommend"> 
      <script src=/d/js/acmsd/thea7.js></script> </div>
  </div>
</div>
<footer id="footer">
  <div class="content">
    <nav class="inner">
      <aside id="describe" class="group">
        <h3>关于我们</h3>
        <p class="describe-text"><?=$public_r['add_foot_about']?></p>
        
        <p class="stamp"></p>
      </aside>
      <aside class="group">
        <h3 class="title">关于</h3>
        <div class="menu-about-container">
          <ul id="menu-about" class="menu">
            <? @sys_ShowClassByTemp(16,1,0,0);?>
          </ul>
        </div>
      </aside>
      <aside class="group">
        <h3 class="title">栏目</h3>
        <div class="menu-category-container">
          <ul id="menu-category" class="menu">
            <? @sys_ShowClassByTemp('0',1,0,0);?>
          </ul>
        </div>
      </aside>
<?php
if($GLOBALS[navclassid]) //非首页
{
?>

<?php
}
else 
{
?>
      <aside class="group">
        <h3 class="title">友链</h3>
        <div class="menu-links-container">
          <ul id="menu-links" class="menu">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a target="_blank" href="<?=$bqr[lurl]?>"><?=$bqr[lname]?></a></li>
<?php
}
}
?>
          </ul>
        </div>
      </aside>
<?php
}
?>
      <aside id="social" class="group">
        <h3 class="title">关注</h3>
        <ul>
          <li>Email: <a href="mailto:<?=$public_r['add_email']?>"><?=$public_r['add_email']?></a></li>
          <li class="social-email">
          </li>
          <li class="social-icon"> <a class="social-sina" rel="external nofollow" target="_blank" href="<?=$public_r['add_xlwb']?>"><i class="fa fa-weibo"></i><span class="text-replace">关注新浪微博</span></a> <a class="social-qqwb" rel="external nofollow" target="_blank" href="<?=$public_r['add_txwb']?>"><i class="fa fa-tencent-weibo"></i><span class="text-replace">关注腾讯微博</span></a> <a class="social-qq" rel="external nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_qq']?>&site=qq&menu=yes"><i class="fa fa-qq"></i><span class="text-replace">QQ在线联系</span></a> <a class="social-rss" rel="external nofollow" target="_blank" href="/e/web/?type=rss2"><i class="fa fa-rss"></i><span class="text-replace">rss</span></a> <a id="social-weixin" data-pop="weixin" class="social-weixin"><i class="fa fa-weixin"></i><span class="text-replace">微信</span></a> </li>
        </ul>
      </aside>
      <div id="weixin" class="popupbox weixin-box">
        <div class="weixin-header">官方微信二维码<a class="popup-close weixin-close">×</a></div>
        <div class="weixin-content"><span class="weixin-tip">打开微信，点击右上角的“魔法棒”，选择“扫一扫”功能，对准下方二维码即可。</span><img src="<?=$public_r['add_ewm']?>" /></div>
      </div>
    </nav>
    <section class="site-info">
      <p class="copyright">Copyright &copy; 2012-2015 <a href="http://www.xxxx.com">我的网站</a> All All Rights Reserved. <?=$public_r['add_icp']?>  <?=$public_r['add_tongji']?></p>
    </section>
  </div>
</footer>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#aFloatTools_Show").click(function(){
		$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){
			$('#divFloatToolsView').show();
		});
		$('#aFloatTools_Show').attr('style','display:none');
		$('#aFloatTools_Hide').attr('style','display:block');
	});
	
	$("#aFloatTools_Hide").click(function(){
		$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){
			$('#divFloatToolsView').hide();
		});
		$('#aFloatTools_Show').attr('style','display:block');
		$('#aFloatTools_Hide').attr('style','display:none');
	});
	
});
</script>

<div class="rides-cs">

	<div class="floatL">
		<a style="display:block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" href="javascript:void(0);">展开</a>
		<a style="display:none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" href="javascript:void(0);">收缩</a>
	</div>
	
	<div id="divFloatToolsView" class="floatR" style="display:none">
		<div class="cn">
			<?=$public_r['add_kf']?>
		</div>
	</div>
	
</div>

<div id="suspend"> <a id="backtop"><i class="fa fa-angle-up"></i></a> </div>
<script type='text/javascript' src='/skin/ecms147/js/idangerous.swiper.min.js?ver=20131205'></script> 
<script type='text/javascript' src='/skin/ecms147/js/functions.min.js?ver=1.0'></script>
<script>
window._bd_share_config={
	"common":{
		"bdSnsKey":{"tsina":"123456789"},
		"bdText":"<?=$ecms_gr[title]?>",
		"bdMini":"2",
		"bdMiniList":false,
		"bdPic":"<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>",
		"bdStyle":"1",
		"bdSize":"24"
	},
	"share":{
	}
};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script> 
</body>
</html>