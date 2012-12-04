<div class="menu-light" style="left: <?php echo $activeMenu*100; ?>px"></div>
<ul class="top-menu">
<?php 

$menu = array(
	'Home'       => 'index',
	'About Us'   => 'about-us',
	'Products'   => 'products',
	'Equipment'  => 'equipment',
	'Gallery'    => 'gallery',
	'Future'     => 'future',
	'Contact Us' => 'contact-us',
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