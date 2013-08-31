$(function(){
	//	Initialize Superfish
	$('.sf-menu').superfish({
		autoArrows: false
	});
	
	$('.list-1 a').hover(
		function(){
			$(this).find("img").stop().animate({opacity:'0.5'},200)
		},
		function(){
			$(this).find("img").stop().animate({opacity:'1'},200)
		}
	)
})