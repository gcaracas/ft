$(window).load(function(){
		$('.slider')._TMS({
			show:0,
			pauseOnHover:false,
			prevBu:false,
			nextBu:false,
			playBu:false,
			duration:1200,
			preset:'diagonalExpand',
			pagination:true,//'.pagination',true,'<ul></ul>'
			pagNums:false,
			slideshow:1600,
			numStatus:false,
			banners:false,// fromLeft, fromRight, fromTop, fromBottom
			waitBannerAnimation:false,
			progressBar:false
		})		
 })