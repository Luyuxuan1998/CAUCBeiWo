<?php
$go=$_GET['go'];
if($go){
	header("Location:".base64_decode($go)."");
}
?>