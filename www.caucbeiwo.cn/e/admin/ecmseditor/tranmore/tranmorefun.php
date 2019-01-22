<?php

//附加认证
function tranmore_SetUserLogin($userid,$username,$rnd){
	$_SESSION['tmuserid']=$userid;
	$_SESSION['tmusername']=$username;
}

//附加认证
function tranmore_CheckUserLogin($userid,$username,$rnd){
	if(!$_SESSION['tmuserid']||!$_SESSION['tmusername'])
	{
		printerror("NotLogin","index.php");
	}
	if($_SESSION['tmuserid']!=$userid||$_SESSION['tmusername']!=$username)
	{
		printerror("NotLogin","index.php");
	}
}

//返回执行函数
function tranmore_ReturnTranSuccessJS($tranfrom=0){
	if($tranfrom==1)//编辑器上传
	{
		$js='';
	}
	elseif($tranfrom==2)//图集上传
	{
		$js='';
	}
	else //普通上传
	{
		$js='';
	}
	return $js;
}

//提示
function tranmore_PrintError($message){
	echo $message;
	exit();
}

//返回上传方式
function tranmore_ReturnTranType(){
	return $_SESSION['tmfilelisttype'];
}

//更新上传方式
function tranmore_SetTranType($ecms='morepic'){
	$_SESSION['tmfilelisttype']=$ecms;
}

//返回原图集数量
function tranmore_ReturnOldMorepicNum(){
	return $_SESSION['tmoldmorepicnum'];
}

//更新原图集数量
function tranmore_SetOldMorepicNum($num){
	$_SESSION['tmoldmorepicnum']=$num;
}

//返回编辑器多图附加参数
function tranmore_ReturnEditorMorepicAdd(){
	return $_SESSION['tmeditormorepicadd'];
}

//更新编辑器多图附加参数
function tranmore_SetEditorMorepicAdd($cs){
	$_SESSION['tmeditormorepicadd']=$cs;
}

//返回编辑器多图附加参数(处理后)
function tranmore_ReturnEditorMorepicAddr($cs){
	$r=explode(',',$cs);
	$ret_r['bpicwidth']=$r[0];
	$ret_r['bpicheight']=$r[1];
	$ret_r['picexp']=$r[2];
	$ret_r['picalign']=$r[3];
	return $ret_r;
}

//返回上传文件列表
function tranmore_ReturnFileList($ecms='morepic'){
	$val='';
	if($ecms=='morepic')
	{
		$val=$_SESSION['tmmorefilelist'];
	}
	elseif($ecms=='editormorepic')
	{
		$val=$_SESSION['tmeditorfilelist'];
	}
	return $val;
}

//写入文件列表
function tranmore_SetFileList($ecms='morepic',$filelist){
	if($ecms=='morepic')
	{
		$_SESSION['tmmorefilelist']=$filelist;
	}
	elseif($ecms=='editormorepic')
	{
		$_SESSION['tmeditorfilelist']=$filelist;
	}
}

//清空文件列表
function tranmore_EmptyFileList($ecms='all'){
	if($ecms=='morepic')
	{
		$_SESSION['tmmorefilelist']='';
	}
	elseif($ecms=='editormorepic')
	{
		$_SESSION['tmeditorfilelist']='';
	}
	else
	{
		$_SESSION['tmmorefilelist']='';
		$_SESSION['tmeditorfilelist']='';
	}
	$_SESSION['tmfilelisttype']='';
	$_SESSION['tmoldmorepicnum']='';
	$_SESSION['tmeditormorepicadd']='';
}

//更新文件列表
function tranmore_UpdateFileList($ecms='morepic',$fileid,$sfileid,$fstb){
	if(!$fileid)
	{
		return '';
	}
	$rexp='|';
	$fexp=',';
	$thisfile=$fstb.$fexp.$fileid.$fexp.$sfileid;
	$filelist=tranmore_ReturnFileList($ecms);
	if($filelist)
	{
		$filelist.=$rexp.$thisfile;
	}
	else
	{
		$filelist=$thisfile;
	}
	$allfilelist=$filelist;
	tranmore_SetFileList($ecms,$allfilelist);
	return $filelist;
}

