<?php
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();
$editor=1;

//-------- 插件参数设置开始 -------

//每页显示记录数
$line=10;

//每页显示分页链接数
$page_line=8;

//是否返回总评论数显示(1为返回评论数，0为不返回)
$returnshowplnum=1;

//-------- 插件参数设置结束 -------


//-------- 分页 --------
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$offset=$page*$line; //总偏移量

//评论JS分页导航函数
function user_jspage($num,$line,$page_line,$page,$search){
	if($num<=$line)
	{
		return '';
	}
	$search=htmlspecialchars($search,ENT_QUOTES);
	$snum=2;//最小页数
	$totalpage=ceil($num/$line);//取得总页数
	//上一页
	if($page<>0)
	{
		$toppage='<a href="#ecms" onclick="javascript:CommentToPage(0);">首页</a> ';
		$pagepr=$page-1;
		$prepage='<a href="#ecms" onclick="javascript:CommentToPage('.$pagepr.');">上一页</a>';
	}
	//下一页
	if($page!=$totalpage-1)
	{
		$pagenex=$page+1;
		$nextpage=' <a href="#ecms" onclick="javascript:CommentToPage('.$pagenex.');">下一页</a>';
		$lastpage=' <a href="#ecms" onclick="javascript:CommentToPage('.($totalpage-1).');">尾页</a>';
	}
	$starti=$page-$snum<0?0:$page-$snum;
	$no=0;
	for($i=$starti;$i<$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{
			$is_1="<b>";
			$is_2="</b>";
		}
		else
		{
			$is_1='<a href="#ecms" onclick="javascript:CommentToPage('.$i.');">';
			$is_2="</a>";
		}
		$pagenum=$i+1;
		$returnstr.=" ".$is_1.$pagenum.$is_2;
	}
	$returnstr=$toppage.$prepage.$returnstr.$nextpage.$lastpage;
	return $returnstr;
}

$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
$doaction=$_GET['doaction']=='dozt'?'dozt':'';
if($doaction=='dozt')//专题
{
	if(empty($classid))
	{
		exit();
	}
	$n_r=$empire->fetch1("select ztid,restb from {$dbtbpre}enewszt where ztid='$classid'");
	if(!$n_r['ztid'])
	{
		exit();
	}
	$pubid='-'.$classid;
	$search="&doaction=dozt&classid=$classid";
}
else
{
	if(empty($id)||empty($classid))
	{
		exit();
	}
	if(empty($class_r[$classid][tbname]))
	{
		exit();
	}
	$n_r=$empire->fetch1("select id,classid,plnum,restb from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where id='$id' limit 1");
	if(!$n_r[id]||$classid!=$n_r[classid])
	{
		exit();
	}
	$pubid=ReturnInfoPubid($classid,$id);
	$search="&classid=$classid&id=".$id;
}



//-------- 查询SQL --------

//取得评论总数
if($doaction=='dozt')//专题
{
	$totalquery="select count(*) as total from {$dbtbpre}enewspl_".$n_r['restb']." where pubid='$pubid' and checked=0";
	$num=$empire->gettotal($totalquery);
}
else
{
	if($class_r[$classid][checkpl])//需审核
	{
		$totalquery="select count(*) as total from {$dbtbpre}enewspl_".$n_r['restb']." where pubid='$pubid' and checked=0";
		$num=$empire->gettotal($totalquery);
	}
	else
	{
		$num=$n_r['plnum'];
	}
}
//select查询SQL
$query="select plid,saytime,sayip,username,zcnum,fdnum,userid,saytext from {$dbtbpre}enewspl_".$n_r['restb']." where pubid='$pubid' and checked=0";
$query.=" order by plid desc limit $offset,$line";
$sql=$empire->query($query);

$listpage=user_jspage($num,$line,$page_line,$page,$search);
require('template/index.temp.php'); //导入模板文件

db_close(); //关闭MYSQL链接
$empire=null; //注消操作类变量
?>