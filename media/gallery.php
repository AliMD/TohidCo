<?php
/*	$path = "media/gallery";
	$file_type = "jpg,jpeg,png,gif";
	
	$file_type=explode(',',$file_type);
	
	$dir = @dir(substr($path,-1)=='/'?$path:$path.'/') or die("Cannot open $path");
	
	while($file_name=$dir->read()){
		$file=$dir->path.$file_name;
		$file_small=$dir->path.'thumbs/'.$file_name;
		if(filetype($file)=='file' && in_array(substr($file,-3),$file_type)){
			echo "<a href='$file' rel='fncbx' class='image' >\n".
			"\t<img src='$file_small' />\n".
			"</a>\n\n";
		}
	}
	
	$dir->close();
*/
echo '<div class="jiggleGallery" >';
$path = "media/gallery";
$file_type = "jpg,jpeg,png,gif";

$file_type = explode ( ',', $file_type );

$dir = @dir ( substr ( $path, - 1 ) == '/' ? $path : $path . '/' ) or die ( "Cannot open $path" );

while ( $file_name = $dir->read () ) {
	$file = $dir->path . $file_name;
	$file_small = $dir->path . 'small/' . $file_name;
	if (! file_exists ( $file_small ))
		$file_small = "$path/404.jpg";
	if (filetype ( $file ) == 'file' && in_array ( strtolower ( substr ( $file, - 3 ) ), $file_type ) && $file_name!='404.jpg') {
		echo "<a href='$file' rel='fncbx' class='image'  >\n" . "\t<img src='$file_small' />\n" . "</a>\n\n";
	}
}
echo "<img src='$path/404.jpg' style='display:none;' onload='setTimeout(jiggleLoad,3000)'/>";
$dir->close ();

echo '</div>';
?>
