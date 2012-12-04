function rand(a,b){
    return Math.floor(Math.random()*(b-a+1)+a);
}

$(document).ready(function() {
	
	// Set CSS settings for aniamtion and effects =======================
	$('#home-page .slider-right-col img#image1').css({
		'opacity' : '0'
	});
	
	$('.equ_content').css({
		'display' : 'none'
	});
	
	$('.future_content').css({
		'display' : 'none'
	});
	
	$('.gallery_info').css({
		'height': '0px'
	});
	
	// menus effect ====================================================
	var menu_light_left = $('.menu-light').css('left');
	
	$('.top-menu li').hover(function(e) {
		var currentId = $(this).attr('id').substr(1);
		$('.menu-light').stop().animate({
			'left' : currentId * 100 + 'px'
		}, 600, 'easeOutElastic');
	}, function() {
		$('.menu-light').stop().animate({
			'left' : menu_light_left
		}, 300, 'easeOutBack');
	});
	
	
	// farsi menus effect ==============================================
	var menu_light_fa_right = $('.menu-light_fa').css('right');
	
	$('.top-menu li').hover(function(e) {
		var currentId = $(this).attr('id').substr(1);
		$('.menu-light_fa').stop().animate({
			'right' : currentId * 100 + 'px'
		}, 600, 'easeOutElastic');
	}, function() {
		$('.menu-light_fa').stop().animate({
			'right' : menu_light_fa_right
		}, 300, 'easeOutBack');
	});
	
	
	// future effect ================================================
	/*
	$( '.future_box' ).click(function() {
		$('.future_content', this).toggle( 250 );
	});
	
	*/
	
	// gallery effect =================================================
	$( '.galleries_list .gallery_wrapper' ).hover(function() {
		$( '.gallery_info', this ).stop().animate({
			'height': '150px'
		}, 200);
	}, function() {
		$( '.gallery_info', this ).stop().animate({
			'height': '0'
		}, 200);
	});
	
	
	
	// products effect =================================================
	$('.product_wrapper').mouseover( function() {
		$('.product_info', this).stop().animate({
			'height': '45px'
		}, 200);
	});
	
	$('.product_wrapper').mouseout(function() {
		$('.product_info', this).stop().animate({
			'height': '25px'
		}, 200);
	});
	
	$("a[rel=group]").each(function(){
		$(this).fancybox({
			'overlayShow':true,
			'overlayColor':'#222',
			'transitionIn':'elastic',
			'transitionOut':'elastic',
			'titlePosition':'over',
			'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
				return '<div id="fancybox-title-over">' + (title.length ? ' &nbsp; ' + title : '') + '</div>';
			}
		});
	});
	
	
	// equipment effect ================================================
	var index=0;
	var dly=300;
	$('.eq-contents .eq-cntnt').each(function(){
		$(this).attr('id','eq'+index);
		$('.imgslider',this).nivoSlider({
			pauseTime : 4E3,
			slices:10,
            controlNav:false,
            keyboardNav:false
        }).data('nivoslider').stop();
		index++;
	});
	
	index=0;
	$('div.eq-links li').each(function(){
		
		$(this).data('index',index).stop().delay(dly).animate({
			opacity:1
		},800);
		
		$(this).click(function(){
			
			var anidue =800;
			$('div.eq-links li').each(function(){
				$(this).stop().animate({
					opacity:0
				},rand(0,anidue-200));
			});
			
			$(this).stop().animate({
				opacity:0
			},anidue,null,function(){
				$('div.eq-links').css({
					display:'none'
				});
			});
			
			var index=$(this).data('index');
			$('#eq'+index).css({
				display:'block',
				opacity:0
			}).stop().delay(anidue).animate({
				opacity:1
			},anidue,null,function(){
				$('.imgslider',this).data('nivoslider').start();
			});
			
			$('.eq-contents .back').css({
				display:'block',
				opacity:0
			}).stop().delay(anidue*1.8).animate({
				opacity:1
			},anidue);
			
		});
		
		$('.equ_title','#eq'+index).html($('H3',this).html());
		
		index++;
		dly+=200;
		
	});
	
	$('.eq-contents .back').click(function(){
		
		$(this).stop().animate({
			opacity:0
		},250,null,function(){
			$(this).css({
				display:'none'
			});
		});
		
		$('div.eq-cntnt').each(function(){
			if($(this).css('display')=='block'){
				$(this).stop().animate({
					opacity:0
				},400,null,function(){
					$(this).css({
						display:'none'
					});
					$('div.eq-links').css({
						display:'block'
					});
				});
				$('.imgslider',this).data('nivoslider').stop();
			}
		});
		
		var dly=400;
		$('div.eq-links li').each(function(){
			$(this).stop().delay(dly).animate({
				opacity:1
			},600);
			dly+=200;
		});
		
		return false;
	});


});  //Document ready close
