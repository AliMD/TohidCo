/*!
 * a 1Devs.com script
 * Jiggle Gallery v2.0
 * ali[at]mihandoost[dot]com
 */
 
function rand(a,b){
	return Math.floor(Math.random()*(b-a+1)+a);
}

var minJiggle=2/2;
var maxJiggle=8/2;
var overJiggle=8/2;
var jiggle = minJiggle;

function jiggleLoad(){

	$("div.jiggleGallery a.image").each(function(){
		var pos = $(this).position();
		$(this).data('Otop',parseFloat(pos.top));
		$(this).data('Oleft',parseFloat(pos.left));
	});
	
	var t=rand(-100,900);
	var l=rand(-300,1000);
		
	$("div.jiggleGallery a.image").each(function(){
		
		$(this).css({
			"position":"absolute",
			"top":t+'px',
			"left":l+'px'
		});
	});
	
	$("div.jiggleGallery a.image").hover(
		function(){
			var t=$(this).data('Otop')+rand(-overJiggle*2,overJiggle);
			var l=$(this).data('Oleft')+rand(-overJiggle*2,overJiggle);
			
			$(this).stop().css({"z-index":10}).animate({
					"top":t+'px',
					"left":l+'px',
					"opacity":0.95
			},300,'easeOutCubic');
			
			$('img',this).stop().animate({
					"height":"150px"
			},600);
			
		},function(){
			if(jiggle<=maxJiggle)jiggle++;
			var t=$(this).data('Otop')+rand(-jiggle,jiggle);
			var l=$(this).data('Oleft')+rand(-jiggle,jiggle);
			$(this).stop().css({"z-index":1}).animate({
					"top":t+'px',
					"left":l+'px',
					"opacity":0.85
			},1500,'easeOutCubic');
			
			$('img',this).stop().animate({
					"height":"125px"
			},400);
		}
	);
	
	$("div.jiggleGallery a.image").click(function(){
		Reset();
		return false;
	});
	
	$("div.jiggleGallery a.image").fancybox({
		zoomSpeedIn: 500,
		zoomSpeedOut: 300,
		overlayShow:true,
		overlayColor:'black',
		overlayOpacity:0.7,
		showLoading:true
	});
	
	setTimeout(Reset,100);
}

function Reset(){
	jiggle = minJiggle; d=0;
	$("div.jiggleGallery a.image").each(function(){
		var t=$(this).data('Otop')+rand(-jiggle,jiggle);
		var l=$(this).data('Oleft')+rand(-jiggle,jiggle);
		$(this).stop().delay(d+=100).animate({
				"top":t+'px',
				"left":l+'px',
				"opacity":0.85
		},800);
	});
}

