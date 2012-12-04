<?php

$_imgNmbrs = 4;//define your images number here

$_fdInTme = 1500;//define image fade in time in ms
$_fdOutTme = 750;//define image fade out time in ms
$_shwImgDlyTme = 4000;//define stay on image time in ms

$_codes = "	_frstDlyTme = 0;//ms
			
			function homeImageSlider() {
			
				$('#image1').delay(_frstDlyTme).animate({
					'opacity' : '1'
				}, $_fdInTme, ";
			
	for ( $i = 1; $i < $_imgNmbrs; $i++ ) {
		$j = $i+1;
		$_codes .= "function() {
					$('#image" . $i . "').delay($_shwImgDlyTme).animate({
						'opacity' : '0'
					},  $_fdOutTme);
					$('#image" . $j . "').delay($_shwImgDlyTme).animate({
						'opacity' : '1'
					}, $_fdInTme, ";
	}
	
	$_codes .= "function() {
						$('#image" . $_imgNmbrs . "').delay($_shwImgDlyTme).animate({
							'opacity' : '0'
						},  $_fdOutTme);
						_frstDlyTme = $_shwImgDlyTme;
						homeImageSlider();";
						
	for ( $i = 1; $i <= $_imgNmbrs; $i++ ) {
		$_codes .= "});";
	}
	
	$_codes .= "};";
	
	echo($_codes);
	
?>