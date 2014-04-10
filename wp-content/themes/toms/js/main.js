/*jQuery(window).load(function() { 
	jQuery("#status").fadeOut(function(){
		jQuery('body').removeClass('disabled');
	}); 
	jQuery("#preloader").delay(350).fadeOut("slow"); 
}); */

/* Lazy Load */

jQuery(function() {
	jQuery("img.lazy").lazyload({
		event : "sporty"
	});
});

jQuery(window).bind("load", function() {
	var timeout = setTimeout(function() {
		jQuery("img.lazy").trigger("sporty")
	}, 1000);



	

});

/* Document Ready */

jQuery(document).ready(function(){

	/* One Page Scrolling */

	jQuery(".nav-button").click(function(e) {
		e.preventDefault();
		var targetid = jQuery(this).attr('href');
		jQuery('html, body').animate({
			scrollTop: (jQuery(targetid).offset().top - 55)
		}, 600, 'easeInOutQuart', function(){
		});
	});

	/* jLocator Init */



	jQuery('#jlocator').jlocator({
		geolocation: false
	});

	/* Button Animation */

	setTimeout(function() {
      // Do something after 5 seconds
      jQuery('.button-lightblue').toggleClass('animate-button-out');
  }, 1000);

	/* Waypoint Init */

	jQuery.fn.waypoint.defaults = {
		context: window,
		continuous: true,
		enabled: true,
		horizontal: false,
		offset: 120,
		triggerOnce: true
	}
	jQuery('#products').waypoint(function(direction){
		/*jQuery("ul[data-liffect] li").each(function (i) {
			jQuery(this).attr("style", "-webkit-animation-delay:" + i * 100 + "ms;"
				+ "-moz-animation-delay:" + i * 100 + "ms;"
				+ "-o-animation-delay:" + i * 100 + "ms;"
				+ "animation-delay:" + i * 100 + "ms;");
			if (i == jQuery("ul[data-liffect] li").size() -1) {
				jQuery("ul[data-liffect]").addClass("play")
			}
		});*/
});

	/* Metrics Animation */

	jQuery('.giving-metrics').waypoint(function(direction) {
		console.log('asd');
		jQuery('.animate-header').toggleClass('animate-header');
		jQuery("#shoes-number").animateNumber(60);
		jQuery("#sight-number").animateNumber(13);
	}, {offset: 'bottom-in-view'});

	/* Slider Init */

	var womenflag = true, menflag = false, youthflag = false, tinyflag = false;

	var womenslider = jQuery('#bxslider-women').bxSlider({
		mode:'fade',
		adaptiveHeight:true,
		pagerCustom: '#bx-pager-women'
	});

	var menslider = jQuery('#bxslider-men').bxSlider({
		mode:'fade',
		adaptiveHeight:true,
		pagerCustom: '#bx-pager-men'
	});


	var youthslider = jQuery('#bxslider-youth').bxSlider({
		mode:'fade',
		adaptiveHeight:true,
		pagerCustom: '#bx-pager-youth'
	});

	var tinyslider = jQuery('#bxslider-tiny').bxSlider({
		mode:'fade',
		adaptiveHeight:true,
		pagerCustom: '#bx-pager-tiny'
	});

	var eyewearslider = jQuery('#bxslider-eyewear').bxSlider({
		mode:'fade',
		adaptiveHeight:true,
		pagerCustom: '#bx-pager-eyewear'
	});

	var seasonslider = jQuery('#bxseasonal').bxSlider({
		pager: false,
		mode:'fade'
	});

	/* Bootstrap Tabs */

	jQuery('#producttab a').click(function (e) {
		e.preventDefault();
		jQuery(this).tab('show');
	});

	jQuery('#producttab a[href="#women"]').on('shown.bs.tab', function (e) {
		womenslider.reloadSlider();
	});

	jQuery('#producttab a[href="#men"]').on('shown.bs.tab', function (e) {
		menslider.reloadSlider();
	});

	jQuery('#producttab a[href="#youth"]').on('shown.bs.tab', function (e) {
		youthslider.reloadSlider();	
	});

	jQuery('#producttab a[href="#tiny"]').on('shown.bs.tab', function (e) {
		tinyslider.reloadSlider();
	});
	jQuery('#producttab a[href="#eyewear"]').on('shown.bs.tab', function (e) {
		eyewearslider.reloadSlider();
	});
	
});
/* End of Document Ready */



/* ANIMATE NUMBER */

(function(jQuery) {
	jQuery.fn.animateNumber = function(to) {
		var jQueryele = jQuery(this),
		num = parseInt(jQueryele.html()),
		up = to > num,
		num_interval = Math.abs(num - to) / 90;

		var loop = function() {
			num = up ? Math.ceil(num+num_interval) : Math.floor(num-num_interval);
			if ( (up && num > to) || (!up && num < to) ) {
				num = to;
				clearInterval(animation)
			}
			jQueryele.html(num);
		}

		var animation = setInterval(loop, 15);
	}
})(jQuery)