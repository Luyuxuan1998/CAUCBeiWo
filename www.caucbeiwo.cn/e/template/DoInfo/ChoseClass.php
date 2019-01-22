<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='选择投稿类别';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="hy_nav tgfl yh">
            	<ul>
                	<li><a href="javascript:void()" class="selected">选择投稿类别</a></li>
            		<li><a href="javascript:void()">选择子分类</a></li>
            		<li><a href="javascript:void()">发布内容</a></li>
            	</ul>
</div>
<div class="setting yh">
            	<ul>
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
            		<li><label></label><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>" class="button green small"><?=$fontb?>发布<?=$tmodr[qmname]?><?=$fontb1?></a></li>
			<?php
			}
			?>
            	</ul>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>