//-----Global Vars-------------------------------------------------------------------------------
var website_spinner,
    page_spinner;
var isSplash = true;

$('.sf-menu > li > a .button_act').css({opacity:0});
$('.sf-menu > li > a .title_text').css({opacity:0});
$('.sf-menu > li > a > img').css({opacity:0});

$(document).ready(function(){
    var MSIE8 = ($.browser.msie) && ($.browser.version == 8);
	$.fn.ajaxJSSwitch({
		topMargin:0,//mandatory property for decktop
		bottomMargin:0,//mandatory property for decktop
		topMarginMobileDevices:338,//mandatory property for mobile devices
		bottomMarginMobileDevices:87,//mandatory property for mobile devices
		bodyMinHeight:1000,
        delaySubMenuHide:500,
        fullHeight:false,
//-----menu---------------------------------------------------------------------------------------		
        menuInit:function (classMenu, classSubMenu){
            classMenu.find(">li").each(function(){
                var conText = $("> a", this).find('.base_text').text();
                //$("> a", this).append("<div class='button_act'></div>"); 
			})
		},
		buttonOver:function (item){
		      $(".base_text", item).stop(true).animate({color:'#565246'}, 500, 'easeOutSine');
              $(".title_text", item).stop(true).animate({opacity:1}, 450, 'easeOutSine');
              $("img", item).stop(true).animate({opacity:1}, 450, 'easeOutSine');
              //$("li", item).stop(true).css({border:'none'});
        },
		buttonOut:function (item){
		          $(".base_text", item).stop(true).animate({color:'#565246'}, 350, 'easeOutExpo');
                  $(".title_text", item).stop(true).animate({opacity:0}, 450, 'easeOutSine');
                  $("img", item).stop(true).animate({opacity:0}, 450, 'easeOutSine');
                  //$("li", item).stop(true).css({border:'none'});
        },
		subMenuButtonOver:function (item){ 
		      $("span", item).stop().css({'text-decoration':'underline'});
              $("img", item).stop(true).animate({opacity:1}, 450, 'easeOutSine');
        },
		subMenuButtonOut:function (item){
              $("span", item).stop().css({'text-decoration':'none'});
              $("img", item).stop(true).animate({opacity:0}, 450, 'easeOutSine');
        },
		subMenuShow:function(subMenu){
            if(MSIE8){
				subMenu.css({"display":"block"});
			}else{
				subMenu.stop(true).css({"display":"block"}).animate({"opacity":"1"}, 400, "easeOutCubic");
			}
        },
		subMenuHide:function(subMenu){
            if(MSIE8){
				subMenu.css({"display":"none"});
			}else{
				subMenu.stop(true).delay(300).animate({"opacity":"0"}, 400, "easeOutCubic", function(){
					$(this).css({"display":"none"})
				});
      
			}
        },
//-----PAGE-----------------------------------------------------------------------------------------------
        pageInit:function (pages){
        },
		currPageAnimate:function (page){
              page.css({top:'-1000px'}).stop(true).delay(300).animate({top:0}, 500, "easeOutExpo");
              isSplash = false;
              $(window).trigger('resize');  
        },
		prevPageAnimate:function (page){
              page.stop(true).animate({top:'-1000px'}, 300, "easeInExpo");
      
        },
		backToSplash:function (){
		      isSplash = true;
              $(window).trigger('resize');        
        },
		pageLoadComplete:function (){ 
		},
	});
//Loader---------------------------------------------------------------------------------------------------
loadersInit();
function loadersInit(){
        var opts = {
              lines: 17,
              length: 0, 
              width: 10, 
              radius: 25, 
              rotate: 0, 
              color: '#8dc63f', 
              speed: 1.3, 
              trail: 60, 
              shadow: false,
              hwaccel: false, 
              className: 'spinner', 
              zIndex: 2e9, 
              top: 'auto', 
              left: 'auto' 
        };
        var target = $("#webSiteLoader > span");
        website_spinner = new Spinner(opts).spin();
        target.append(website_spinner.el)   
        /////////////////////////////////
        var opts2 = {
              lines: 11,
              length: 0, 
              width: 10, 
              radius: 20, 
              rotate: 0, 
              color: '#8dc63f', 
              speed: 1.3, 
              trail: 60, 
              shadow: false,
              hwaccel: false, 
              className: 'spinner', 
              zIndex: 2e9, 
              top: 'auto', 
              left: 'auto' 
        };
        var target2 = $("#pageLoader > span");
        page_spinner = new Spinner(opts2).spin();
        target2.append(page_spinner.el) 
}
})


$(window).load(function(){	
    $("#webSiteLoader").delay(500).animate({opacity:0}, 600, "easeInCubic", function(){
        website_spinner.stop();
        $("#webSiteLoader").remove();
    });
    
    //$(".image_resize").image_resize({}); 
    //$('#arrows > a').hoverSprite({onLoadWebSite:true}); 
        
//-----Window resize------------------------------------------------------------------------------------------
$(window).resize(
        function(){
            resize_function();
        }
    ).trigger('resize');
    
    var hashState=window.location.hash
    
    function resize_function(){
    var h_cont = $('header').height();
	var wh = $(window).height();
		m_top = ~~(wh-h_cont)/2;
            if(isSplash){
                //setTimeout(function () {$('#wrapper .global').stop().css({'z-index':0}); }, 450);
                //$('.dynamicContent .content').stop().animate({'background-color':'#f4efeb'},600, "easeOutExpo");
                //$('header h1').stop().animate({'margin-top':'59px', 'margin-bottom':'42px'},400, "easeOutSine");
            }else{
                //$('#wrapper .global').stop().css({'z-index':1});
                //$('.dynamicContent .content').stop().animate({'background-color':'#fff'},600, "easeOutExpo");
                //$('header h1').stop().animate({'margin-top':'88px', 'margin-bottom':'61px'},400, "easeOutSine");
            } 
    }
    $(document).resize(
        function(){}
    ).trigger('resize');
//for browsers------------------------------------------------------------------------------------------------
    if($.browser.msie && $.browser.version > 7){  
        $('#menu .navbar .navbar-inner').css({'padding-bottom': '66px'});
        $('#menu .navbar .navbar-inner').css({'border-bottom': '1px solid #dedede'});
        $('.sf-menu  li > ul > li a img').css({'margin-top': '-2px', 'margin-right':'-5px'});
        $('.subMenu2 li a img').css({'margin-top': '4px'});
        $('.sf-menu .last').css({'width': '100px'});
    }
    if($.browser.mozilla){ 
        $('.subMenu2 li a img').css({'margin-top': '4px'});
    }
    if($.browser.opera){ 
        $('.subMenu2 li a img').css({'margin-top': '4px'});
    }
});