<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.0';	//数据库版本
$ecms_config['db']['dbserver']='localhost';	//数据库登录地址
$ecms_config['db']['dbport']='';	//端口，不填为按默认
$ecms_config['db']['dbusername']='caucbeiwoadmin';	//数据库用户名
$ecms_config['db']['dbpassword']='caucbeiwomaster';	//数据库密码
$ecms_config['db']['dbname']='caucbeiwoadmin';	//数据库名
$ecms_config['db']['setchar']='utf8';	//设置默认编码
$ecms_config['db']['dbchar']='utf8';	//数据库默认编码
$ecms_config['db']['dbtbpre']='phome_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='utf-8';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['webdebug']=1;	//是否显示PHP错误提示(0为不显示,1为显示)
$ecms_config['sets']['timezone']='PRC';	//时区
$ecms_config['sets']['getiptype']=0;	//获取IP地址类型(0为自动,1为REMOTE_ADDR,2为HTTP_X_FORWARDED_FOR,3为HTTP_CLIENT_IP)
$ecms_config['sets']['ecmscachepath']=ECMS_PATH.'ecachefiles/';	//动态页面缓存文件存放目录
$ecms_config['sets']['ecmscachefiletype']='.html';	//动态页面缓存文件扩展名
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=0;	//默认模板组ID
$ecms_config['sets']['selfmoreportid']=0;	//当前网站访问端ID,0为主访问端



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是GBK编码,0为正常数据,1为GBK编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段
$ecms_config['memberf']['ingid']='ingid';//内部会员组字段
$ecms_config['memberf']['agid']='agid';//会员管理组字段
$ecms_config['memberf']['isern']='isern';//实名字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['enloginauth']=0;	//登录认证码加密验证串有效时间,单位:秒(0为不启用加密)
$ecms_config['esafe']['ecookiernd']='lWNwpMjbDy0NyGsYYFPmHY5kt5oOb240yK0L';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['ckhanytime']=0;	//后台随时认证码变更周期,单位:秒(0为不启用)
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=2;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证,4为全部验证(严格),5为后台验证(严格),6为前台验证(严格)
$ecms_config['esafe']['ckhash']=0;	//启用后台来源认证码,0为金刚模式验证,1为刺猬模式验证,2为关闭验证
$ecms_config['esafe']['ckhashename']='ehash_';	//后台来源认证码访问变量名(必须字母开头,并且只能由字母、数字、下划线组成)
$ecms_config['esafe']['ckhashrname']='rhash_';	//后台来源认证码提交变量名(必须字母开头,并且只能由字母、数字、下划线组成)
$ecms_config['esafe']['ckhuseragent']='';	//允许后台访问的UserAgent信息必须包含字符(区分大小写),多个用“||”半角双竖线隔开

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckhttponly']=0;	//cookie的HttpOnly属性(0关闭,1开启,2只后台开启,3只前台开启)
$ecms_config['cks']['cksecure']=0;		//cookie的secure属性(0为自动识别,1为关闭,2为开启,3只后台开启,4只前台开启)
$ecms_config['cks']['ckvarpre']='rtuwh';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='ytrtx';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='5Q7shxTHuZhWtTvC2hn4Ghd04usULZ3xaal';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='TbfTepMvb4pLEjSHMZVJ06mU63g7agz18i';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndthree']='x7THkjUu7Zj9ArfVep5sP2UbgcFpmNCg9';	//COOKIE验证随机码3(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndfour']='0zEgQ66124LxIh3Pf5bKQYpz8aU79OJ5';	//COOKIE验证随机码4(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndfive']='ITbkvWlfIssP0Y2pbSEF0QLHxLJQzQ5';	//COOKIE验证随机码5(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,.webp,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,.swf,.flv,.dcr,.ogg,.webm,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'航大被窝云资源',
'newsurl'=>'/',
'filetype'=>'|.gif|.jpg|.jpeg|.png|.swf|.zip|.rar|.7z|.exe|.txt|.mp4|.mp3|.doc|.ppt|.apk|.dmg|.iso|',
'filesize'=>20971520,
'relistnum'=>8,
'renewsnum'=>100,
'min_keyboard'=>2,
'max_keyboard'=>30,
'search_num'=>20,
'search_pagenum'=>10,
'newslink'=>2,
'checked'=>0,
'searchtime'=>5,
'loginnum'=>10,
'logintime'=>5,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'9Nvj3F7bA7sMrAn1RC42',
'filechmod'=>0,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'<a class=\"short-btn download\" href=\"[!--down.url--]\" rel=\"external nofollow\"  target=\"_blank\"><i class=\"fa fa-cloud-download\"></i>[!--down.name--]</a>',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>51200,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>0,
'markimg'=>'../data/mark/maskdef.png',
'marktext'=>'caucbeiwo',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>10,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>0,
'searchtempvar'=>1,
'showinfolevel'=>1,
'navfh'=>'>',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>50,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>2,
'filepath'=>'Y-m-d',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>1,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>1800,
'keyrnd'=>'SxXE2YI6GjGhDJBxUXsrRxuSxktkmR',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>1,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/xinwen/\">新闻</a>&nbsp;|&nbsp;<a href=\"/wenzhang/\">文章</a>&nbsp;|&nbsp;<a href=\"/tupian/\">图片</a>&nbsp;|&nbsp;<a href=\"/ziyuan/\">资源</a>&nbsp;|&nbsp;<a href=\"/shipin/\">视频</a>&nbsp;|&nbsp;<a href=\"/xuexi/\">学习</a>&nbsp;|&nbsp;<a href=\"/chuangkezhongxin/\">创客中心</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>30,
'qlistinfonum'=>28,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>14,
'usetags'=>',1,',
'chtags'=>'',
'tagslistnum'=>16,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>2,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>0,
'closehmenu'=>',shop,',
'indexaddpage'=>0,
'modmemberedittran'=>1,
'modinfoedittran'=>1,
'php_adminouttime'=>1000,
'httptype'=>0,
'qinfoaddfen'=>1,
'bakescapetype'=>1,
'hkeytime'=>30,
'hkeyrnd'=>'Gti2JWsfttrTVIGugb3GKpwSGlRqfJ6QD4Vb',
'mhavedatedo'=>0,
'reportkey'=>0,
'ctimeopen'=>0,
'ctimelast'=>0,
'ctimeindex'=>0,
'ctimeclass'=>0,
'ctimelist'=>0,
'ctimetext'=>0,
'ctimett'=>0,
'ctimetags'=>0,
'ctimegids'=>'',
'ctimecids'=>'',
'ctimernd'=>'6L4hl1BLz0X7yQYtv17ySXRNnfqAmkw9LCBr3XuB3Z',
'qmadminuids'=>'',
'qmforumuids'=>'',
'qmotheruids'=>'',
'ckhavemoreport'=>0,
'usetotalnum'=>0,
'autodoopen'=>0,
'autodofile'=>0,
'autodoss'=>0,
'digglevel'=>0,
'diggcmids'=>'',
'spacegids'=>',1,5,2,6,7,8,',
'candocodetag'=>1,
'openern'=>'',
'ernurl'=>'',
'toqjf'=>'',
'qtoqjf'=>'',
'ctimeaddre'=>0,
'ctimeqaddre'=>0,
'deftempid'=>0,'add_foot_about'=>'航大被窝云资源是由中国民航大学被窝校园团队开发运维的校内最大的综合信息服务分享平台，主要栏目包括新闻、文章、图片、资源、视频、学习与创客中心。 官方QQ群：813383303，欢迎您的加入。','add_email'=>'beiwotechnology@163.com','add_xlwb'=>'http://www.sina.com.cn','add_txwb'=>'http://www.qq.com','add_qq'=>'2575837178','add_ewm'=>'/skin/ecms147/images/weixin.jpg','add_icp'=>'<a href=\"http://www.miitbeian.gov.cn\">津ICP备180006908号</a>
 	
