<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
if($returnshowplnum==1)//返回总评论数显示
{
	echo $num."<!--empirecms.infocomment-->";
}
?>
<?php
$plstep=$num-$page*$line;//起始楼层
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='匿名';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
			}
		$addr=$empire->fetch1("select userpic from phome_enewsmemberadd where userid='$r[userid]'");

	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=RepPltextFace(stripSlashes($r['saytext']));//替换表情
	$includelink=" onclick=\"javascript:document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
?>
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" style="word-break:break-all; word-wrap:break-all;line-height: 32px; padding: 9px 9px 1px; margin-top: 22px; border-radius: 5px; border: 1px dotted rgb(221, 221, 221); font-size: 14px;border-collapse:separate;word-wrap:break-word;">
		<tr> 
          <td height="30"><span class="name1"> 
            <font size="4" color="#b1b1b1"><img src="<?=$addr[userpic]?$addr[userpic]:'/skin/ecmspic/random/userpic/'.rand(1,68).'.gif'?>" border="0"> <?=$plusername?></font>  <font  size="2" color="#d1d1d1">ip:<?=$sayip?>   <?=$saytime?></font>
                         </span></td>
          <td><div align="right"><font  size="6" color="#e9e9e9"> 
                <?=$plstep?>楼</font> </div></td>
        </tr>
        <tr valign="top"> 
          <td height="50" colspan="2" class="text"> 
            <?=$saytext?>
          </td>
        </tr>
        <tr> 
          <td height="30">&nbsp;</td>
          <td><div align="right" class="re"><a href="#tosaypl"<?=$includelink?>>回复</a>&nbsp; 
              <a href="JavaScript:makeRequest('<?=$public_r[newsurl]?>e/pl/doaction.php?enews=DoForPl&doaction=<?=$doaction?>&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">支持</a>[<span id="zcpldiv<?=$r[plid]?>"> 
              <?=$r[zcnum]?>
              </span>]&nbsp; <a href="JavaScript:makeRequest('<?=$public_r[newsurl]?>e/pl/doaction.php?enews=DoForPl&doaction=<?=$doaction?>&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">反对</a>[<span id="fdpldiv<?=$r[plid]?>"> 
              <?=$r[fdnum]?>
              </span>] </div></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td background="/skin/ecmspl/img/plhrbg.gif"></td>
        </tr>
      </table>
      
<?php
	//楼层
	$plstep=$plstep-1;
}
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td><div class="page5" align="right"><?=$listpage?></div></td>
  </tr>
</table>