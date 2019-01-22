<?php
define('EmpireCMSAdmin','1');
require("../../../class/connect.php");
require("../../../class/db_sql.php");
require("../../../class/functions.php");
require("../../../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=2;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();

$filepass=(int)$_GET['filepass'];
$classid=(int)$_GET['classid'];
$infoid=(int)$_GET['infoid'];
$modtype=(int)$_GET['modtype'];
$ecmsdo=(int)$_GET['ecmsdo'];
$tranfrom=(int)$_GET['tranfrom'];
$oldmorepicnum=(int)$_GET['oldmorepicnum'];
$type=1;
$enews='DoFlashTranMore';
if(empty($classid))
{
	printerror('ErrorUrl','history.go(-1)');
}
include('tranmorefun.php');
if(!defined('EmpireCMSDefSession'))
{
	session_start();
	define('EmpireCMSDefSession',TRUE);
}
$otherrndr=DoECreateOtherRnd($logininid,$loginin,$loginrnd,0);
tranmore_SetUserLogin($logininid,$loginin,$loginrnd);
$loginpostcs=',"ckuserid":"'.$logininid.'","ckusername":"'.$loginin.'","ckrnd":"'.$loginrnd.'","otherpass":"'.$otherrndr['otherrndpass'].'","otherrndtime":"'.$otherrndr['otherrndtime'].'","otherrndtwo":"'.$otherrndr[otherrndtwo].'"';
$postcs=',"filepass":"'.$filepass.'","classid":"'.$classid.'","infoid":"'.$infoid.'","modtype":"'.$modtype.'","ecmsdo":"'.$ecmsdo.'","tranfrom":"'.$tranfrom.'","oldmorepicnum":"'.$oldmorepicnum.'"';
$getcs="filepass=$filepass&classid=$classid&infoid=$infoid&modtype=$modtype&ecmsdo=$ecmsdo&tranfrom=$tranfrom&oldmorepicnum=$oldmorepicnum";
$addpostcs='';
$getmark=(int)$_GET['getmark'];
$getsmall=(int)$_GET['getsmall'];
$width=(int)$_GET['width'];
$height=(int)$_GET['height'];
$picexp=(int)$_GET['picexp'];
$picalign=(int)$_GET['picalign'];
$bpicwidth=(int)$_GET['bpicwidth'];
$bpicheight=(int)$_GET['bpicheight'];
if($getmark)
{
	$addpostcs.=',"getmark":"'.$getmark.'"';
}
if($getsmall)
{
	$addpostcs.=',"getsmall":"'.$getsmall.'"';
}
if(empty($width))
{
	$width=$public_r['spicwidth'];
}
if($width)
{
	$addpostcs.=',"width":"'.$width.'"';
}
if(empty($height))
{
	$height=$public_r['spicheight'];
}
if($height)
{
	$addpostcs.=',"height":"'.$height.'"';
}

if(empty($picexp))
{
	$picexp=0;
}
$addpostcs.=',"picexp":"'.$picexp.'"';
if(empty($picalign))
{
	$picalign=2;
}
$addpostcs.=',"picalign":"'.$picalign.'"';
if(!$bpicwidth)
{
	$bpicwidth='';
}
if($bpicwidth)
{
	$addpostcs.=',"bpicwidth":"'.$bpicwidth.'"';
}
if(!$bpicheight)
{
	$bpicheight='';
}
if($bpicheight)
{
	$addpostcs.=',"bpicheight":"'.$bpicheight.'"';
}

$efromurl=RepPostStrUrl(urldecode($_GET['efromurl']));
if(strstr($efromurl,'://'))
{
	exit();
}
$phpmyself=eReturnSelfPage(1);

//swf参数
if($type==1)//图片
{
	$swffiletypes='*.jpg;*.gif;*.png;*.bmp;*.jpeg;*.webp';
	$swffiletypesdes='Image Files';
}
else
{
	$swffiletypes='*.*';
	$swffiletypesdes='All Files';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>上传多文件 - EmpireCMS</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="swfupload/swfupload.queue.js"></script>
<script type="text/javascript" src="js/fileprogress.js"></script>
<script type="text/javascript" src="js/handlers.php?hnv=<?=urlencode($ecms_hashur['ehref']).'&efromurl='.urlencode($efromurl)?>"></script>
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "swfupload/swfupload.swf",
				flash9_url : "swfupload/swfupload.swf",
				upload_url: "doaction.php",
				post_params: {"PHPSESSID":"<?php echo session_id();?>","enews":"<?=$enews?>"<?=$postcs.$loginpostcs.$addpostcs?>},
				file_size_limit : "100 MB",
				file_types : "<?=$swffiletypes?>",
				file_types_description : "<?=$swffiletypesdes?>",
				file_upload_limit : 100,
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug: false,

				// Button settings
				button_image_url: "swfupload/uploadbutton.png",
				button_width: "100",
				button_height: "25",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '',
				button_text_style: ".theFont { font-size: 12; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				// The event handler functions are defined in handlers.js
				swfupload_preload_handler : preLoad,
				swfupload_load_failed_handler : loadFailed,
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	// Queue plugin event
			};

			swfu = new SWFUpload(settings);
	     };
	</script>

