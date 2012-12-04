<?php
$pageTitle = 'محصولات';
$pageId = 'products';
$activeMenu = 2;
$langUrl = 'products.php';
include('template/header_fa.php');
?>
<!-- start === main content ===== -->

    <div class="main-container">

<!-- start ===== changeable =========================================================================================================================== -->

        <h2>محصولات</h2>

		<div class="products-thumbs-wrpr">

        

        	<?php include( 'app/products-list_fa.php' ); ?>

            

        </div>

        

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer_fa.php'); ?>