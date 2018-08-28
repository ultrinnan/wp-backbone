$(document).ready(function() {

	// Elements animation
	anim = new WOW(
		{
			boxClass: 'anim',
			mobile: false
		}
    )
    anim.init();

	// Slider home-page
	// sliderBoxResize();

	$(window).resize(function() {
    	// sliderBoxResize();
    });

	// Carousel home-page
    $('.carousel1').owlCarousel({
		nav: true,
		loop: true,
	    margin: 10,
	    navText: '',
	    responsiveClass: true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true,
	            loop:true
	        },
	        768:{
	            items:3,
	            nav:true,
	            loop:true
	        }
	    }
    });

    // Carousel master-page
	$('.carousel2').owlCarousel({
		nav: true,
		loop: true,
	    margin: 0,
	    navText: '',
	    responsiveClass: true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true,
	            loop:true
	        },
	        768:{
	            items:5,
	            nav:true,
	            loop:true
	        }
	    }
    });

    // $('.left-btn').on('click', function(e) {
	// 	e.preventDefault();
	// 	$('.modal').fadeIn();
	// 	$('.left-panel').animate({'left': '0'}, 400, 'linear');
	// });

	$('.right-btn').on('click', function(e) {
		e.preventDefault();
		$('.search-box').toggle();
	});

	$('#close-panel').on('click', function(e) {
		e.preventDefault();
		$('.modal').fadeOut();
		$('.left-panel').animate({'left': '-355px'}, 400, 'linear');
	});

	$('.modal').on('click', function() {
		$(this).fadeOut();
		$('.left-panel').animate({'left': '-355px'}, 400, 'linear');
	})

    var seo = $('.seo').html(),
	    winW = $(window).width();

    $('.description-bottom').find('.content').html(seo);

    if(winW >= 768) {
    	$(window).on('scroll', function() {
	    	var scroll = $(window).scrollTop();
	    	if(scroll > 100) {
	    		headerDec()
	    	} else {
	    		headerInc()
	    	}
	    })
    };


    // Mob menu toggling
    $('#mob-menu').on('click', function(e) {
    	e.preventDefault();
    	$('.main-nav').toggle(600)
    });
    $('#close-mob').on('click', function(e) {
    	e.preventDefault();
    	$('.main-nav').hide(600)
    });

    $('.mobile_menu').click(function () {
        $('.main-nav').show(600);
        $('.mobile_mask').show(600);
    });
    $('.mobile_mask, .main-nav').click(function () {
        $('.main-nav').hide();
        $('.mobile_mask').hide();
    });

});

// Decrease header
function headerDec() {
	$('.logo').addClass('sm-left', 100, 'easeOutQuart')
	$('.main-nav').addClass('smaller3', 100, 'easeOutQuart')
	$('.left-btn').addClass('smaller2', 100, 'easeOutQuart')
	$('header, .right-btn').addClass('smaller', 150, 'easeOutQuart')
	$('.left-panel').animate({'padding-top': '85px'}, 100, 'linear')
	$('#close-panel').animate({'top': '60px'}, 100, 'linear')
};

function headerInc() {
	$('.logo').removeClass('sm-left', 100, 'easeOutQuart')
	$('.main-nav').removeClass('smaller3', 100, 'easeOutQuart')
	$('.left-btn').removeClass('smaller2', 100, 'easeOutQuart')	
	$('header, .right-btn').removeClass('smaller', 150, 'easeOutQuart')
	$('.left-panel').animate({'padding-top': '135px'}, 100, 'linear')
	$('#close-panel').animate({'top': '106px'}, 100, 'linear')
}


// Slider box sizes
// function sliderBoxResize() {
// 	var imgH = $('#main-slider').height();
// 	$('.main-top').find('.row > div:first').height(imgH - 60);
// };