<script>
function TranMorePageAddCs(){
	var addcs='<?=$getcs?>';
	if(document.tranmoreform.getmark.checked)
	{
		addcs+="&getmark=1";
	}
	<?php
	if($tranfrom==1)
	{
	?>
	addcs+="&bpicwidth="+document.tranmoreform.bpicwidth.value+"&bpicheight="+document.tranmoreform.bpicheight.value+"&picexp="+document.tranmoreform.picexp.value+"&picalign="+document.tranmoreform.picalign.value+"&efromurl=<?=urlencode($efromurl)?>";
	<?php
	}
	else
	{
	?>
	if(document.tranmoreform.getsmall.checked)
	{
		addcs+="&getsmall=1";
	}
	addcs+="&width="+document.tranmoreform.width.value+"&height="+document.tranmoreform.height.value;
	<?php
	}
	?>
	self.location.href="tranmore.php?<?=$ecms_hashur['ehref']?>&"+addcs;
}
</script>
</head>
<body>
<?php
if($tranfrom==1)
{
?>
  <table width="100%" style="width:100%;margin-left:0;margin-right:auto;border:1px solid #99C4E3;" border="0" cellpadding="3" cellspacing="1" bgcolor="#99C4E3">
    <tr>
      <td width="50%" height="25" bgcolor="#FFFFFF"><div align="center"><strong><a href="<?=$efromurl?>">直接上传</a></strong></div></td>
      <td><div align="center"><strong>多选上传</strong></div></td>
    </tr>
  </table>
<?php
}
?>

<div id="content">
	<h2><strong>帝国CMS多图上传</strong></h2>
	<br>

	<form id="tranmoreform" name="tranmoreform" action="tranmore.php" method="post" enctype="multipart/form-data" onsubmit="return false;">
		<p class="empirecms">
		<?php
		if($tranfrom==1)
		{
		?>
		<table border="0" cellspacing="0" cellpadding="0">
		<tr bgcolor="#FFFFFF"> 
            <td> <input name="getmark" type="checkbox" id="getmark" value="1"<?=$getmark==1?' checked':''?> onclick="TranMorePageAddCs();">加水印
			,分隔:<select name="picexp" id="picexp" onchange="TranMorePageAddCs();">
                <option value="0"<?=$picexp==0?' selected':''?>>分页符</option>
                <option value="1"<?=$picexp==1?' selected':''?>>换行</option>
              </select>
              对齐:
              <select name="picalign" id="picalign" onchange="TranMorePageAddCs();">
                <option value="1"<?=$picalign==1?' selected':''?>>居左</option>
                <option value="2"<?=$picalign==2?' selected':''?>>居中</option>
				<option value="3"<?=$picalign==3?' selected':''?>>居右</option>
              </select>
              ,宽度 <input name="bpicwidth" type="text" id="bpicwidth" value="<?=$bpicwidth?>" size="6" onchange="TranMorePageAddCs();" onkeypress="if(event.keyCode==13||event.which==13){return false;}">
              * 高度 <input name="bpicheight" type="text" id="bpicheight" value="<?=$bpicheight?>" size="6" onchange="TranMorePageAddCs();" onkeypress="if(event.keyCode==13||event.which==13){return false;}">
			</td>
        </tr>
		</table>
		<?php
		}
		else
		{
		?>
		<table border="0" cellspacing="0" cellpadding="0">
		<tr bgcolor="#FFFFFF"> 
            <td> <input name="getmark" type="checkbox" id="getmark" value="1"<?=$getmark==1?' checked':''?> onclick="TranMorePageAddCs();"> 
              加水印 <input name="getsmall" type="checkbox" id="getsmall" value="1"<?=$getsmall==1?' checked':''?> onclick="TranMorePageAddCs();">
              生成缩略图：宽度 <input name="width" type="text" id="width" value="<?=$width?>" size="6" onchange="TranMorePageAddCs();" onkeypress="if(event.keyCode==13||event.which==13){return false;}">
              * 高度 <input name="height" type="text" id="height" value="<?=$height?>" size="6" onchange="TranMorePageAddCs();" onkeypress="if(event.keyCode==13||event.which==13){return false;}"></td>
        </tr>
		</table>
		<?php
		}
		?>
		  </p>

			<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">上传列表</span>
			</div>
		<div id="divStatus">0 Files Uploaded</div>
	  <div>
				<span id="spanButtonPlaceHolder"></span>
				<input id="btnCancel" type="button" value="取消" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
		   &nbsp;&nbsp;(可同时选多个文件)		</div>

	</form>

</div>
</body>
</html>
<?php
db_close();
$empire=null;
?>