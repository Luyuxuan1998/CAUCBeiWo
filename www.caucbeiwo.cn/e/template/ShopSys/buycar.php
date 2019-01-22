<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC -//W3C//DTD HTML 4.01 Transitional//EN>
<html>
<head>
<meta http-equiv=Content-Type content=text/html; charset=utf-8>
<title>我的购物车</title>
<link href=../../data/images/qcss.css rel=stylesheet type=text/css>
<script language="javascript">
window.resizeTo(760,600);
window.focus();
</script>
</head>
<?php
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<body>
<?php
include('buycar/buycar_form.php');
?>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>