require('jquery');

jQuery(document).ready(function ($) {
	console.log('test')
	$('.action--show-gallery').click(function(){
		$('body').addClass('state--gallery-visible')
	})

	$('.action--hide-gallery').click(function(){
		$('body').removeClass('state--gallery-visible')
	})

	$(".slider").slick({
 
	  // normal options...
	  infinite: true,
	  dots: false,
	  lazyload: 'ondemand',
	 
	  // the magic
	  responsive: [{
	 
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1,
	        infinite: true,
	        dots: true
	      }
	 
	    }, {
	 
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        dots: true
	      }
	 
	    }, {
	 
	      breakpoint: 300,
	      settings: "unslick" // destroys slick
	 
	    }]
	});
	$('section.block-hero-content').last().addClass('last');
})