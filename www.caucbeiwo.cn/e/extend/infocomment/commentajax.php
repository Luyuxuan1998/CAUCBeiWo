<?php
require('../../class/connect.php');
$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
$doaction=$_GET['doaction']=='dozt'?'dozt':'';
if($doaction=='dozt')
{
	if(empty($classid))
	{
		exit();
	}
}
else
{
	if(empty($id)||empty($classid))
	{
		exit();
	}
}
?>
var http_request = false;
function CommentMakeRequest(url, functionName, httpType, sendData) {

	http_request = false;
	if (!httpType) httpType = "GET";

	if (window.XMLHttpRequest) { // Non-IE...
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType('text/plain');
		}
	} else if (window.ActiveXObject) { // IE
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {}
		}
	}

	if (!http_request) {
		alert('Cannot send an XMLHTTP request');
		return false;
	}

	var changefunc="http_request.onreadystatechange = "+functionName;
	eval (changefunc);
	//http_request.onreadystatechange = alertContents;
	http_request.open(httpType, url, true);
	http_request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	http_request.send(sendData);
}

//评论分页提交
function CommentToPage(page){
	CommentMakeRequest('<?=$public_r[newsurl]?>e/extend/infocomment/?classid=<?=$classid?>&id=<?=$id?>&doaction=<?=$doaction?>&page='+page+'&t='+Math.random(),'CommentReturnedText','GET','');
}

//评论分页显示
function CommentReturnedText() {
	if(http_request.readyState == 4)
	{
		if(http_request.status == 200)
		{
			var messagereturn = http_request.responseText;
			if(messagereturn!='isfail')
			{
				var r;
				r=messagereturn.split('<!--empirecms.infocomment-->');
				if(r.length!=1)
				{
					if(r[0]!='')
					{
						document.getElementById('infocommentnumarea').innerHTML=r[0];
					}
					document.getElementById('infocommentarea').innerHTML=r[1];
				}
				else
				{
					document.getElementById('infocommentarea').innerHTML=messagereturn;
				}
			}
		}
		else
		{
			alert('There was a problem with the request.');
		}
	}
}

//首页
CommentToPage(0);