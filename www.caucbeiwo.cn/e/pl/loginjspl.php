<?php
require("../class/connect.php");
if(!defined('InEmpireCMS'))
{
        exit();
}
$myuserid=(int)getcvar('mluserid');
$myusername=getcvar('mlusername');
if($myuserid)
{
?>
document.writeln("<table width=\"98%\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\"><tr><td align=\"left\"><i class=\"fa fa-user\"></i> 用户名[ <a href=\"<?=$public_r[newsurl]?>e/space/?userid=<?=$myuserid?>\"><?=$myusername?></a> ]&nbsp;<i class=\"fa fa-users\"></i> <a href=\"/e/member/cp/\" target=\"_blank\"> 会员中心</a>&nbsp;<i class=\"fa fa-paper-plane\"></i> <a href=\"/e/DoInfo/ChangeClass.php?mid=1\" target=\"_blank\"> 我要投稿</a>&nbsp;<i class=\"fa fa-sign-out\"></i>  <a href=\"/e/member/doaction.php?enews=exit&ecmsfrom=9\" onclick=\"return confirm(\'确认要退出?\');\"> 退出登录</a></td></tr></table>");
<?
}
else
{
?>
document.writeln("<table width=\"98%\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\"><tr><td align=\"left\">昵称：<input name=\"username\" type=\"text\" class=\"inputText\" id=\"username1\"  value=\"匿名\" placeholder=\"昵称（必填），登录账号后不用填写\" value=\"\" size=\"16\" /></td></tr><!--<tr><td align=\"left\"><label>密码：</label><input name=\"password\" type=\"password\" class=\"inputText\" id=\"password1\" placeholder=\"密码\" value=\"\" size=\"16\" /></td></tr>--><tr><td align=\"left\"><input name=\"nomember\" type=\"checkbox\" id=\"nomember\" value=\"1\" checked=\"checked\" />匿名发表 <a href=\"/e/member/login/\" target=\"_blank\"><i class=\"fa fa-user\"></i> 登录账号</a></td></tr></table>");
<?
}
?>