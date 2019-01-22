<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>

<!DOCTYPE html>
<html>
<?php
if(!$noautourl)
{
?>
<SCRIPT language=javascript>
var secs=4;//4秒
for(i=1;i<=secs;i++) 
{ window.setTimeout("update(" + i + ")", i * 1000);} 
function update(num) 
{ 
if(num == secs) 
{ <?=$gotourl_js?>; } 
else 
{ } 
}
</SCRIPT>
<?
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>信息提示</title>
    

    <link href="<?=$public_r['newsurl']?>e/message/moyu_cp004/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$public_r['newsurl']?>e/message/moyu_cp004/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=$public_r['newsurl']?>e/message/moyu_cp004/css/animate.css" rel="stylesheet">
    <link href="<?=$public_r['newsurl']?>e/message/moyu_cp004/css/style.css" rel="stylesheet">
    
</head>

<body class="gray-bg">

    <div class="middle-box text-center">
        <h2><i class="fa fa-spinner fa-spin fa-3x"></i></h2>
    </div>

  
    <div class="middle-box text-center animated <?=$public_r['add_texiao123']?>">
        <h3 class="font-bold"><?=$error?></h3>
    </div>
    
    <div class="middle-box text-center">
        <div class="error-desc">
        <a href="<?=$gotourl?>" class="btn btn-primary m-t">如果您的浏览器没有自动跳转，请点击这里</a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=$public_r['newsurl']?>e/message/moyu_cp004/js/jquery-2.1.1.js"></script>
    <script src="<?=$public_r['newsurl']?>e/message/moyu_cp004/js/bootstrap.min.js"></script>
    
</body>
</html>