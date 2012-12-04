<?php
$pageTitle = 'Products';
$pageId = 'products';
$activeMenu = 2;
$langUrl = 'products_fa.php';
include('template/header.php');
?>
<!-- start === main content ===== -->

    <div class="main-container">

<!-- start ===== changeable =========================================================================================================================== -->

        <h2>Products</h2>

		<div class="products-thumbs-wrpr">

        

        	<?php include( 'app/products-list.php' ); ?>

            

        </div>

        

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer.php'); ?>