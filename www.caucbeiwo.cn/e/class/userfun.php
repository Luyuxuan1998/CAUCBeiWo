<?php
//---------------------------用户自定义标签函数文件
function user_time($tm,$num) {
if($num==1){
   $tm =  strtotime($tm);                        //将输入的时间时间截化
} 
   $cur_tm = time(); $dif = $cur_tm-$tm;
   $pds = array('秒','分钟','小时','天','周','个月','年');
   $lngh = array(1,60,3600,86400,604800,2630880,31570560);
   for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);
   $no = floor($no); 
   //如果要把格式改成"X分钟 前"的话,请把%d%s改成%d %s
   $x=sprintf("%d%s",$no,$pds[$v]);
   return $x."前";
}

?>