<?php
$pageTitle = 'Gallery';
$pageId = 'gallery';
$activeMenu = 4;
$langUrl = 'gallery_fa.php';
include('template/header.php');
?>
<!-- start === main content ===== -->

    <div class="main-container">

<!-- start ===== changeable =========================================================================================================================== -->



			<?php include_once( 'media/gallery.php' ); ?>

        

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer.php'); ?>