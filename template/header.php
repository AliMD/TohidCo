<?php include('head.php'); ?> 
<body <?php if( $pageId == 'home-page' ) echo "onLoad='homeImageSlider();'" ?> >

<!--[if lt IE 8]>
    <p class="chromeframe"><br/>You are using an <b>outdated</b> browser. Please <a href="http://browsehappy.com/" target="_blank"><b>upgrade your browser</b></a> or <a href="http://www.chromeframe.ir/" target="_blank"><b>install this plugin</b></a> to improve your experience.<br/><br/></p><br/>
<![endif]-->

<!-- start === page container ===== -->
<div class="page-container" id="<?php echo $pageId; ?>">
	
    <!-- start === header ===== -->
	<div class="header-container">
    	<div class="logo-wrapper">
        </div>
        <div class="menu-container">
        	<?php $activeMenu; include 'menu.php'; ?>
        </div>
        <div class="lang-wrapper">
            <div class="languages-wrpr">
                <a href="<?php echo $langUrl; ?>" class="language" >فارسی</a>
            </div>
        </div>
    </div><!-- end === header ===== -->