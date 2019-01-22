<?php
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');
define('EmpireCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$empirecmskey1='';
$empirecmskey2='';
$empirecmskey3='';
$empirecmskey4='';
$empirecmskey5='';
if($_POST['empirecmskey1']&&$_POST['empirecmskey2']&&$_POST['empirecmskey3']&&$_POST['empirecmskey4']&&$_POST['empirecmskey5'])
{
	$empirecmskey1=RepPostVar($_POST['empirecmskey1']);
	$empirecmskey2=RepPostVar($_POST['empirecmskey2']);
	$empirecmskey3=RepPostVar($_POST['empirecmskey3']);
	$empirecmskey4=RepPostVar($_POST['empirecmskey4']);
	$empirecmskey5=RepPostVar($_POST['empirecmskey5']);
	$ecertkeyrndstr=$empirecmskey1.'#!#'.$empirecmskey2.'#!#'.$empirecmskey3.'#!#'.$empirecmskey4.'#!#'.$empirecmskey5;
	esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
	$certr=explode('#!#',getcvar('ecertkeyrnds'));
	$empirecmskey1=RepPostVar($certr[0]);
	$empirecmskey2=RepPostVar($certr[1]);
	$empirecmskey3=RepPostVar($certr[2]);
	$empirecmskey4=RepPostVar($certr[3]);
	$empirecmskey5=RepPostVar($certr[4]);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>航大被窝云资源后台管理系统</title>
<link rel="stylesheet" href="loginimg/css.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="/skin/ecms147/images/favicon.ico">
<base onmouseover="window.status='航大被窝云资源后台管理系统';return true">
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
function CheckLogin(obj){
	if(obj.username.value=='')
	{
		alert('请输入用户名');
		obj.username.focus();
		return false;
	}
	if(obj.password.value=='')
	{
		alert('请输入登录密码');
		obj.password.focus();
		return false;
	}
	if(obj.loginauth!=null)
	{
		if(obj.loginauth.value=='')
		{
			alert('请输入认证码');
			obj.loginauth.focus();
			return false;
		}
	}
	if(obj.key!=null)
	{
		if(obj.key.value=='')
		{
			alert('请输入验证码');
			obj.key.focus();
			return false;
		}
	}
	return true;
}

function edoshowkey(showid,vname){
	document.getElementById(showid).innerHTML='<img src="ShowKey.php?v='+vname+'&t='+Math.random()+'" name="'+vname+'KeyImg" id="'+vname+'KeyImg" align="bottom" onclick=edoshowkey("'+showid+'","'+vname+'") title="看不清楚,点击刷新">';
}
</script>


</head>

<body onLoad="document.login.username.focus();">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle" style="padding:100px 0 0 0;"><table width="455" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
          <div class="l_logo">&nbsp;</div>
          <div class="l_box">
            <form name="login" id="login" method="post" action="ecmsadmin.php" onsubmit="return CheckLogin(document.login);" autocomplete="off">
    		<input type="hidden" name="enews" value="login">
            <input name="eposttime" type="hidden" id="eposttime" value="0">
            <table width="415" height="100%" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="60" height="40">用户名：</td>
            <td colspan="2"> <input name="username" type="text" class="input1" size="24"> 
            </td>
          </tr>
          <tr> 
            <td height="40">密　码：</td>
            <td colspan="2"> <input name="password" type="password" class="input1" size="24"> 
            </td>
          </tr>
		  <?php
		  if($ecms_config['esafe']['loginauth'])
		  {
		  ?>
          <tr> 
            <td height="40">认证码：</td>
            <td colspan="2"><input name="loginauth" type="password" id="loginauth" class="input1" size="24"></td>
          </tr>
          <?php
		  }
		  ?>
          <tr>
            <td height="40">提　问：</td>
            <td colspan="2"><select name="equestion" id="equestion" onChange="if(this.options[this.selectedIndex].value==0){showanswer.style.display='none';}else{showanswer.style.display='';}" style="width:300px;">
                <option value="0">无安全提问</option>
                <option value="1">母亲的名字</option>
                <option value="2">爷爷的名字</option>
                <option value="3">父亲出生的城市</option>
                <option value="4">您其中一位老师的名字</option>
                <option value="5">您个人计算机的型号</option>
                <option value="6">您最喜欢的餐馆名称</option>
                <option value="7">驾驶执照的最后四位数字</option>
              </select></td>
          </tr>
          <tr id="showanswer">
            <td height="40">答　案：</td>
            <td colspan="2"><input name="eanswer" type="text" id="eanswer" class="input1" size="24"></td>
          </tr>
          <?php
		  if(empty($public_r['adminloginkey']))
		  {
		  ?>
          <tr> 
            <td height="40">验证码：</td>
            <td > <input name="key" type="text" class="b-form2" size="9"> 
            </td>
            <td id="checkkeyshowkey"><a href="#EmpireCMS" onclick="edoshowkey('checkkeyshowkey','checkkey');" title="点击显示验证码">点击显示</a></td>
          </tr>
          <?php
		  }
		  ?>
          <tr> 
            <td height="40">窗　口：</td>
            <td colspan="2"><input type="radio" name="adminwindow" value="0" checked>
              正常 
              <input type="radio" name="adminwindow" value="1">
              全屏</td>
          </tr>
          <tr> 
            <td height="40">&nbsp;</td>
            <td colspan="2" valign="bottom" style="padding:30px 0 20px 0;"> <input name="imageField" type="image" src="loginimg/a2.gif" style="border:0;border-radius:0; width:183px; height:39px;"> 
            </td>
          </tr>
        </table>
        <input name="empirecmskey1" type="hidden" id="empirecmskey1" value="<?php echo $empirecmskey1;?>">
              <input name="empirecmskey2" type="hidden" id="empirecmskey2" value="<?php echo $empirecmskey2;?>">
              <input name="empirecmskey3" type="hidden" id="empirecmskey3" value="<?php echo $empirecmskey3;?>">
              <input name="empirecmskey4" type="hidden" id="empirecmskey4" value="<?php echo $empirecmskey4;?>">
              <input name="empirecmskey5" type="hidden" id="empirecmskey5" value="<?php echo $empirecmskey5;?>">
            
            </form>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            
            <td height="30" class="l_foot">Powered by <a href="http://www.phome.net" target="_blank"><strong>EmpireCMS</strong></a> 
              <font color="#FF9900"><strong>7.5</strong></font> &copy; 2002-2018 <a href="http://www.digod.com" target="_blank">EmpireSoft</a> 
              Inc.</td>
            
          </tr>
        </table>
        
          </div>
          </td>
        </tr>
      </table></td>
  </tr>
</table>





<script>
if(document.login.equestion.value==0)
{
	showanswer.style.display='none';
}
</script>
</body>
</html>