


<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
//扣点
ViewOnlineKFen($showdown_r,$u,$u['userid'],$classid,$id,$pathid,$r);

$width=480;
$height=360;
$openwidth=$width+30;
$openheight=$height+60;
?>
<HTML>
<HEAD>
<TITLE><?=$r[title]?> --- 媒体播放器</TITLE>
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="js/player.css">

<SCRIPT language=javascript>
function click() {
if (event.button==2) {
alert('对不起，请勿点击右键')
}
}
document.onmousedown=click
</SCRIPT>
<BODY id=thisbody  bgcolor="#000000" topMargin=0 leftMargin=0 rightMargin=0 bottomMargin=0 style="scroll:no; overflow: hidden;" ondragstart="self.event.returnValue=false" onselectstart="self.event.returnValue=false">
<style>
.video {

    width: 100%;

	position: relative;

	padding: 0; 

	background:#000;

	height:auto;

}                                

.video iframe,

.video object, 

.video embed,

.video video{

           position: absolute; 

           top: 0;                     

           left: 0;                       

           width: 100%;                   

           height: 100%;                   

}

.video{padding-top:56.25%;/* Default ratio 16:9 */}

.video[data-ratio="16:10"]{padding-top:62.5%;}

.video[data-ratio="4:3"]{padding-top:75%;}

.video[data-ratio="3:2"]{padding-top:66.66666666666666%;}

.video[data-ratio="1:1"]{padding-top:100%;}

.video[data-ratio="2.4:1"]{padding-top:41.66666666666667%;}



.video > div{

display: block !important;

width:100% !important;

max-width:100% !important;

max-height:none !important;

min-height:0 !important;

height:100% !important;


top:0 !important;

left:0 !important;

}

</style>

<div id="a1"></div>
<script type="text/javascript" src="ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
	var videoObject = {
		container: '#a1',//“#”代表容器的ID，“.”或“”代表容器的class
		variable: 'player',//该属性必需设置，值等于下面的new chplayer()的对象
		poster:'<?=$r[titlepic]?>',//封面图片
		video:'<?=$trueurl?>'//视频地址
	};
	var player=new ckplayer(videoObject);
</script>

</body>
</html>