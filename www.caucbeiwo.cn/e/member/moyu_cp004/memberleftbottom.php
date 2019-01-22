<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>

      <li> <a href="#"><i class="fa fa-heart"></i> <span class="nav-label">会员空间</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$tmgetuserid?>">我的空间</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/mspace/SetSpace.php">设置空间</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/mspace/ChangeStyle.php">选择模板</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/mspace/gbook.php">管理留言</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/mspace/feedback.php">管理反馈</a></li>
        </ul>
      </li>
      <li> <a href="#"><i class="fa fa-database"></i> <span class="nav-label">财务</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/payapi/">在线支付</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/buygroup/">在线充值</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/card/">点卡充值</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/buybak/">点卡充值记录</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/downbak/">下载消费记录</a></li>
        </ul>
      </li>
      <li> <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">商城</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/ShopSys/ListDd/">我的订单</a></li>
          <li><a href="#ecms" onclick="window.open('<?=$public_r['newsurl']?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/ListAddress.php">管理配送地址</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/AddAddress.php?enews=AddAddress">增加地址</a></li>
        </ul>
      </li>
      <li> <a href="#"> <i class="fa fa-users"></i><span class="nav-label">会员列表</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="<?=$public_r['newsurl']?>e/member/list/">全部会员</a></li>
          <li><a href="<?=$public_r['newsurl']?>e/member/friend/">我的好友</a></li>
          </ul>
      </li>
      <li> <a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');"><i class="fa fa-sign-out"></i><span class="nav-label">退出</span> <span class="fa arrow"></span></a> </li>