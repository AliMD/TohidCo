<div class="menu-light_fa" style="right: <?php echo $activeMenu*100; ?>px"></div>
<ul class="top-menu">
<?php 

$menu = array(
	'خانه'       => 'index_fa',
	'درباره‌ی ما' => 'about-us_fa',
	'محصولات'     => 'products_fa',
	'تجهیزات'    => 'equipment_fa',
	'گالری'      => 'gallery_fa',
	'آینده'      => 'future_fa',
	'تماس با ما' => 'contact-us_fa',
);

$id = 0;
while( list($menuName,$menuLink) = each($menu) ){
	echo "<li id='m$id' ";
	if( $activeMenu === $id )echo "class='active'";
	echo "><a href='$menuLink.php'>$menuName</a></li>";
	$id++;
}

?>
</ul>