//上传多文件
function tranmore_TranFile($file,$file_name,$file_type,$file_size,$classid,$type,$post,$userid,$username){
	global $empire,$public_r,$loginrnd,$dbtbpre,$ecms_config;
	$no=hRepPostStr(tranmore_GetFileNo($file_name),1);
	$tranfrom=(int)$post['tranfrom'];
	$oldmorepicnum=(int)$post['oldmorepicnum'];
	$picexp=(int)$post['picexp'];
	$picalign=(int)$post['picalign'];
	$bpicwidth=(int)$post['bpicwidth'];
	$bpicheight=(int)$post['bpicheight'];
	$classid=(int)$classid;
	$modtype=(int)$post['modtype'];
	$infoid=(int)$post['infoid'];
	$fstb=0;
	if(empty($modtype))
	{
		$fstb=GetInfoTranFstb($classid,$infoid,0);
	}
	//是否为空
	if(!$file_name)
	{
		tranmore_PrintError('No upload File.');
	}
	$filetype=GetFiletype($file_name);//取得文件类型
	//如果是.php文件
	if(CheckSaveTranFiletype($filetype))
	{
		tranmore_PrintError('Upload filetype error.');
	}
	$type_r=explode("|".$filetype."|",$public_r['filetype']);
	if(count($type_r)<2)
	{
		tranmore_PrintError('Upload filetype error.');
	}
	if($file_size>$public_r['filesize']*1024)
	{
		tranmore_PrintError('Upload filesize too big.');
	}
	if($type==1)//上传图片
	{
		if(!strstr($ecms_config['sets']['tranpicturetype'],','.$filetype.','))
		{
			tranmore_PrintError('Upload filetype error.');
		}
	}
	elseif($type==2)//上传flash
	{
		if(!strstr($ecms_config['sets']['tranflashtype'],','.$filetype.','))
		{
			tranmore_PrintError('Upload filetype error.');
		}
	}
	elseif($type==3)//上传多媒体
	{}
	else//上传附件
	{}
	$r=DoTranFile($file,$file_name,$file_type,$file_size,$classid);
	if(empty($r[tran]))
	{
		tranmore_PrintError('File could not be saved.');
	}
	if(!$no)
	{
		$no=$r[filename];
	}
	//写入数据库
	$r[filesize]=(int)$r[filesize];
	$classid=(int)$classid;
	$post[filepass]=(int)$post[filepass];
	$type=(int)$type;
	$sql=eInsertFileTable($r[filename],$r[filesize],$r[filepath],$username,$classid,$no,$type,$post[filepass],$post[filepass],$public_r[fpath],0,$modtype,$fstb);
	$fileid=$empire->lastid();
	//导入gd.php文件
	if($type==1&&($post['getsmall']||$post['getmark']))
	{
		@include(ECMS_PATH."e/class/gd.php");
	}
	//缩略图
	$sfileid=0;
	if($type==1&&$post['getsmall'])
	{
		$post[width]=(int)$post[width];
		$post[height]=(int)$post[height];
		GetMySmallImg($classid,$no,$r[insertfile],$r[filepath],$r[yname],$post[width],$post[height],$r[name],$post['filepass'],$post['filepass'],$userid,$username,$modtype,$fstb);
		$sfileid=$empire->lastid();
	}
	//水印
	if($type==1&&$post['getmark'])
	{
		GetMyMarkImg($r['yname']);
	}
	//上传方式
	$ecms='mainpic';
	if($tranfrom==1)//编辑器上传
	{
		$ecms='editormorepic';
	}
	elseif($tranfrom==2)//图集上传
	{
		$ecms='morepic';
	}
	else//普通上传
	{
		$ecms='mainpic';
	}
	//更新列表
	if($tranfrom!=0)
	{
		$filelist=tranmore_UpdateFileList($ecms,$fileid,$sfileid,$fstb);
	}
	if($sql)
	{
		tranmore_SetTranType($ecms);
		tranmore_SetOldMorepicNum($oldmorepicnum);
		$editormorepicadd="$bpicwidth,$bpicheight,$picexp,$picalign";
		tranmore_SetEditorMorepicAdd($editormorepicadd);
		db_close();
		exit();
	}
	else
	{
		tranmore_PrintError('Insert file record fail.');
	}
}

