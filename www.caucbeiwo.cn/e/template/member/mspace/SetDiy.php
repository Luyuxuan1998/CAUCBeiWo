<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='个性化设置 - 吾爱图库';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改资料";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
        	<div class="hy_nav">
            	<ul>
            		<li><a href="/e/member/mspace/SetSpace.php">空间设置</a></li>
<li><a href="/e/member/mspace/SetDIY.php" class="selected">个性化设置</a></li>
            		<li><a href="/e/member/mspace/ChangeStyle.php">模板选择</a></li>
                    <li><a href="/e/member/mspace/gbook.php">空间留言</a></li>
            		<li><a href="/e/member/mspace/feedback.php">空间反馈</a></li>
                    <li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$tmgetuserid?>" target="_blank">预览空间</a></li>
            	</ul>
            </div>
            <div class="setting yh">
    <form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
    <input type=hidden name=enews value=EditInfo>
    <input type=hidden name=ecmsfrom value="9"> 
            	<ul>
                    <li><label>用户名</label><?=$user[username]?></li>
                    <li><label>我的幸运物</label><input type="file" name="xingyunfile" size="45"> <a href="javascript:void()" onClick="xingyun()" class="viewxy">查看演示</a></li>
                    <li><label>自定义空间背景</label><input type="file" name="Diybgfile" size="45"></li>
                    <? 
					if ($addr[Diybg]!==""){
                    echo '<li class="diybg"><label></label><img src="'.$addr[Diybg].'" /></li>';}
                    ?>
                    <li><label></label><input name="lockBgImg[]" type="checkbox" value=""<?=strstr($addr[lockBgImg],"||")?' checked':''?>> 锁定背景图位置</li>
                    <li><label></label><input name="bgsize[]" type="checkbox" value=""<?=strstr($addr[bgsize],"||")?' checked':''?>> 背景图缩放到100%</li>
                    <li><label>背景平铺</label><select name="repeatBg" id="repeatBg"><option value="repeat-x"<?=$addr[repeatBg]=="repeat-x"?' selected':''?>>横向平铺</option><option value="repeat-y"<?=$addr[repeatBg]=="repeat-y"?' selected':''?>>纵向平铺</option><option value="repeat"<?=$addr[repeatBg]=="repeat"?' selected':''?>>全部平铺</option><option value="no-repeat"<?=$addr[repeatBg]=="no-repeat"?' selected':''?>>不重复</option></select></li>
                    <li><label>背景对齐</label><input name="Bgalign" type="radio" value="left"<?=$addr[Bgalign]=="left"?' checked':''?>> 居左 <input name="Bgalign" type="radio" value="center"<?=$addr[Bgalign]=="center"?' checked':''?>> 居中 <input name="Bgalign" type="radio" value="right"<?=$addr[Bgalign]=="right"?' checked':''?>> 居右</li>
                    <li><label>背景颜色</label><input name="bgcolor" type="color" id="bgcolor" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[bgcolor]))?>" size=""></li>
            		<li><label></label><input type='submit' name='Submit' value='保存信息' class="button blue medium"></li>
                    <div style="display:none">
                    <li><label>性别</label><select name="sex" id="sex"><option value="男"<?=$addr[sex]=="男"?' selected':''?>>男</option><option value="女"<?=$addr[sex]=="女"?' selected':''?>>女</option><option value="保密"<?=$addr[sex]=="保密"?' selected':''?>>保密</option></select></li>
<li><label>职业</label><select name="job" id="job"><option value="设计师"<?=$addr[job]=="设计师"?' selected':''?>>设计师</option><option value="程序员"<?=$addr[job]=="程序员"?' selected':''?>>程序员</option><option value="学生"<?=$addr[job]=="学生"?' selected':''?>>学生</option><option value="爱好者"<?=$addr[job]=="爱好者"?' selected':''?>>爱好者</option><option value="其他"<?=$addr[job]=="其他"?' selected':''?>>其他</option></select></li>
<li><label>现居</label><input name="juzhu" type="text" id="juzhu" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[juzhu]))?>" size="" class="input_text"></li>
<li><label>QQ号码</label><input name="oicq" type="text" id="oicq" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[oicq]))?>" class="input_text"></li>
<li><label>简介</label><textarea name="saytext" cols="65" rows="10" id="saytext" class="input_area"><?=$ecmsfirstpost==1?"":stripSlashes($addr[saytext])?></textarea></li>
                    </div>
            	</ul>
                </form>
            </div>
            <style>
.yanshi { position:absolute; top:40px; left:50%; width:500px; height:242px; background:url(/yecha/xingyun.png) right bottom no-repeat; z-index:10;}
</style>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>