<a target=\"_blank\" href=\"http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=12011002018075\" ><img src=\"/images/beian.png\" >津公网安备 12011002018075号</a>','add_tongji'=>'<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \"https://\" : \"http://\");document.write(unescape(\"%3Cspan id=\'cnzz_stat_icon_1276026515\'%3E%3C/span%3E%3Cscript src=\'\" + cnzz_protocol + \"s96.cnzz.com/z_stat.php%3Fid%3D1276026515%26show%3Dpic\' type=\'text/javascript\'%3E%3C/script%3E\"));</script>','add_home_classid2'=>'1,4,7,10','add_home_classid1'=>'36,24,25','add_kf'=>'<h3 class=\"titZx\">在线审核</h3>
<ul>
  <li><span>内容</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"内容审核\" title=\"内容审核\" /></a></li>
  <li><span>会员</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"会员审核\" title=\"会员审核\" /></a></li>
</ul>
<h3>广告合作</h3>
<ul>
  <li><span>校内</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"校内广告\" title=\"校内广告\" /></a></li>
  <li><span>校外</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"校外广告\" title=\"校外广告\" /></a></li>
</ul>
<h3>校园合伙人</h3>
<ul>
  <li><span>部门</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"学校部门\" title=\"学校部门\" /></a></li>
  <li><span>社团</span><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2575837178&site=qq&menu=yes\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:2575837178:51\" alt=\"校内社团\" title=\"校内社团\" /></a></li>