//取文件编号
function tranmore_GetFileNo($filename){
	global $ecms_config;
	$filename=tranmore_DoIconv($filename);
	$filer=explode('.',$filename);
	return addslashes($filer[0]);
}

//导入转码文件
function tranmore_LoadIconvFile(){
	global $ecms_config;
	if($ecms_config['sets']['pagechar']!='utf-8')
	{
		@include_once(ECMS_PATH."e/class/doiconv.php");
	}
}

//转码
function tranmore_DoIconv($str){
	global $ecms_config;
	if($ecms_config['sets']['pagechar']!='utf-8')
	{
		$char='UTF8';
		$targetchar=$ecms_config['sets']['pagechar']=='big5'?'BIG5':'GB2312';
		$str=DoIconvVal($char,$targetchar,$str,0);
	}
	return addslashes($str);
}

//多图上传时-返回图片列表
function tranmore_ReturnMorepic($ecms='morepic'){
	global $empire,$dbtbpre,$public_r,$ecms_config;
	$filelist=tranmore_ReturnFileList($ecms);
	if(empty($filelist))
	{
		return '';
	}
	$tranmore_picr=array();
	$rexp='|';
	$fexp=',';
	$recordr=explode($rexp,$filelist);
	$recordcount=count($recordr);
	for($i=0;$i<$recordcount;$i++)
	{
		$fr=explode($fexp,$recordr[$i]);
		$fstb=(int)$fr[0];
		$fstb=eReturnFileStb($fstb);
		$fileid=(int)$fr[1];
		$sfileid=(int)$fr[2];
		if(!$fstb||!$fileid)
		{
			continue;
		}
		$filer=$empire->fetch1("select fileid,filename,filesize,path,filetime,classid,no,fpath,id from {$dbtbpre}enewsfile_{$fstb} where fileid='$fileid'");
		if(!$filer['fileid'])
		{
			continue;
		}
		//地址
		$fspath=ReturnFileSavePath($filer[classid],$filer[fpath]);
		$filepath=$filer[path]?$filer[path].'/':$filer[path];
		$fileurl=$fspath['fileurl'].$filepath.$filer[filename];
		$fileno=$filer['no'];
		//缩图
		$sfileurl='';
		if($sfileid)
		{
			$sfiler=$empire->fetch1("select fileid,filename,filesize,path,filetime,classid,no,fpath,id from {$dbtbpre}enewsfile_{$fstb} where fileid='$sfileid'");
			//地址
			$sfspath=ReturnFileSavePath($sfiler[classid],$sfiler[fpath]);
			$sfilepath=$sfiler[path]?$sfiler[path].'/':$sfiler[path];
			$sfileurl=$sfspath['fileurl'].$sfilepath.$sfiler[filename];
		}
		$tranmore_picr[$i]['bigpicurl']=$fileurl;
		$tranmore_picr[$i]['smallpicurl']=$sfileurl;
		$tranmore_picr[$i]['picname']=stripSlashes($fileno);
	}
	return $tranmore_picr;
}


