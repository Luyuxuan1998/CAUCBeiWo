<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
$userpic=$addr['userpic']?$addr['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
//--------------- 界面参数 ---------------
$selffile=eReturnSelfPage(0);
if(stristr($selffile,'/member/msg'))
	{
        $znxx=' class=selected';
	}
    elseif(stristr($selffile,'e/DoInfo'))
    {
		$wdtg=' class=selected';
    }
	elseif(stristr($selffile,'e/ShopSys'))
    {
		$wdshop=' class=selected';
    }
    elseif(stristr($selffile,'member/fava'))
    {
		$wdsc=' class=selected';
    }
    elseif(stristr($selffile,'e/member/friend'))
    {
		$wdhy=' class=selected';
    }
    elseif(stristr($selffile,'e/member/my'))
    {
		$wdjf=' class=selected';
    }
    else
    {
		$grzx=' class=selected';
    }
//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
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
if ($addr['diybg']==""){
 $bg="/yecha/blogbg.jpg";
} else {
 $bg=$addr['Diybg'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$thispagetitle?></title>
<meta name="keywords" content=" [!--pagekey--] " />
<meta name="description" content=" [!--pagedes--]" />
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/hycenter.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/SuperSlide.js"></script>
<script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/jNotify.jquery.min.js"></script>
<script type="text/javascript" src="/js/artDialog.js"></script>
<script type="text/javascript" src="/js/iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<style>
 body{ background:#b7e3c1 url(<?=$bg?>) center top no-repeat fixed;}
</style>
<script type="text/javascript">
$(function() {
$('#file_upload').uploadify({
				'formData'     : {
				'classid' :<?=$_GET[classid]?>,'userid':<?=$tmgetuserid?>,'username':'<?=$tmgetusername?>'},
				'progressData'	: 'both',
				'auto'    		: true,
				'debug'         : false,
				'removeTimeout' : 1,
				'fileSizeLimit' : '300MB',
				'fileTypeExts'  : '*.rar;*.zip;*.jpg;*.psd;*.ai;*.cdr;*.tif;*.abr;*.eip;*.indd;*.fla;*.max;*.ppt;*.pptx;*.dwg;*.dxf;*.flp;*.avi;*.mov;*.mpg;*.eps;',
				'buttonText': '',
				'height': 50,
				'width': 158,
				'multi': false,
				'swf'      : '/e/extend/swfupload/uploadify.swf',
				'uploader' : '/e/extend/swfupload/uploadify.php',
				'onUploadSuccess': function(file, data, response){
					if (data=="error"){
						alert('您上传的格式有误!');	
					} else if(data=="nologin"){
						alert("请登陆后再上传!");
					} else {
						$("#file_upload-queue").html('上传成功!<input name="downpath" type="hidden" value="'+data+'">');
					}
				}
			});
});
</script>

</head>

<body>
<!--[if lt IE 7]>
<div class="upgradeBrowser"><span>您的浏览器版本太低呦,建议换遨游云浏览器:)</span></div>
<![endif]-->
<div id="header">
    	<div class="block">
        	<div class="fl logo">
            	<a href="/" title="我爱图库"></a>
            </div>
            <div class="fl nav" id="nav-categories">
            	<?php
require(ECMS_PATH.'e/template/incfile/nav.php');
?>
            </div>
            <div class="fr login">
            	<script src="/e/member/login/loginjs2.php"></script>
            </div>
            <!--<div class="searchbox">
            	<form name="searchform" method="GET" action="/e/sch/index.php">
                  <input type="hidden" name="field" value="1">
                  <input id="top_srh" name="keyboard" value="" placeholder="请输入你要查找的内容..." autofocus x-webkit-speech rel="xzfl">
                  <input class="top_an" value="" type="submit" name="Submit" title="点击搜索">
                  <div class="chooseS" style="display:none;">
                	<table width="100%">
                    	<tr>
                        	<td><input type="radio" name="classid" value="" checked/><label for="a1" >全部</label></td>
                            <td><input type="radio" name="classid" value="91" /><label for="a2">图片</label></td>
                            <td><input type="radio" name="classid" value="101" /><label for="a3">代码</label></td>
                        </tr>
                        <tr>
                        	<td><input type="radio" name="classid" value="122" /><label for="a4">工具</label></td>
                            <td><input type="radio" name="classid" value="65" /><label for="a5">模板</label></td>
                            <td><input type="radio" name="classid" value="132" /><label for="a6">定制</label></td>
                        </tr>
                    </table>
                </div>

				</form>
            </div>-->
        </div>
    </div>
    <div class="hymain tgmain" style="background:#fff;">
    	<div class="hytopmenu yh f14">
	<?php
	if($tmgetuserid)	//已登录
	{
	?>
            <span>我的:</span>
        	<ul>
        		<li><a href="/e/member/cp/">会员中心</a></li>
        		<li><a href="<?=$public_r['newsurl']?>e/member/msg/">我的消息</a></li>
        		<li><a href="/e/DoInfo/ListInfo.php?mid=10">我的文章</a></li>
        		<li><a href="<?=$public_r['newsurl']?>e/member/my/">我的积分</a></li>
        		<li><a href="<?=$public_r['newsurl']?>e/space/gbook.php?userid=<?=$tmgetuserid?>">我的留言</a></li>
                <li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$tmgetuserid?>">我的主页</a></li>
        	</ul>
   <?
	}
	else	//游客
	{
	?>
    <span>游客,您好:</span>您还未登录,请先<a href="/e/member/login/">登陆</a> 或者 <a href="/e/member/register/ChangeRegister.php" target="_blank">注册</a>! 体验更多精彩服务.
	<?php
	}
	?>
        </div>
<div style="margin:10px; width:auto;">
            