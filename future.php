<?php
$pageTitle = 'Future';
$pageId = 'future';
$activeMenu = 5;
$langUrl = 'future_fa.php';
include('template/header.php');
?>
<!-- start === main content ===== -->

    <div class="main-container" id="future_content">

<!-- start ===== changeable =========================================================================================================================== -->

    	<div class="all-pages-slider">

        	<?php include_once( "sliders/future-slide-config.php" ); ?>        

        </div>

        <div class="all-pages-text">

        

        	<?php include('template/future_content.php'); ?>

            

        </div>

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer.php'); ?>