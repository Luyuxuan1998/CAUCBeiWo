<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
include("header.temp.php");
?>
<div class="main">
<div class="hyfans yh">
<h3><?=$me?>的粉丝</h3>
            	<ul>
<?php
$hyxx=$empire->fetch1("select feeduserid from {$dbtbpre}enewsmemberadd where userid='$getuserid'");
$hyfansnum=0;
while($b=$empire->fetch($flsql))
{
	$fansid=explode("::::::",$b['feeduserid']);
	if (in_array($userid,$fansid)){
		$hyfansnum=1;
		$fans=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$b[userid]' limit 1");
		$fansxx=$empire->fetch1("select * from {$dbtbpre}enewsmember where userid='$b[userid]' limit 1");
		$fanspic=$fans['userpic']?$fans['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
?>
					<li>
                        <a href="/e/space/?userid=<?=$fans[userid]?>" target="_blank"><img src="<?=$fanspic?>"></a>
                            <span>
                            <a href="/e/space/?userid=<?=$fans[userid]?>" class="c390" target="_blank"><?=$fansxx[username]?></a><br>
                            <?=$fans[sex]?> / <?=$fans[juzhu]?><br>
<?
$hyfduserid=explode("::::::",$hyxx['feeduserid']);
								if ($getuserid==$b[userid]){
									$hyfollow='<a href="/e/space/?userid='.$b[userid].'" class="button green small" target="_blank">我的主页</a>';
								} else{
									if (in_array($b[userid],$hyfduserid)){
								$hyfollow='<a href="javascript:void()" onclick="follow('.$b[userid].')" class="button blue small orange" id="follow'.$b[userid].'" title="取消关注">取消关注</a>';
								} else{
								$hyfollow='<a href="javascript:void()" onclick="follow('.$b[userid].')" class="button blue small" id="follow'.$b[userid].'">关注</a>';	
									}
								}
								
?>
                        <?=$hyfollow?>
                            </span>
                    </li>
<?
}
}
if ($hyfansnum=='0'){
	echo '<div class="nogz">'.$me.'暂时还没有粉丝!</div>';	
	}
?>

                    <div class="clearfix"></div>
                </ul>
            </div>
</div>

<?php
include("footer.temp.php");
?>
