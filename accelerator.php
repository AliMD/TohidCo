<?php

$file=$_GET['file'];
if(!!$file && file_exists($file)){
	
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) if(!ob_start("ob_gzhandler")) ob_start();
	
	if(substr($file,-3)=='.js'){
		header ("content-type: text/javascript; charset: UTF-8");
	}else if(substr($file,-4)=='.css'){
		header ("content-type: text/css; charset: UTF-8");
	}
	
	$expires = 30 * 24 * 60 * 60;
	header("Pragma: public");
	header ("cache-control: must-revalidate");
	header("Cache-Control: maxage=".$expires);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');
	
	echo file_get_contents($file);
	ob_end_flush();
	
}else{
	header("HTTP/1.0 404 Not Found");
}