<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>控制面板</a>&nbsp;>&nbsp;修改安全信息";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
  <script type="text/javascript">
   function uploadevent(status){
	//alert(status);
        status += '';
     switch(status){
     case '1':
		var time = new Date().getTime();
		document.getElementById('avatar_priview').innerHTML = "头像1 : <img src='1.png?" + time + "'/> <br/> 头像2: <img src='2.png?" + time + "'/><br/> 头像3: <img src='3.png?" + time + "'/>" ;
		
	break;
     break;
     case '-1':
	  window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>

<ul class="tabui">
	<li><a href="../my/">账号状态</a></li>
	<li><a href="../EditInfo/" class="bg">修改基本资料</a></li>
	<li><a href="EditSafeInfo.php">密码安全修改</a></li>
	<li class="on"><a href="EditUserPic.php" class="bg">修改头像</a></li>
</ul>
<div class="table-ui">
<br />

  <div id="altContent">


<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="/skin/member/swfuppic/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=/skin/member/swfuppic/default.jpg&uploadUrl=/e/extend/userpic/index.php&uploadSrc=false&pSize=162|162|48|48|20|20" />
<EMBED src="/skin/member/swfuppic/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=/skin/member/swfuppic/default.jpg&uploadUrl=/e/extend/userpic/index.php&uploadSrc=false&pSize=162|162|48|48|20|20"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
</div>


</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>