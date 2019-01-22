<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//公告
$spacegg='';
if($addur['spacegg'])
{
	$spacegg='<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#96C8F1">
  <tr>
    <td><b>公告</b></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            '.$addur['spacegg'].'
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<br>';
}
//导航菜单
$dhmenu='';
$modsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$dhmenu.="<td width=70 height=24 onmouseover='ChangeMenuBg(this,mod".$modr[mid].")' onmouseout='ChangeMenuBg2(this,mod".$modr[mid].")' align='center' onclick=\"self.location.href='list.php?userid=$userid&mid=$modr[mid]';\"><font color='#FFFFFF' id='mod".$modr[mid]."'><strong>".$modr[qmname]."</strong></font></td>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$spacename?></title>
<meta content="<?=$spacename?>" name="keywords" />
<meta content="<?=$spacename?>" name="description" />
<link href="/skin/moyu_cp004/css/bootstrap.min.css" rel="stylesheet">
<link href="/skin/moyu_cp004/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/animate.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> <span>
<?php
require(ECMS_PATH.'e/member/moyu_cp004/memberspacecomdefault.php');
?>
    </ul>
  </div>
</nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
  <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a> </div>
    <ul class="nav navbar-top-links navbar-right">
      <li> <span class="m-r-sm text-muted welcome-message"><a href="UserInfo.php?userid=<?=$userid?>">
        <?=$spacename?>
        </a></span> </li>
      <li class="dropdown"> <a class="dropdown-toggle count-info" href="../member/friend/add/?fname=<?=$username?>"> <i class="fa fa-heart"></i>加为好友</a> </li>
      <li class="dropdown"> <a class="dropdown-toggle count-info" href="UserInfo.php?userid=<?=$userid?>"> <i class="fa fa-trophy"></i>公司资料</a> </li>
    </ul>
  </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-9">
    <h2><?=$thispagetitle?></h2>
    <?=$public_r['add_member-gonggao']?>
    <ol class="breadcrumb">
      <li class="active">
        <?=$url?>
      </li>
    </ol>
  </div>
</div>
<div class="wrapper wrapper-content animated <?=$public_r['add_texiao']?>">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<div class="project-list">
<table class="table table-hover">
<tbody>