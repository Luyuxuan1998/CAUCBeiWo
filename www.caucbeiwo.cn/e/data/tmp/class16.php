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
<meta name="keywords" content="" />
<meta name="description" content=" " />
<title>综合栏目（导航不显示，用于网站底部，不要删除）--<?=$public_r[sitename]?></title>
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
  <div class="content page">
    <div id="primary" class="primary" role="main">
      <div class="area">
        <div class="page-wrapper">
          <article id="post-17">
            <header class="single-header">
              <div class="single-meta">
                <h1 class="title">综合栏目（导航不显示，用于网站底部，不要删除）</h1>
              </div>
            </header>
            <div class="single-content">
              <p><?=ReturnClassAddField(0,'eclasspagetext')?></p> 
            </div>
          </article>
        </div>
      </div>
      <div class="aside">
        <div class="menus">
          <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=16  and showclass=0 order by myorder,classid desc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <?php
    $classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
    $class="";
    if($GLOBALS[navclassid])
    {
        $fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fcr[2]?$fcr[2]:$GLOBALS[navclassid];//取得当前栏目的一级栏目ID
        if($bqr[classid]==$topbclassid)
        {
            $class="current_page_item";
        }
    }
    ?>
    <li class="<?=$class?>"><a href="<?=$classurl?>"><?=$bqr[classname]?></a></li>
    <?php
}
}
?>
          </ul>
        </div>
      </div>
    </div>
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
        <h3 class="title">友情链接</h3>
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
          <li class="social-icon">  <a class="social-qq" rel="external nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_qq']?>&site=qq&menu=yes"><i class="fa fa-qq"></i><span class="text-replace">QQ在线联系</span></a>  
          <a id="social-weixin" data-pop="weixin" class="social-weixin"><i class="fa fa-weixin"></i><span class="text-replace">微信</span></a> </li>
        </ul>
      </aside>
      <div id="weixin" class="popupbox weixin-box">
        <div class="weixin-header">被窝云资源公众号二维码<a class="popup-close weixin-close">×</a></div>
        <div class="weixin-content"><span class="weixin-tip">打开微信，对准下方二维码“扫一扫”。</span><img src="<?=$public_r['add_ewm']?>" /></div>
      </div>
    </nav>
    <section class="site-info">
      <p class="copyright">Copyright &copy; 2018-2019 <a href="http://www.caucbeiwo.cn">航大被窝云资源</a> All Rights Reserved. <?=$public_r['add_icp']?>  <?=$public_r['add_tongji']?></p>
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
		"bdText":"[!--title--]",
		"bdMini":"2",
		"bdMiniList":false,
		"bdPic":"[!--titlepic--]",
		"bdStyle":"1",
		"bdSize":"24"
	},
	"share":{
	}
};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script> 
</body>
</html>