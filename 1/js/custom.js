$(function() {
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});

	// PreLoader
	$(window).load(function() {
		$(".loading-wrap").fadeOut(400);
	});

	// CAMERA SLIDER
	$("#camera_wrap_1").camera({
		alignment: 'center',
		autoAdvance: true,
		mobileAutoAdvance: true,
		barDirection: 'leftToRight',
		// barPosition: 'bottom',
		loader: false,
		cols: 12,
		height: '50%',
		playPause: false,
		pagination: true,
		navigation: false,
		imagePath: 'plugins/camera/images/',
		onEndTransition: function() {
			$('div.camera_caption').css('left', '0px');
		}
	});

	// STICKY NAV
	//var stickyHeaderTop = $(window).height();
	// var stickyHeaderTop = $("#main-header").height();
 //    $(window).scroll(function() {
 //        if ($(window).scrollTop() > stickyHeaderTop) {
	// 		$("#main-menu-wrap").removeClass("static-nav");
	// 		$("#main-menu-wrap").addClass("sticky-nav");
 //        } else {
	// 		$("#main-menu-wrap").removeClass("sticky-nav");
	// 		$("#main-menu-wrap").addClass("static-nav");
 //        }
 //    });

	// ONE PAGE NAV
	$("#nav").onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
		begin: function() {
			//I get fired when the animation is starting
		},
		end: function() {
			//I get fired when the animation is ending
		},
		scrollChange: function($currentListItem) {
			//I get fired when you enter a section and I pass the list item of the section
		}
	});

	//MAGNIFIC POPUP
	$("#product-carousel").magnificPopup({
		delegate: 'a.product-zoom',
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// Count Down
	$("#countdown").countdown({
		date: "8 September 2020 09:00:00", // Change this to your desired date to countdown to
		format: "on"
	});

	// TESTIMONIAL CAROUSEL
	$("#quote-carousel").carousel({
		pause: "hover",
		wrap: false,
		interval: 6000
	});

	// TOOLTIP
	$(".tool-tip").tooltip({
		placement: "bottom"
	});

	//AJAX CONTACT FORM
	$(".contact-form").submit(function() {
		var rd = this;
		var url = "sendemail.php"; // the script where you handle the form input.
		$.ajax({
		type: "POST",
		url: url,
		data: $(".contact-form").serialize(), // serializes the form's elements.
		success: function(data)
		{
		//alert("Mail sent!"); // show response from the php script.
		$(rd).prev().text(data.message).fadeIn().delay(3000).fadeOut();
		}
		});
		return false; // avoid to execute the actual submit of the form.
	});

	// GOOGLE MAP
	var $map = $('.map');
	if ($map.length) {
		function initialize($) {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(17.421306, 78.457553),
				disableDefaultUI: false
			};
			var map = new google.maps.Map(document.querySelector('.map'), mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

});