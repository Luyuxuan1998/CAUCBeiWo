<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>选择好友</title>
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/min/?b=js&amp;f=SuperSlide.js,jRating.jquery.min.js,jquery.timeago.js,jquery.lazyload.min.js,jNotify.jquery.min.js,artDialog.js,iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<script>
function ChangeHy()
{
	var origin = artDialog.open.origin;
	var aValue = document.getElementById('fname').value;
	var input = origin.document.getElementById('to_username2');
	input.value = aValue;
	input.select();
	art.dialog.close();
}
</script>
<style>
body{ background:#fff; overflow:hidden;}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="changeuser" method="GET" action="index.php?<?=$addvar?>">
    <tr class="header"> 
      <td height="23" class="f12">选择您的好友</td>
    </tr>
    <tr> 
      <td width="82%" height="25" bgcolor="#FFFFFF" class="f12">分类：
        <select name="cid" id="select" onchange=window.location='index.php?<?=$addvar?>&cid='+this.options[this.selectedIndex].value>
          <option value="0">显示全部</option>
          <?=$select?>
        </select></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">
<select name="fname" size="16" id="fname" style="width:360px">
<?=$hyselect?>
        </select></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">
<input type="button" name="Submit" value="选择" onClick="ChangeHy();" class="button small green"></td>
    </tr>
</form>
  </table>
</body>
</html>