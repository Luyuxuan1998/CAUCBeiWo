<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加收藏夹';
?>
<link href="/yecha/Common.css" rel="stylesheet" type="text/css" />
<link href="/yecha/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/min/?b=js&amp;f=SuperSlide.js,jRating.jquery.min.js,jquery.timeago.js,jquery.lazyload.min.js,jNotify.jquery.min.js,artDialog.js,iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<style>
body{ background:#fff; overflow:hidden;}
</style>
<script type="application/javascript">
	function closetc(){
		art.dialog.close();
		}
</script>
        <table width="95%" border="0" cellpadding="3" cellspacing="1" class="tableborder f14">
          <form name="form1" method="POST" action="../../doaction.php">
<?
$userid=(int)getcvar('mluserid');
if ($userid=='0'){
?>
	<tr class="header"> 
              <td height="25">
              <div align="center">您还未登陆!请<a href="javascript:void()" onClick="login()" class="c4095ce">登陆</a>后再收藏!
              	<div class="tips"><span class="f12">如果您还没有会员帐号,您可以: <a href="/e/member/register/ChangeRegister.php" class="c4095ce" target="_blank">点击注册</a></span></div>
              </div>
              </td>
               <tr> 
              <td height="25" bgcolor="#FFFFFF"><div class="tdbutton"> 
                  <a href="/e/member/login/" class="button small green" target="_blank">会员登陆</a>
                  &nbsp;&nbsp; 
                  <input type="button" name="Submit2" value="点击关闭" onclick="closetc()" class="button small gray">
                </div></td>
            </tr>
    </tr>
<?
} else {
$m=$empire->fetch1("select favaid from {$dbtbpre}enewsfava where id='$id' and classid='$classid' and userid='$userid'");
if (!empty($m['favaid'])){
?>
	 <tr class="header"> 
              <td height="25">
              <div align="center">您已收藏过此篇文章!</div>
              </td>
               <tr> 
              <td height="25" bgcolor="#FFFFFF"><div class="tdbutton"> 
                  <a href="/e/member/fava/" class="button small green" target="_blank">查看收藏</a>
                  &nbsp;&nbsp; 
                  <input type="button" name="Submit2" value="点击关闭" onclick="closetc()" class="button small gray">
                </div></td>
            </tr>
    </tr>
<?
	} else {
?>
		 <tr class="header"> 
              <td height="25">
                  <input name="enews" type="hidden" id="enews" value="AddFava">
                  增加收藏夹 
                  <input name="from" type="hidden" id="from2" value="<?=$from?>">
                  <input name="classid" type="hidden" id="classid2" value="<?=$classid?>">
                  <input name="id" type="hidden" id="id2" value="<?=$id?>">
                  <a href="../FavaClass/" target="_blank" class="c4095ce f12">+增加收藏分类</a></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF">收藏页面：<a href='<?=$titleurl?>' target=_blank class="c4095ce f12"><?=stripSlashes($r[title])?></a></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF">选择收藏分类: 
                  <select name="cid" id="select">
                    <option value="0">不设置</option>
                    <?=$select?>
                  </select>
                </td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF"><div class="tdbutton"> 
                  <input type="submit" name="Submit" value="收藏" class="button small green">
                  &nbsp;&nbsp; 
                  <input type="button" name="Submit2" value="关闭" onclick="closetc()" class="button small gray">
                </div></td>
            </tr>
<?
		}}
?>    
          </form>
        </table>

