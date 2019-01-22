<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>

          <div align="center"> <img alt="image" class="img-circle2" src="<?=$userpic?>" width="120" height="120"/> </div>
          </span> </div>
        <div class="logo-element"> Li </div>
      </li>
      <li  class="active"> <a href="<?=$public_r['newsurl']?>"><i class="fa fa-home"></i> <span class="nav-label">网站主页</span></a> </li>
      <li> <a href="<?=$public_r['newsurl']?>e/member/cp/"><i class="fa fa-align-justify"></i> <span class="nav-label">管理面板</span></a> </li>
      <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">帐号</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/">修改资料</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/EditSafeInfo.php">修改安全信息</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/my/">帐号状态</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/fava/">收藏夹</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/friend/">好友列表</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/memberconnect/ListBind.php">绑定外部登录</a></li>
        </ul>
      </li>
      <li> <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">站内消息</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/member/msg/AddMsg/?enews=AddMsg">发送消息</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/msg/">消息列表</a></li>