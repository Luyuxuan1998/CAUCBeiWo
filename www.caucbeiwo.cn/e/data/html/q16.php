<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>商品名称*</td><td bgcolor='ffffff'><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题*</td><td bgcolor='ffffff'><input name="ftitle" type="text" size=42 id="ftitle" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'ftitle',stripSlashes($r[ftitle]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>关键字</td><td bgcolor='ffffff'><input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>商品图片*</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作者</td><td bgcolor='ffffff'><input name="writer" type="text" id="writer" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'writer',stripSlashes($r[writer]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>信息来源</td><td bgcolor='ffffff'><input name="befrom" type="text" id="befrom" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'befrom',stripSlashes($r[befrom]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>下载地址</td><td bgcolor='ffffff'><input type="file" name="downpathfile" size="45">把下载地址放到TXT文本文件里上传，管理员审核的时候会帮你整理发布！
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网盘密码</td><td bgcolor='ffffff'>
<input name="pan_s" type="text" id="pan_s" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'pan_s',stripSlashes($r[pan_s]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>在线观看地址</td><td bgcolor='ffffff'><input type="file" name="onlinepathfile" size="45">
<input type="hidden" name="onlinepathmtfile" value=1>把观看地址放到TXT文本文件里上传，管理员审核的时候会帮你整理发布！
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>购买价格*</td><td bgcolor='ffffff'>
<input name="price" type="text" id="price" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'price',stripSlashes($r[price]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>库存*</td><td bgcolor='ffffff'>
<input name="pmaxnum" type="text" id="pmaxnum" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'pmaxnum',stripSlashes($r[pmaxnum]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>外部购买地址（淘宝客）</td><td bgcolor='ffffff'>
<input name="taobao" type="text" id="taobao" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'taobao',stripSlashes($r[taobao]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>市场价格</td><td bgcolor='ffffff'>
<input name="tprice" type="text" id="tprice" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'tprice',stripSlashes($r[tprice]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>积分购买</td><td bgcolor='ffffff'>
<input name="buyfen" type="text" id="buyfen" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'buyfen',stripSlashes($r[buyfen]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>商品简介*</td><td bgcolor='ffffff'><textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>商品介绍*</div></td></tr></table><div style='background-color:#D0D0D0'><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":DoReqValue($mid,'newstext',stripSlashes($r[newstext])),"Default","","300","100%")?></div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'></table>