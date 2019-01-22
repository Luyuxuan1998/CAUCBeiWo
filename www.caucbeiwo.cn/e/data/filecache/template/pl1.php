<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$pagetitle?> 信息评论 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$pagetitle?> 信息评论" />
<meta name="description" content="<?=$pagetitle?> 信息评论" />
<style type="text/css">
<!--
body,Table{ color: #222; font-size: 12px; }
a { color: #222; text-decoration: none; }
a:hover { color: #f00; text-decoration: underline; }
h1 { font-size:32px; font-weight: bold; }
h2 { color: #1e3a9e; font-size: 25px; font-weight: bold;  }
.you { color: #1f3a87; font-size: 14px; }
.text { font-size: 14px; padding-left: 5px; padding-right: 5px; line-height: 20px}
.re a { color: #1f3a87; }
.name { color: #1f3a87; }
.name a { color: #1f3a87; text-decoration: underline;}
.retext { background-color: #f3f3f3; width: 100%; float: left; padding-top: 22px; padding-bottom: 22px; border-top: 1px solid #ccc; }
.retext textarea { width: 535px; height: 130px; float: left; margin-left: 60px; border-top-style: inset; border-top-width: 2px; border-left-style: inset; border-left-width: 2px; }
.hrLine{BORDER-BOTTOM: #807d76 1px dotted;}

.ecomment {margin:0;padding:0;}
.ecomment {margin-bottom:12px;overflow-x:hidden;overflow-y:hidden;padding-bottom:3px;padding-left:3px;padding-right:3px;padding-top:3px;background:#FFFFEE;padding:3px;border:solid 1px #999;}
.ecommentauthor {float:left; color:#F96; font-weight:bold;}
.ecommenttext {clear:left;margin:0;padding:0;}
-->
</style>
<script src="/e/data/js/ajax.js"></script>
</head>

<body topmargin="0">
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td width="210"><a href="/"><img src="/skin/default/images/logo.gif" border="0" /></a></td>
    <td><h1>网友评论</h1></td>
    <td><div align="right"><a href="#tosaypl"><strong><font color="#FF0000">我也评两句</font></strong></a></div></td>
  </tr>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#222">
  <tr>
    <td height="2"></td>
  </tr>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td height="42"> 
      <h2>评论：<a href="<?=$titleurl?>" target="_blank"><font color="#1e3a9e"><?=$title?></font></a></h2></td>
    <td><div align="right"><a href="<?=$titleurl?>" target="_blank">查看原文</a></div></td>
  </tr>
</table>
<hr align="center" width="766" size=1 class=hrline>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#384EA3">
  <form action="../enews/index.php" method="post" name="infopfenform">
    <input type="hidden" name="enews" value="AddInfoPfen" />
    <input type="hidden" name="classid" value="<?=$classid?>" />
    <input type="hidden" name="id" value="<?=$id?>" />
    <tr> 
      <td width="50%" height="27" valign="middle"><font color="#FFFFFF">&nbsp;评分: 
        <input type="radio" name="fen" value="1">
        1分 
        <input type="radio" name="fen" value="2">
        2分 
        <input name="fen" type="radio" value="3" checked>
        3分 
        <input type="radio" name="fen" value="4">
        4分 
        <input type="radio" name="fen" value="5">
        5分 
        <input type="submit" name="Submit" value="提交">
        </font></td>
      <td width="50%" valign="middle"><div align="center"><font color="#FFFFFF">平均得分: 
          <strong><span id="pfendiv"><?=$pinfopfen?></span></strong> 分，共有 <strong><?=$infopfennum?></strong> 
          人参与评分</font></div></td>
    </tr>
  </form>
</table>
<table width="766" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td height="30" bgcolor="#FFFFFF"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td width="17%">&nbsp;&nbsp;&nbsp;网友评论</td>
          <td width="83%"><div align="right"><?=$listpage?>&nbsp;&nbsp;&nbsp;</div></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td bgcolor="#f8fcff"> 
<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername=$fun_r['nomember'];
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=RepPltextFace(stripSlashes($r['saytext']));//替换表情
	$includelink=" onclick=\"javascript:document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
?>
 
      <table width="96%" border="0" align="center" cellpadding="3" cellspacing="1" style="word-break:break-all; word-wrap:break-all;">
        <tr> 
          <td height="30"><span class="name">本站网友 <?=$plusername?></span> <font color="#666666">ip:<?=$sayip?></font></td>
          <td><div align="right"><font color="#666666"><?=$saytime?> 发表</font></div></td>
        </tr>
        <tr valign="top"> 
          <td height="50" colspan="2" class="text"><?=$saytext?></td>
        </tr>
        <tr> 
          <td height="30">&nbsp;</td>
          <td><div align="right" class="re"><a href="#tosaypl"<?=$includelink?>>回复</a>&nbsp; 
              <a href="JavaScript:makeRequest('../pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">支持</a>[<span id="zcpldiv<?=$r[plid]?>"><?=$r[zcnum]?></span>]&nbsp; 
              <a href="JavaScript:makeRequest('../pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">反对</a>[<span id="fdpldiv<?=$r[plid]?>"><?=$r[fdnum]?></span>]
            </div></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td background="/skin/default/images/plhrbg.gif"></td>
        </tr>
      </table>
      
<?
}
?>
 
      <div align="right"><br />
        <?=$listpage?>&nbsp;&nbsp;&nbsp;<br />
        <br />
        <font color="#FF0000">网友评论仅供网友表达个人看法，并不表明本站同意其观点或证实其描述&nbsp;&nbsp;&nbsp;</font><br><br> </div></td>
  </tr>
  <script>
  function CheckPl(obj)
  {
  	if(obj.saytext.value=="")
  	{
  		alert("错误，评论不能为空");
  		obj.saytext.focus();
  		return false;
  	}
  	return true;
  }
  </script>
  <form action="../pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
  <tr id="tosaypl"> 
    <td bgcolor="#f8fcff"> <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
            <td width="13%" height="28">&nbsp;&nbsp;&nbsp;<span class="you">我也评两句</span></td>
            <td valign="middle">用户名： 
              <input name="username" type="text" id="username" size="12" value="<?=$lusername?>" />
            密码： 
            <input name="password" type="password" id="password" size="12" value="<?=$lpassword?>" />
            验证码： 
            <input name="key" type="text" id="key" size="6" />
              <img src="/e/ShowKey/?v=pl" align="middle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/e/member/register/" target="_blank">还没有注册？</a></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td bgcolor="#f8fcff"> <table width="100%" border="0" cellspacing="1" cellpadding="3" class="retext">
        <tr> 
          <td width="78%"><div align="center"> 
              <textarea name="saytext" cols="58" rows="6" id="saytext"></textarea>
            </div></td>
          <td width="22%" rowspan="2"> <div align="center">
              <input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
                匿名发表<br>
                <br />
              <input name="imageField" type="submit" id="imageField" value=" 提 交 " />
            </div></td>
        </tr>
        <tr> 
          <td><div align="center"> 
              <script src="/d/js/js/plface.js"></script>
            </div></td>
        </tr>
      </table> </td>
  </tr>
  <input name="id" type="hidden" id="id" value="<?=$id?>" />
  <input name="classid" type="hidden" id="classid" value="<?=$classid?>" />
  <input name="enews" type="hidden" id="enews" value="AddPl" />
  <input name="repid" type="hidden" id="repid" value="0" />
  </form>
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