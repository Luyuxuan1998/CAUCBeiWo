<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$r[title]?>的下载页面</title>
<link href="/skin/moyu_cp004/css/bootstrap.min.css" rel="stylesheet">
<link href="/skin/moyu_cp004/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/animate.css" rel="stylesheet">
<link href="/skin/moyu_cp004/css/style.css" rel="stylesheet">
</head>
<body style="text-align:center; margin:0 auto">
<div style="margin: 80px 0px;    display: inline-block;">
<table">
  <tbody>
<tr>
      <td width="50%" style="font-size: 14px; font-family:'微软雅黑';text-align:center;padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#ffffff; background:  #FF7D00;"><a style="color:#ffffff" href="/">返回首页</a></td>
      <td width="50%" style="font-size: 14px; font-family:'微软雅黑';text-align:center;padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#ffffff; background:  #FF7D00;"><a style="color:#ffffff" href="/e/member/cp/">会员中心</a></td>
      </tr>
  </tbody>
</table>
       <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <tbody>
      <tr>
      <td width="12%" style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">下载名称:</td>
      <td colspan="5" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9"><?=$r[title]?></td>
      </tr>
       <tr>
      <td style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">下载地址:</td>
      <td colspan="3" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9"><a href="<?=$url?>" style="color:#000; text-decoration:none" target="_blank"><--点这里下载本资源--></a></td>


      <td colspan="2" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid  #FFFFFF border-right:1px solid #FFFFFF;border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9">提取密码：<?=$r[pan_s]?></td>
    </tr>
     <td colspan="6" style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid #F3F3F3; font-weight: bold; color: #CCCCCC; height:60px ">如果资源不能下载，，提取密码错误，链接失效等下载问题，请反馈给我们会在第一时间给您处理！</td>
      </tr>
  </tbody>
</table>
</div> 
</div>
</td>
</tr>
</table>
<!-- Mainly scripts --> 
<script src="/skin/moyu_cp004/js/jquery-2.1.1.js"></script> 
<script src="/skin/moyu_cp004/js/bootstrap.min.js"></script> 
<script src="/skin/moyu_cp004/js/plugins/metisMenu/jquery.metisMenu.js"></script> 
<script src="/skin/moyu_cp004/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 
<script type='text/javascript' src='/member.js'></script> 

<!-- Custom and plugin javascript --> 
<script src="/skin/moyu_cp004/js/inspinia.js"></script> 
<script src="/skin/moyu_cp004/js/plugins/pace/pace.min.js"></script> 
</body>
</html>