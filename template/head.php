<?php 
    error_reporting(E_ALL ^ E_NOTICE);

	//if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) if(!ob_start("ob_gzhandler")) ob_start();
	
	$expires = 7 * 24 * 60 * 60;
	header("Pragma: public");
	header("cache-control: must-revalidate");
	header("Cache-Control: maxage=".$expires);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');
?>
<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $pageTitle; ?> - Tohid Khorasan</title>



	<link type="text/css" rel="stylesheet" href="style.css" />

	<script type="text/javascript" src="jquery.js"></script>

    <script type="text/javascript" src="jquery.easing.js"></script>

    <script type="text/javascript" src="eff.js"></script>

    <!--[if lte IE 6]>

        <link type="text/css" rel="stylesheet" href="style-ie6.css" />

    <![endif]-->

    

<?php if( $pageId == 'contact-us' ) { ?>

    <script type="text/javascript"> language = 'english'; </script>

    <script type="text/javascript" src="funclib.js"></script>

    <!--[if IE 7]>

        <link type="text/css" rel="stylesheet" href="style-ie7.css" />

    <![endif]-->

<?php } 



	if(  $pageId == 'about-us'

	  || $pageId == 'contact-us'

	  || $pageId == 'equipment'

	  || $pageId == 'future' ) {

?>

    <link type="text/css" rel="stylesheet" href="nivo-slider.css" />

    <script type="text/javascript" src="jquery.nivo.slider.pack.js" ></script>

<?php } 



	if( $pageId == 'products' ) { 

?>

    <link type="text/css" rel="stylesheet" href="fancybox.css" />

    <script type="text/javascript" src="jquery.fancybox.js"></script>

    <script type="text/javascript" src="jquery.mousewheel.js"></script>

<?php } 



	if( $pageId == 'gallery' ) { 

?>

    <link type="text/css" rel="stylesheet" href="jqfancybox.css" />

    <script type="text/javascript" src="jqfancybox.js"></script>

    <script type="text/javascript" src="jiggle.js"></script>

<?php } ?>



</head>        