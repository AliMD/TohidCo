<?php
$pageTitle = 'آینده';
$pageId = 'future';
$activeMenu = 5;
$langUrl = 'future.php';
include('template/header_fa.php');
?>
<!-- start === main content ===== -->

    <div class="main-container" id="future_content">

<!-- start ===== changeable =========================================================================================================================== -->

    	<div class="all-pages-slider_fa">

        	<?php include_once( "sliders/future-slide-config.php" ); ?>        

        </div>

        

        <div class="all-pages-text futureFontSize">

        

        	<?php include('template/future_content_fa.php'); ?>

            

        </div>

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer_fa.php'); ?>