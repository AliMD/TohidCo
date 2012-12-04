<?php
$pageTitle = 'Home';
$pageId = 'home-page';
$activeMenu = 0;
$langUrl = 'index_fa.php';
include('template/header.php');
?>
    <!-- start === main content ===== -->

    <div class="main-container">

<!-- start ===== changeable =========================================================================================================================== -->

    	<div class="content-lft-col">

        	<h1 class="titre">Tohid Khorasan</h1>

            <p class="promo-titre"><span class="highLight">Foundry</span><br/>Industrial Company<br/>With <span class="highLight">international idea.</span></p>

            <p class="promo-text"><span class="highLight">Satisfaction</span> of the customer, High <span class="highLight">technology</span><br/>And updated <span class="highLight">equipment</span></p>

        </div>

        <div class="slider-right-col">

			<script type="text/javascript">

                <?php include('sliders/home-page-slider.php'); ?>

            </script>


        	<img id="image1" src="sliders/home-page-slider-images/1-main-bg.jpg" title="Foundry">
            <img id="image2" src="sliders/home-page-slider-images/2-main-bg.jpg" title="Foundry">
            <img id="image3" src="sliders/home-page-slider-images/3-main-bg.jpg" title="Foundry">
        	<img id="image4" src="sliders/home-page-slider-images/4-main-bg.jpg" title="Foundry">


       	</div>

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

	<?php include('template/footer.php'); ?>