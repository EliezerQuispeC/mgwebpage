(function($){var $main_window=$(window);$('#preloader').fadeOut();$main_window.on("scroll",function(){if($(this).scrollTop()>250){$(".back-to-top").fadeIn(200);}else{$(".back-to-top").fadeOut(200);}});$(".back-to-top").on("click",function(){$("html, body").animate({scrollTop:0},"slow");return false;});var logo_path=$('.mobile-menu').data('logo');$('#main-menu').slicknav({appendTo:'.mobile-menu',removeClasses:false,label:'',closedSymbol:'<i class="fas fa-chevron-right"><i/>',openedSymbol:'<i class="fas fa-chevron-down"><i/>',brand:'<a href="index.html"><img src="'+logo_path+'" class="img-responsive" alt="logo"></a>'});$main_window.on('scroll',function(){var scroll=$(window).scrollTop();if(scroll>=10){$(".scrolling-navbar").addClass("top-nav-collapse");}else{$(".scrolling-navbar").removeClass("top-nav-collapse");}});var wow=new WOW({mobile:false});wow.init();$('#portfolio').mixItUp();if($(".counter").length>0){$(".counter").counterUp({delay:1,time:800});}
$('.skill-shortcode').appear(function(){$('.progress').each(function(){$('.progress-bar').css('width',function(){return($(this).attr('data-percentage')+'%')});});},{accY:-100});var detailsslider=$("#clients-scroller");detailsslider.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:30,loop:true,responsiveClass:true,responsive:{0:{items:1,},575:{items:2,},991:{items:4,}}});var newproducts=$("#color-client-scroller");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:3,},991:{items:4,}}});var newproducts=$("#testimonial-item");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:10,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:2,},991:{items:2,}}});var newproducts=$("#testimonial-dark");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:2,},991:{items:3,}}});var newproducts=$("#single-testimonial-item");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:1,},991:{items:1,}}});var newproducts=$("#image-carousel");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:3,},991:{items:4,}}});var newproducts=$("#carousel-image-slider");newproducts.owlCarousel({autoplay:false,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,responsiveClass:true,responsive:{0:{items:1,},575:{items:2,},991:{items:1,}}});var newproducts=$("#carousel-about-us");newproducts.owlCarousel({autoplay:true,nav:false,autoplayHoverPause:true,smartSpeed:350,dots:true,margin:5,loop:true,navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],responsiveClass:true,responsive:{0:{items:1,},575:{items:1,},991:{items:1,}}});})(jQuery);