//输出字段图集格式
function tranmore_EchoFieldMorepic($tmfilelist,$startno){
	$tempfile='template/FieldMorepicTemp.txt';
	$temptext=ReadFiletext($tempfile);
	$temptext=str_replace("\r\n","",str_replace("\"","'",$temptext));
	$tempr=explode('[!--empirenews.listtemp--]',$temptext);
	$string='';
	$tmcount=count($tmfilelist);
	for($tmi=0;$tmi<$tmcount;$tmi++)
	{
		$pic_no=$startno+$tmi+1;
		$pic_smallurl=$tmfilelist[$tmi]['smallpicurl'];
		$pic_bigurl=$tmfilelist[$tmi]['bigpicurl'];
		if(empty($pic_bigurl))
		{
			continue;
		}
		if(!$pic_smallurl)
		{
			$pic_smallurl=$pic_bigurl;
		}
		$pic_name=$tmfilelist[$tmi]['picname'];
		$pic_viewurl=$pic_smallurl?$pic_smallurl:$pic_bigurl;
		$listcenter=str_replace('[!--pic.no--]',$pic_no,$tempr[1]);
		$listcenter=str_replace('[!--pic.viewurl--]',$pic_viewurl,$listcenter);
		$listcenter=str_replace('[!--pic.smallurl--]',$pic_smallurl,$listcenter);
		$listcenter=str_replace('[!--pic.bigurl--]',$pic_bigurl,$listcenter);
		$listcenter=str_replace('[!--pic.name--]',$pic_name,$listcenter);
		$string.=$listcenter;
	}
	if($string)
	{
		$string=$tempr[0].$string.$tempr[2];
	}
	return $string;
}

//输出编辑器多图格式
function tranmore_EchoEditorMorepic($tmfilelist,$addcs){
	$addr=tranmore_ReturnEditorMorepicAddr($addcs);
	$tempfile='template/EditorMorepicTemp.txt';
	$temptext=ReadFiletext($tempfile);
	$temptext=str_replace("\r\n","",str_replace("\"","'",$temptext));
	$tempr=explode('[!--empirenews.listtemp--]',$temptext);
	if($addr['bpicwidth'])
	{
		$addr['bpicwidth']=" width='".$addr['bpicwidth']."'";
	}
	else
	{
		$addr['bpicwidth']='';
	}
	if($addr['bpicheight'])
	{
		$addr['bpicheight']=" height='".$addr['bpicheight']."'";
	}
	else
	{
		$addr['bpicheight']='';
	}
	//分隔符
	if($addr['picexp']==1)
	{
		$picexp='<br>';
	}
	else
	{
		$picexp='[!--empirenews.page--]';
	}
	//对齐
	if($addr['picalign']==1)
	{
		$picalign='left';
	}
	elseif($addr['picalign']==3)
	{
		$picalign='right';
	}
	else
	{
		$picalign='center';
	}
	$tempr[0]=str_replace('[!--pic.width--]',$addr['bpicwidth'],$tempr[0]);
	$tempr[0]=str_replace('[!--pic.height--]',$addr['bpicheight'],$tempr[0]);
	$tempr[0]=str_replace('[!--pic.align--]',$picalign,$tempr[0]);
	$string='';
	$tmcount=count($tmfilelist);
	for($tmi=0;$tmi<$tmcount;$tmi++)
	{
		$pic_no=$tmi+1;
		$pic_smallurl=$tmfilelist[$tmi]['smallpicurl'];
		$pic_bigurl=$tmfilelist[$tmi]['bigpicurl'];
		if(empty($pic_bigurl))
		{
			continue;
		}
		if(!$pic_smallurl)
		{
			$pic_smallurl=$pic_bigurl;
		}
		$pic_name=$tmfilelist[$tmi]['picname'];
		$pic_viewurl=$pic_smallurl?$pic_smallurl:$pic_bigurl;
		$listcenter=str_replace('[!--pic.no--]',$pic_no,$tempr[0]);
		$listcenter=str_replace('[!--pic.smallurl--]',$pic_smallurl,$listcenter);
		$listcenter=str_replace('[!--pic.bigurl--]',$pic_bigurl,$listcenter);
		$listcenter=str_replace('[!--pic.name--]',$pic_name,$listcenter);
		if($string)
		{
			$pageexp=str_replace('[!--pic.name--]',$pic_name,$picexp);
		}
		else
		{
			$pageexp='';
		}
		$string.=$pageexp.$listcenter;
	}
	return $string;
}

?>