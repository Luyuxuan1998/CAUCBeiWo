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
<meta name="keywords" content="航大被窝云资源" />
<meta name="description" content="航大被窝云资源 " />
<title>航大被窝云资源</title>
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

<div id="container" class="container" style="margin-top:50px;">
  <section id="notice">
    <div class="content">
      <div class="wrapper">
        <ul>
          <span class="icon"><i class="fa fa-bullhorn"></i></span>
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',8,20,0,'isgood=1','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><span>[<?=date('m-d',$bqr[newstime])?>]</span><?=esub($bqr[title],36)?></a></li>
          <?php
}
}
?>
        </ul>
      </div>
    </div>
  </section>
  <section id="aim" role="slider">
    <div class="content" style="width:100%;max-width:100%;overflow: hidden;margin:0px;">
      <div class="wrapper">
        <div class="stick">
          <div class="swiper-container">
            <div class="swiper-wrapper">
           <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('huandeng',5,18,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <div id="post-<?=$bqr['id']?>" class="swiper-slide"> <a class="post-thumbnail" href="<?=$bqr['pic_link']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" title="<?=$bqr['title']?>" alt="<?=$bqr['title']?>" /> </a> </div>
            <?php
}
}
?>
            </div>
            <div class="pagination"></div>
            <a class="arrow slider-prev" hidefocus="true"><i class="fa fa-chevron-left"></i></a> <a class="arrow slider-next" hidefocus="true"><i class="fa fa-chevron-right"></i></a> </div>
        </div>
      </div>
    </div>

<div class="content">
      </div>
  </section>
  <section class="row-fluid row-3">
  <div class="content">
    <?php
$Result = sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from {$dbtbpre}enewsclass where classid in($public_r[add_home_classid1]) order by myorder,myorder desc",0,24,0);
$bqno=0;
while($IndexClass=$empire->fetch($Result)){
  $ClassLink = sys_ReturnBqClassname($IndexClass,9);
	$bqno++;
    $style='';
    if($bqno%3==0){
    $style='pl';
    }
?>
    <div class="col-3 col-3-list mb <?=$style?>">
      <h2> <b><a href="<?=$ClassLink?>" rel="nofollow">
        <?=$IndexClass[classname]?>
        </a></b> <span><a href="<?=$ClassLink?>" rel="nofollow">更多</a></span> </h2>
      <div class="col-3-inner">
        <ul>
          <?php
  $ResultG = sys_ReturnEcmsLoopBq($IndexClass[classid],1,0,0);
  while($ClassGoods=$empire->fetch($ResultG)){
?>
          <li class="t"> <a href="<?=$ClassGoods[titleurl]?>" rel="nofollow"><img src="<?=$ClassGoods[titlepic]?>" alt="<?=$ClassGoods[title]?>" class="thumb"></a>
            <h3><a href="<?=$ClassGoods[titleurl]?>" rel="nofollow">
              <?=$ClassGoods[title]?>
              </a></h3>
            <p><a href="<?=$ClassGoods[titleurl]?>" rel="nofollow">
              <?=$ClassGoods[smalltext]?>
              ...</a></p>
          </li>
          <?
}
?>
          <?php
  $ResultG = sys_ReturnEcmsLoopBq($IndexClass[classid],'1,8',0,0);
  while($ClassGoods=$empire->fetch($ResultG)){
?>
          <li><span>
            <?=date('Y-m-d',$ClassGoods[newstime])?>
            </span><a href="<?=$ClassGoods[titleurl]?>"title="<?=$ClassGoods[title]?>" rel="nofollow">
            <?=$ClassGoods[title]?>
            </a></li>
          <?
}
?>
        </ul>
      </div>
    </div>
    <?php
}
?>
</div>
  </section>
  <section id="cool">
    <div class="content grid centralnav">
      <ul>
        <?php
$Result = sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where classid in($public_r[add_home_classid2]) order by myorder,classid desc",0,24,0);
while($IndexClass=$empire->fetch($Result)){
  $ClassLink = sys_ReturnBqClassname($IndexClass,9);
?>
      <div class="title">
        <h3 class="h3lan"><?=$IndexClass[classname]?> </h3>
        <div class="more"><a href="<?=$ClassLink?>">更多>></a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
      </div>
<?php
$bqno=0;
  $ResultG = sys_ReturnEcmsLoopBq($IndexClass[classid],4,0,0);
  while($ClassGoods=$empire->fetch($ResultG)){
?>
<?
$foot='<div class="data">
              <time class="time"> '.user_time($ClassGoods[newstime],0).' </time>
              <span class="comment-num"> <a href="'.$ClassGoods[titleurl].'#comments" class="comments-link"  title="《'.$ClassGoods[title].'》上的评论"><i class="fa fa-comment"></i>'.$ClassGoods[plnum].'</a> </span> <span class="heart-num"><i class="fa fa-heart"></i>'.$ClassGoods[diggtop].'</span> </div>
          ';
if($ClassGoods[price]>0){
$foot='<div class="pricebtn">￥<strong>'.$ClassGoods[price].'</strong><a class="buy" href="'.$ClassGoods[titleurl].'">前往购买</a></div>';
}
if($ClassGoods[taobao]!=''){
$foot='<div class="pricebtn">￥<strong>'.$ClassGoods[price].'</strong><a class="buy" href="'.$ClassGoods[titleurl].'">前往购买</a></div>';
}
?>
<li id="post-<?=$ClassGoods[id]?>" class="group">
          <div class="item">
            <div class="thumb"> <a target="_blank" href="<?=$ClassGoods[titleurl]?>" title="<?=$ClassGoods[title]?>"> <img width="280" height="180" src="<?=sys_ResizeImg($ClassGoods[titlepic]?$ClassGoods[titlepic]:"/skin/ecms147/images/random/titlepic/".rand(1,15).".jpg",280,180,1)?>" class="attachment-medium wp-post-image" alt="<?=$ClassGoods[title]?>" /> </a> </div>
            <div class="meta">
              <div class="title">
                <h2><a target="_blank" href="<?=$ClassGoods[titleurl]?>" rel="bookmark" title="<?=$ClassGoods[title]?>"><?=$ClassGoods[title]?></a></h2>
              </div>
              <div class="extra"> <i class="fa fa-bookmark"></i> <a href="<?=$ClassLink?>" rel="category tag"><?=$IndexClass[classname]?></a> <span><?=$ClassGoods[onclick]?><i class="fa fa-fire"></i></span> </div>
            </div>
            <?=$foot?>
</div>
        </li>
<?php
  }
}
?>
      </ul>
    </div>
  </section>
        
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
</body>
</html>