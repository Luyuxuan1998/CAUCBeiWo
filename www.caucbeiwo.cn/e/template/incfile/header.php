<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.jpg';

//加减号图片地址
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//上下横线背景色
$bgcolor_line='#4FB4DE';

//其它色调可修改CSS部分

//--------------- 界面参数 ---------------


//识别并显示当前菜单
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	echo'<script>turnit(do'.$menuname.',"'.$menuname.'img");</script>';
	?>
<script>
	do<?=$menuname?>.style.display="";
	document.images.<?=$menuname?>img.src="<?=$noaddimgurl?>";
	</script>
<?php
}

//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';

//数据
$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$tmgetuserid' limit 1");
$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecmspic/random/userpic/'.rand(1,66).'.gif';	
if(empty($r[userid])||$r[checked]==0)

//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$thispagetitle?></title>
<link href="/skin/moyu_cp004/css/bootstrap.min.css" rel="stylesheet">
<link href="/skin/moyu_cp004/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/animate.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/skin/ecms147/images/favicon.ico">
<script type="text/javascript" src="<?=$public_r['newsurl']?>e/data/js/ajax.js"></script>
</head>
<body>
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <?php
	if($tmgetuserid)	//已登录
	{
	?>
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> <span>
<?php
require(ECMS_PATH.'e/member/moyu_cp004/memberlefttop.php');
?>
        </ul>
      </li>
      <li> <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">投稿</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <?php
			//输出可管理的模型
			$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
			while($tmodr=$empire->fetch($tmodsql))
			{
				$fontb="";
				$fontb1="";
				if($tmodr['mid']==$tgetmid)
				{
					$fontb="<b>";
					$fontb1="</b>";
				}
			?>
          <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid']?>">
            <?=$fontb?>
            管理
            <?=$tmodr[qmname]?>
            <?=$fontb1?>
            </a></li>
          <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>">
            <?=$fontb?>
            <i class="fa fa-leaf"></i>发布
            <?=$tmodr[qmname]?>
            <?=$fontb1?>
            </a></li>
          <?php
			}
			?>
        </ul>
      </li>
<?php
require(ECMS_PATH.'e/member/moyu_cp004/memberleftbottom.php');
?>
    </ul>
  </div>
</nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
<nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
  <div class="navbar-header"> <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a> </div>
  <?php
	}
	else	//游客
	{
	?>
  <ul class="nav metismenu" id="side-menu">
    <li class="nav-header">
      <div class="dropdown profile-element"> <span>
     <?php
require(ECMS_PATH.'e/member/moyu_cp004/memberleft.php');
?>
    <li> <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">投稿</span> <span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">
        <?php
			//输出可管理的模型
			$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
			while($tmodr=$empire->fetch($tmodsql))
			{
				$fontb="";
				$fontb1="";
				if($tmodr['mid']==$tgetmid)
				{
					$fontb="<b>";
					$fontb1="</b>";
				}
			?>
        <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid']?>">
          <?=$fontb?>
          管理
          <?=$tmodr[qmname]?>
          <?=$fontb1?>
          </a></li>
        <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>">
          <?=$fontb?>
          <i class="fa fa-leaf"></i>发布
          <?=$tmodr[qmname]?>
          <?=$fontb1?>
          </a></li>
        <?php
			}
			?>
      </ul>
    </li>    
<?php
require(ECMS_PATH.'e/member/moyu_cp004/memberbuycar.php');
?>
  </ul>
  </div>
</nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
  <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a> </div>
    <?php
	}
	?>
    <?php
	if($tmgetuserid)	//已登录
	{
	?>
    <ul class="nav navbar-top-links navbar-right">
      <li> <span class="m-r-sm text-muted welcome-message">您好，<strong>
        <?=$tmgetusername?>
        </strong> &lt;
        <?=$tmgetgroupname?>
        &gt;</span> </li>
      <li class="dropdown"> <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>"> <i class="fa fa-home"></i>网站主页</a> </li>
      <li> <a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');"> <i class="fa fa-sign-out"></i>退出登录</a> </li>
    </ul>
    <?php
	}
	else	//游客
	{
	?>
    <ul class="nav navbar-top-links navbar-right">
      <li> <span class="m-r-sm text-muted welcome-message">您好，<strong>游客</strong></span> </li>
      <li class="dropdown"> <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>"> <i class="fa fa-home"></i>网站主页</a> </li>
      <li class="dropdown"> <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>e/member/login/"> <i class="fa fa-sign-in"></i>会员登录</a> </li>
    </ul>
    <?php
	}
	?>
  </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-9">
    <h2><?=$thispagetitle?></h2>
    <ol class="breadcrumb">
      <li class="active">
        <?=$url?>
      </li>
    </ol>
  </div>
</div>
<div class="wrapper wrapper-content animated">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<div class="project-list table-responsive">