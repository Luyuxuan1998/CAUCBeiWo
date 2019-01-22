<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('gb');//关闭模块
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if(!$public_r['usetotalnum'])
{
	$totalnum=0;
}
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
if($public_r['usetotalnum'])
{
	$search.="&totalnum=$num";
}
//checkpageno
eCheckListPageNo($page,$line,$num);
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
[!--temp.dtheader--]
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>现在的位置：<a href=../../../>首页</a>&nbsp;>&nbsp;<?=$bname?>
</td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			<tr>
				<td align="center" bgcolor="#E1EFFB"><strong><?=$bname?></strong></td>
			</tr>
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br(stripSlashes($r[retext]));
	$r['lytext']=nl2br(stripSlashes($r[lytext]));
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=stripSlashes($r[name])?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td>分页: <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
									<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
										<tr class="header">
											<td colspan="2" bgcolor="#F4F9FD"><strong>请您留言:</strong></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="20%">姓名:</td>
											<td width="722" height="23"><input name="name" type="text" id="name" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系邮箱:</td>
											<td height="23"><input name="email" type="text" id="email" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系电话:</td>
											<td height="23"><input name="mycall" type="text" id="mycall" /></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>留言内容(*):</td>
											<td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23">&nbsp;</td>
											<td height="23"><input type="submit" name="Submit3" value="提交" />
											<input type="reset" name="Submit22" value="重置" />
											<input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
										</tr>
									</table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table>
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
            [showclasstemp]16,1,0,0[/showclasstemp]
          </ul>
        </div>
      </aside>
      <aside class="group">
        <h3 class="title">栏目</h3>
        <div class="menu-category-container">
          <ul id="menu-category" class="menu">
            [showclasstemp]'0',1,0,0[/showclasstemp]
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
            [e:loop={'select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',20,24,0}]
            <li><a target="_blank" href="<?=$bqr[lurl]?>"><?=$bqr[lname]?></a></li>
[/e:loop]
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
      <p class="copyright">Copyright &copy; 2012-2015 <a href="http://www.caucbeiwo.cn">航大被窝云资源</a> All Rights Reserved. <?=$public_r['add_icp']?>  <?=$public_r['add_tongji']?></p>
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

</body>
</html>
<?php
db_close();
$empire=null;
?>