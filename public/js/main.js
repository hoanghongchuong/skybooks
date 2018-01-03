(function ($) {
 "use strict";

 /*----------------------------
 TOP Menu Stick
------------------------------ */
$(window).on('scroll',function() {
if ($(this).scrollTop() > 120){  
    $('#header-sticky').addClass("sticky");
  }
  else{
    $('#header-sticky').removeClass("sticky");
  }
}); 


/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('#mobile-menu-active').meanmenu();	
	
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 

/*----------------------------
 slider-active
------------------------------ */  
 $('.slider-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		autoplay:true,
		nav:true,
		dots:true,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
  
/*----------------------------
 tab-active
------------------------------ */  
 $('.tab-active').owlCarousel({
		smartSpeed:1000,
		nav:true,
		autoplay:true,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:4
			},
			1000:{
				items:5
			}
		}
	})  
	
/*----------------------------
 tab-active-2
------------------------------ */  
 $('.tab-active-2').owlCarousel({
		smartSpeed:1000,
		nav:false,
		autoplay:true,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
   	
/*----------------------------
 tab-active-3
------------------------------ */  
 $('.tab-active-3').owlCarousel({
		smartSpeed:1000,
		nav:false,
		autoplay:true,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
   
/*----------------------------
 post-active
------------------------------ */  
 $('.post-active').owlCarousel({
		smartSpeed:1000,
		nav:true,
		autoplay:true,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
 

/*----------------------------
 bestseller-active
------------------------------ */  
 $('.bestseller-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})
	
/*----------------------------
 product-active-2
------------------------------ */  
 $('.product-active-2').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
		
/*----------------------------
 testimonial-active
------------------------------ */  
 $('.testimonial-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	
	
/*----------------------------
 deal-active
------------------------------ */  
 $('.deal-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	
	
/*----------------------------
 post-active-2
------------------------------ */  
 $('.post-active-2').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	
	
/*----------------------------
 hot-sell-active
------------------------------ */  
 $('.hot-sell-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})	
/*----------------------------
blog-slider-active
------------------------------ */  
 $('.blog-slider-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		dots:false,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
	
/*----------------------------
 parallax active
------------------------------ */  
$('.bg').parallax("50%", 0.1);

	
/*----------------------------
 flexslider-slider active
------------------------------ */
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	  
/*-------------------------
  showlogin toggle function
--------------------------*/
	 $( '#showlogin' ).on('click', function() {
        $( '#checkout-login' ).slideToggle(900);
     }); 
	
/*-------------------------
  showcoupon toggle function
--------------------------*/
	 $( '#showcoupon' ).on('click', function() {
        $( '#checkout_coupon' ).slideToggle(900);
     });
	 
		 
/*-------------------------
  Create an account toggle function
--------------------------*/
	$( '#cbox' ).on('click', function() {
        $( '#cbox_info' ).slideToggle(900);
     });
	 
/*-------------------------
  Create an account toggle function
--------------------------*/
	 $( '#ship-box' ).on('click', function() {
        $( '#ship-box-info' ).slideToggle(1000);
     });	
		   
/*-------------------------
  showlogin toggle function
--------------------------*/
	 $( '#showcat' ).on('click', function() {
        $( '#hidecat' ).slideToggle(900);
     }); 

/*-------------------------
  Create an account toggle function
--------------------------*/
	 $( '#side-show' ).on('click', function() {
        $( '#side-hide' ).slideToggle(1000);
     });

	
 /*--------------------------
   Countdown
---------------------------- */	
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="cdown days"><span class="counting counting-2">%-D</span>days</div><div class="cdown hours"><span class="counting counting-2">%-H</span>hrs</div><div class="cdown minutes"><span class="counting counting-2">%M</span>mins</div><div class="cdown seconds"><span class="counting">%S</span>secs</div>'));
        });
    });
	
/*---------------------
	counter
--------------------- */	  

$('.counter').counterUp({
    delay: 10,
    time: 1000
});
  
  
/*---------------------
	Category menu
--------------------- */
	$('#cate-toggle li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});
	$('#cate-toggle>ul>li.has-sub>a').append('<span class="holder"></span>');
	 
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	   
 
})(jQuery); 