</ul>');
//------------e_public

//moreports
$emoreport_r=array();
//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);
$etable_r['huandeng']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>9);
$etable_r['article']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>10);
$etable_r['picture']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>11);
$etable_r['resource']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>12);
$etable_r['learn']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>14);
$etable_r['creator']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>15);
$etable_r['video']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>13);
$etable_r['shop']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>16);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'新闻系统模型',
'qmname'=>'新闻',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,buyfen,tprice,psalenum,taobao,pmaxnum,price,pan_s,playerid,onlinepath,downpath,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,buyfen,tprice,psalenum,taobao,pmaxnum,price,pan_s,playerid,onlinepath,downpath,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|38|37|40|39|14|15|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>1,
'tbname'=>'news');
$emod_r[9]=Array('mid'=>9,
'mname'=>'幻灯系统模型',
'qmname'=>'幻灯',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,newstime,pic_link,',
'qenter'=>',title,',
'listtempf'=>',title,titlepic,newstime,pic_link,',
'tempf'=>',title,titlepic,newstime,pic_link,',
'mustqenterf'=>',title,titlepic,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',',
'canaddf'=>',title,titlepic,newstime,pic_link,',
'caneditf'=>',title,titlepic,newstime,pic_link,',
'tbmainf'=>',newstime,pic_link,titlepic,title,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',pic_link,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|22|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>9,
'tbname'=>'huandeng');
$emod_r[10]=Array('mid'=>10,
'mname'=>'文章系统模型',
'qmname'=>'文章',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|42|41|28|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>12,
'tbname'=>'article');
$emod_r[11]=Array('mid'=>11,
'mname'=>'图片系统模型',
'qmname'=>'图片',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|43|30|44|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>11,
'tbname'=>'picture');
$emod_r[12]=Array('mid'=>12,
'mname'=>'资源系统模型',
'qmname'=>'资源',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,downpath,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|32|45|46|47|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>13,
'tbname'=>'resource');
$emod_r[13]=Array('mid'=>13,
'mname'=>'视频系统模型',
'qmname'=>'视频',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,onlinepath,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|33|48|49|50|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>16,
'tbname'=>'video');
$emod_r[14]=Array('mid'=>14,
'mname'=>'学习系统模型',
'qmname'=>'学习',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|34|51|52|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>14,
'tbname'=>'learn');
$emod_r[15]=Array('mid'=>15,
'mname'=>'创客中心系统模型',
'qmname'=>'创客中心',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|35|53|54|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>15,
'tbname'=>'creator');
$emod_r[16]=Array('mid'=>16,
'mname'=>'商城系统模型',
'qmname'=>'商城',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,tprice,buyfen,smalltext,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,diggtop,',
'mustqenterf'=>',title,ftitle,titlepic,price,pmaxnum,smalltext,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,ftitle,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,writer,befrom,downpath,pan_s,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,smalltext,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,downpath,pan_s,playerid,onlinepath,price,pmaxnum,taobao,psalenum,tprice,buyfen,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>18,
'tbname'=>'shop');


//-------EmpireCMS.Public.Cache-------

?>