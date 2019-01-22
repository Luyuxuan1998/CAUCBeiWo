<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改资料';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改资料";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script type="text/javascript" src="/e/extend/avator_yecha/swfobject.js"></script>
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/SuperSlide.js"></script>
<script type="text/javascript" src="/js/jRating.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/jNotify.jquery.min.js"></script>
<script type="text/javascript" src="/js/artDialog.js"></script>
<script type="text/javascript" src="/js/iframeTools.js"></script>
<script type="text/javascript" src="/js/52img.js"></script>
<script type="text/javascript">
			function uploadevent(status){
			     status += '';
				 switch(status){
					case '1':
						jSuccess(
		'修改成功!',
		{
		  autoHide : true, 
		  clickOverlay : false,
		  MinWidth : 250,
		  TimeShown : 2000,
		  ShowTimeEffect : 200,
		  HideTimeEffect : 200,
		  LongTrip :20,
		  HorizontalPosition : 'center',
		  VerticalPosition : 'center',
		  ShowOverlay : false,
		  onClosed : function(){
		    location.reload();
		  }
		});
					break;

					case '2':
						if(confirm('js call upload')){
							return 1;
						}else{
							return 0;
						}
					break;

					case '-1':
						jNotify("取消上传!",{HorizontalPosition : 'center',VerticalPosition:'center'});
						window.location.href = "#";
					break;
					case '-2':
						jError("上传失败!",{HorizontalPosition : 'center',VerticalPosition:'center'})
						window.location.href = "#";
					break;

					default:
						alert(typeof(status) + ' ' + status);
				} 
			}
			var flashvars = {
			  "jsfunc":"uploadevent",
			  "imgUrl":"<?=$userpic?>",
			  "uploadSrc":true,
			  "showBrow":true,
			  "showCame":false,
			  "pSize":"300|300|180|180|50|50|20|20"
			};
			var params = {
				menu: "false",
				scale: "noScale",
				allowFullscreen: "true",
				allowScriptAccess: "always",
				wmode:"transparent",
				bgcolor: "#FFFFFF"
			};

			var attributes = {
				id:"FaustCplus"
			};
			swfobject.embedSWF("/e/extend/avator_yecha/FaustCplus.swf", "avator", "650", "500", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
		</script>
        	<div class="hy_nav">
            	<ul>
                	<li><a href="/e/member/cp/">我的信息</a></li>
            		<li><a href="/e/member/EditInfo/">完善资料</a></li>
            		<li><a href="/e/member/EditInfo/EditSafeInfo.php">修改密码</a></li>
                    <li><a href="/e/memberconnect/ListBind.php">绑定社区帐号</a></li>
            		<li><a href="/e/member/EditInfo/EditAvator.php" class="selected">修改头像</a></li>
            	</ul>
            </div>
            <div class="setting yh">
<form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
    <input type=hidden name=enews value=EditInfo>
            	<ul>
					<li>
<div id="avator"></div>
                    </li>
            	</ul>
                </form>
            </div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>