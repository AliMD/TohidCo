<?php include('head_fa.php'); ?>
<body <?php if( $pageId == 'home-page' ) echo "onLoad='homeImageSlider();'" ?> >

<!--[if lt IE 8]>
    <p class="chromeframe"><br/>برای مشاهده صحیح این وب سایت مرورگر خود را <a href="http://browsehappy.com/" target="_blank"><b>به روز رسانی</b></a> نموده و یا <a href="http://www.chromeframe.ir/" target="_blank"><b>این پلاگین</b></a> را نصب نمایید.<br/><br/></p><br/>
<![endif]-->

<!-- start === page container ===== -->
<div class="page-container" id="<?php echo $pageId; ?>">
	
    <!-- start === header ===== -->
	<div class="header-container">
    	<div class="logo-wrapper">
        </div>
        <div class="menu-container">
        	<?php $activeMenu; include 'menu_fa.php'; ?>
        </div>
        <div class="lang-wrapper">
            <div class="languages-wrpr">
                <a href="<?php echo $langUrl; ?>" class="language" >English</a>
            </div>
        </div>
    </div><!-- end === header ===== -->