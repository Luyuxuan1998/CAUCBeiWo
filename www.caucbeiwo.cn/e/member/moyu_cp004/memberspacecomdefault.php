<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>

<div align="center"> <img alt="image" class="img-circle2" src="<?=$userpic?>" width="120" height="120"/> </div>
</span>
</div>
<div class="logo-element"> Li </div>
</li>
<li  class="active"> <a href="<?=$public_r['newsurl']?>"><i class="fa fa-home"></i> <span class="nav-label">网站主页</span></a> </li>
<li> <a href="../member/cp"><i class="fa fa-align-justify"></i> <span class="nav-label">管理面板</span></a> </li>
<li> <a href="/e/space/list.php?tempid=1&userid=<?=$userid?>&mid=1"><i class="fa fa-file-text"></i> <span class="nav-label">我的文章</span> </a> </li>
<li> <a href="../member/friend/add/?fname=<?=$username?>"><i class="fa fa-heart"></i> <span class="nav-label">加为好友</span> </a> </li>
<li> <a href="../member/msg/AddMsg/?username=<?=$username?>"><i class="fa fa-send-o"></i> <span class="nav-label">发短消息</span> </a> </li>
<li> <a href="UserInfo.php?userid=<?=$userid?>"><i class="fa fa-trophy"></i> <span class="nav-label">公司资料</span> </a> </li>
<li> <a href="gbook.php?userid=<?=$userid?>"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">留言板</span> </a> </li>
<li> <a href="feedback.php?userid=<?=$userid?>"><i class="fa fa-leaf"></i> <span class="nav-label">反馈信息</span> </a> </li>
<li> <a href="UserInfo.php?userid=<?=$userid?>"><i class="fa fa-refresh"></i> <span class="nav-label">访问
  <?=$addur[viewstats]?>
  次</span> </a> </li>
