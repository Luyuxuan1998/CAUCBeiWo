<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; ".$pagename;
include('moyu_cp004/header.temp.php');
$pagetext=nl2br(RepFieldtextNbsp($pagetext));
?>
<?=$spacegg?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#96C8F1">
  <tr>
    <td><b><?=$pagename?></b></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <?=$pagetext?>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
include('moyu_cp004/footer.temp.php');
?>
