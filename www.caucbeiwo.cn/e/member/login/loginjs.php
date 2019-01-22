<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//关闭模块
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
	//数据
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	
		
	$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$myuserid' limit 1");
  	$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecmspic/random/userpic/'.rand(1,68).'.gif';
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//会员等级
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//点数
	$userfen=$r[userfen];
	//余额
	$money=$r[money];
	//天数
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//是否有短消息
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>您有新消息</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>
document.write("<li id=\"login-reg\">                    <div class=\"user-admin\"><a id=\"user-admin\" href=\"/e/member/cp/\">控制台<i class=\"fa fa-caret-down\"></i></a></div>                    <div class=\"user-avatar\"><img alt=\'\' src=\'<?=$userpic?> \' class=\'avatar avatar-31 photo\' height=\'31\' width=\'31\' /></div>                    <div class=\"user-panel\">                         <a title=\"前往我的控制台\" class=\"username\" href=\"/e/member/cp/\"><?=$myusername?></a>                         <a href=\"/e/DoInfo/\"><i class=\"fa fa-pencil-square-o\"></i>发布内容</a>                         <a href=\"/e/member/EditInfo/\"><i class=\"fa fa-cog\"></i>编辑资料</a>                         <a id=\"user-logout\" href=\"/e/member/doaction.php?enews=exit\"><i class=\"fa fa-sign-out\"></i>退出帐号</a>                    </div>                </li>");
<?
}
else
{
?>
document.write("<li id=\"login-reg\">          <div><a href=\"/e/member/login/\" class=\"user-signin\">登录</a></div>          <div><a href=\"/e/member/register/ChangeRegister.php\" class=\"user-reg\">注册</a></div>        </li>");
<?
}
?>