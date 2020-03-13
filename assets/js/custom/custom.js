/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: true
	}); // end register flexslider

	$('.foodimages').flexslider({
		animation: "slide",
		animationLoop: true,
		controlNav: true,
		directionNav: false
	}); 
	

	if ( $(".entry-title.title-center").length > 0 ) {
		var totalWidth = $(".entry-title.title-center").outerWidth();
		var spanMiddle = $(".entry-title.title-center span.middle").outerWidth();
		var midWidth = (parseFloat(spanMiddle)) + 40;
		var tw = totalWidth - spanMiddle;
		var sideWidth = (tw/2) - 20;
		var side = sideWidth.toFixed(2);
		$(".entry-title.title-center span.left").css("width",side+"px");
		$(".entry-title.title-center span.right").css("width",side+"px");
	}

	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});

	$(".inline").colorbox({inline:true, width:"50%"});


	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();


	$(document).on("click","#toggleMenu",function(){
		$(this).toggleClass('open');
		$('.mobile-navigation').toggleClass('open');
		$('body').toggleClass('open-mobile-menu');
		$('.site-header .logo').toggleClass('fixed');
		var parentdiv = $(".mobile-navigation").outerHeight();
		var mobile_nav_height = $(".mobile-main-nav").outerHeight();
		if(mobile_nav_height>parentdiv) {
			$('.mobile-navigation').addClass("overflow-height");
		}
	});

	/* Order Online Dropdown */
	$(document).on("click","#top-menu #menu-item-90 a",function(e){
		e.preventDefault();
		$(".order-options").toggleClass('open');
	});

	$(document).on("click","#close-order",function(e){
		e.preventDefault();
		$(".order-options").removeClass('open');
	});

});// END #####################################    END