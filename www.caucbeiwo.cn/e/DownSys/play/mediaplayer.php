<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>


<HTML>
<HEAD>
<TITLE><?=$r[title]?> --- 媒体播放器</TITLE>
<META HTTP-EQUIV="Expires" CONTENT="0">
<link rel="stylesheet" href="js/player.css">

<SCRIPT language=javascript>
function click() {
if (event.button==2) {
alert('对不起，您想做什么？')
}
}
document.onmousedown=click
</SCRIPT>

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

           width: 100% !important;                   

           height: 100% !important;                   

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
<BODY id=thisbody  bgcolor="#000000" topMargin=0 leftMargin=0 rightMargin=0 bottomMargin=0 style="scroll:no; overflow: hidden;" ondragstart="self.event.returnValue=false" onselectstart="self.event.returnValue=false" onmousedown="WindowMove_Start()" onmouseup="WindowMove_End()" onmousemove="WindowMove()">
<div class="video"><?=$trueurl?></div>

</body>
</html>