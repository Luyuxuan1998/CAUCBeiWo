<ul>

       <li><a class="index" href="/">首页</a></li>
        <?php
	include(ECMS_PATH.'e/data/dbcache/class1.php');	
$nav=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc limit 6");
    while($s=$empire->fetch($nav)){
    	
        
        $classurl=sys_ReturnBqClassname($s,9);
        
        
        echo '<li><a class="mb" href="'.$classurl.'">'.$s[classname].'</a></li>';
        
    }
?>
</ul>