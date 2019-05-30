/* FlexSlider */
$(window).load(function(){
  $('.flexslider').flexslider({       
	animation: "fade",
	controlNav: false,
	directionNav: true,
	slideToStart: 0,
	start : function(slider) {
	},
	before: function(slider){
		var eqZap = slider.currentSlide;
		var sliderLinks = $('.slide-links a');
		sliderLinks.removeClass('active');
		((eqZap+1) == slider.count) ? sliderLinks.eq(0).addClass('active') : sliderLinks.eq(eqZap+1).addClass('active');
	}
  });
  $('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: false,
	controlNav: false,
	directionNav: true,
    itemWidth: 228,
    itemMargin: 5
  });
  $('.flexslider3').flexslider({
    animation: "slide",
	controlNav: false,
	directionNav: true
  });
});