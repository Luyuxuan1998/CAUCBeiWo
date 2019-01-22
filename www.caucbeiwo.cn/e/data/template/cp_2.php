<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
<footer id="footer">
  <div class="content">
    <nav class="inner">
      <aside id="describe" class="group">
        <h3>关于我们</h3>
        <p class="describe-text"><?=$public_r['add_foot_about']?></p>
        
        <p class="stamp"></p>
      </aside>
      <aside class="group">
        <h3 class="title">关于</h3>
        <div class="menu-about-container">
          <ul id="menu-about" class="menu">
            [showclasstemp]16,1,0,0[/showclasstemp]
          </ul>
        </div>
      </aside>
      <aside class="group">
        <h3 class="title">栏目</h3>
        <div class="menu-category-container">
          <ul id="menu-category" class="menu">
            [showclasstemp]'0',1,0,0[/showclasstemp]
          </ul>
        </div>
      </aside>
<?php
if($GLOBALS[navclassid]) //非首页
{
?>

<?php
}
else 
{
?>
      <aside class="group">
        <h3 class="title">友情链接</h3>
        <div class="menu-links-container">
          <ul id="menu-links" class="menu">
            [e:loop={'select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',20,24,0}]
            <li><a target="_blank" href="<?=$bqr[lurl]?>"><?=$bqr[lname]?></a></li>
[/e:loop]
          </ul>
        </div>
      </aside>
<?php
}
?>
      <aside id="social" class="group">
        <h3 class="title">关注</h3>
        <ul>
          <li>Email: <a href="mailto:<?=$public_r['add_email']?>"><?=$public_r['add_email']?></a></li>
          <li class="social-email">
          </li>
          <li class="social-icon">  <a class="social-qq" rel="external nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_qq']?>&site=qq&menu=yes"><i class="fa fa-qq"></i><span class="text-replace">QQ在线联系</span></a>  
          <a id="social-weixin" data-pop="weixin" class="social-weixin"><i class="fa fa-weixin"></i><span class="text-replace">微信</span></a> </li>
        </ul>
      </aside>
      <div id="weixin" class="popupbox weixin-box">
        <div class="weixin-header">被窝云资源公众号二维码<a class="popup-close weixin-close">×</a></div>
        <div class="weixin-content"><span class="weixin-tip">打开微信，对准下方二维码“扫一扫”。</span><img src="<?=$public_r['add_ewm']?>" /></div>
      </div>
    </nav>
    <section class="site-info">
      <p class="copyright">Copyright &copy; 2012-2015 <a href="http://www.caucbeiwo.cn">航大被窝云资源</a> All Rights Reserved. <?=$public_r['add_icp']?>  <?=$public_r['add_tongji']?></p>
    </section>
  </div>
</footer>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#aFloatTools_Show").click(function(){
		$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){
			$('#divFloatToolsView').show();
		});
		$('#aFloatTools_Show').attr('style','display:none');
		$('#aFloatTools_Hide').attr('style','display:block');
	});
	
	$("#aFloatTools_Hide").click(function(){
		$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){
			$('#divFloatToolsView').hide();
		});
		$('#aFloatTools_Show').attr('style','display:block');
		$('#aFloatTools_Hide').attr('style','display:none');
	});
	
});
</script>

<div class="rides-cs">

	<div class="floatL">
		<a style="display:block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" href="javascript:void(0);">展开</a>
		<a style="display:none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" href="javascript:void(0);">收缩</a>
	</div>
	
	<div id="divFloatToolsView" class="floatR" style="display:none">
		<div class="cn">
			<?=$public_r['add_kf']?>
		</div>
	</div>
	
</div>

</body>
</html>