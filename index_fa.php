<?php
$pageTitle = 'خانه';
$pageId = 'home-page';
$activeMenu = 0;
$langUrl = 'index.php';
include('template/header_fa.php');
?>
<!-- start === main content ===== -->

    <div class="main-container">

<!-- start ===== changeable =========================================================================================================================== -->

    	<div class="content-lft-col_fa">

        	<h1 class="titre">شرکت صنایع ریخته‌گری توحید خراسان</h1>

            <!-- <p class="promo-titre">شرکت صنایع<br/><span class="highLight">ریخته‌گری</span><br/>با <span class="highLight">ایده‌های جهانی.</span></p> -->

            <p class="promo-titre"><span class="highLight">رضایت</span> مشتری<br /><span class="highLight">فن‌آوری </span>بالا<br/><span class="highLight">تجهیزات</span> روز آمد</p>

        </div>

        <div class="slider-right-col_fa">

            <div class="slider-right-col">

                <script type="text/javascript">

                    <?php include('sliders/home-page-slider.php'); ?>

                </script>

            
                <img id="image1" src="sliders/home-page-slider-images/1-main-bg_fa.jpg" title="Foundry">
                <img id="image2" src="sliders/home-page-slider-images/2-main-bg_fa.jpg" title="Foundry">
                <img id="image3" src="sliders/home-page-slider-images/3-main-bg_fa.jpg" title="Foundry">
                <img id="image4" src="sliders/home-page-slider-images/4-main-bg_fa.jpg" title="Foundry">

            </div>

        </div>

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

	<?php include('template/footer_fa.php'); ?>